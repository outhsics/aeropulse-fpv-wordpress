#!/usr/bin/env python3
"""Export live local WordPress (http://localhost:8088) to static Cloudflare Workers Assets."""
import os
import shutil
import urllib.request
from pathlib import Path

BASE_URL = "http://localhost:8088"
PROD_URL = "https://aeropulse-wp-demo.outhsics.workers.dev"
ROOT = Path(__file__).resolve().parent.parent
DIST = ROOT / "dist-static"
THEME_SRC = ROOT / "wp-content" / "themes" / "aeropulse-fpv"

PAGES = [
    "/",
    "/products/",
    "/products/cinepulse-35-o4-pro/",
    "/products/vortex-5-hd-freestyle/",
    "/products/stratos-lr7-long-range/",
    "/products/pulsestack-f722-60a/",
    "/products/vtx-maten-58g-2500mw/",
    "/products/carbonx-5-frame-kit/",
    "/support/",
    "/contact/",
    "/case-study/",
]

def fetch(path: str) -> bytes:
    req = urllib.request.Request(BASE_URL + path, headers={"User-Agent": "AeroPulse-WP-Exporter/1.0"})
    with urllib.request.urlopen(req, timeout=15) as resp:
        return resp.read()

def main():
    if DIST.exists():
        shutil.rmtree(DIST)
    DIST.mkdir(parents=True, exist_ok=True)

    # 1. Export rendered WordPress HTML pages
    for path in PAGES:
        raw = fetch(path).decode("utf-8", errors="replace")
        # Keep canonical / og:url / JSON-LD pointing to PROD_URL, and asset/nav links root-relative
        html = raw.replace(BASE_URL + "/wp-content/", "/wp-content/")
        html = html.replace(BASE_URL + "/wp-includes/", "/wp-includes/")
        html = html.replace(BASE_URL + "/wp-sitemap.xml", "/wp-sitemap.xml")
        html = html.replace(f'href="{BASE_URL}/"', 'href="/"')
        html = html.replace(f'href="{BASE_URL}/', 'href="/')
        html = html.replace(BASE_URL, PROD_URL)

        out_dir = DIST if path == "/" else DIST / path.strip("/")
        out_dir.mkdir(parents=True, exist_ok=True)
        (out_dir / "index.html").write_text(html, encoding="utf-8")
        print(f"Exported {path} -> {out_dir / 'index.html'} ({len(html)} bytes)")

    # 2. Export XML sitemap (Yoast or WP core)
    sitemap_xml = None
    for sm_path in ["/sitemap_index.xml", "/wp-sitemap.xml"]:
        try:
            sm = fetch(sm_path).decode("utf-8", errors="replace")
            if "<urlset" in sm or "<sitemapindex" in sm:
                sitemap_xml = sm.replace(BASE_URL, PROD_URL)
                break
        except Exception:
            pass

    if not sitemap_xml:
        urls = "\n".join(f"  <url><loc>{PROD_URL}{p}</loc></url>" for p in PAGES)
        sitemap_xml = f'<?xml version="1.0" encoding="UTF-8"?>\n<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">\n{urls}\n</urlset>\n'

    (DIST / "wp-sitemap.xml").write_text(sitemap_xml, encoding="utf-8")
    (DIST / "sitemap.xml").write_text(sitemap_xml, encoding="utf-8")
    (DIST / "robots.txt").write_text(f"User-agent: *\nAllow: /\nSitemap: {PROD_URL}/wp-sitemap.xml\n", encoding="utf-8")

    # 3. Copy theme static assets (CSS, JS, images, wp-admin screenshots)
    theme_dest = DIST / "wp-content" / "themes" / "aeropulse-fpv"
    theme_dest.mkdir(parents=True, exist_ok=True)
    shutil.copy2(THEME_SRC / "style.css", theme_dest / "style.css")
    if (THEME_SRC / "assets").exists():
        shutil.copytree(THEME_SRC / "assets", theme_dest / "assets", dirs_exist_ok=True)

    print("Static export completed cleanly ->", DIST)

if __name__ == "__main__":
    main()
