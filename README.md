# AeroPulse FPV — WordPress 智能硬件出海官网独立建站案例

> 作者：**Terre**（9 年全栈与独立站工程经验）
> 在线演示站点：[https://aeropulse-wp-demo.outhsics.workers.dev/](https://aeropulse-wp-demo.outhsics.workers.dev/)
> WP 后台与建站复盘页：[https://aeropulse-wp-demo.outhsics.workers.dev/case-study/](https://aeropulse-wp-demo.outhsics.workers.dev/case-study/)
> 个人作品工作台：[https://terre-admin-identity.outhsics.workers.dev/apps](https://terre-admin-identity.outhsics.workers.dev/apps)

## 项目简介

针对深圳智能硬件 / FPV 穿越机消费电子出海品牌场景（如电影穿越机、5 寸花飞整机、飞控电调图传与 3K 碳纤维机架），基于 **WordPress 7.1 + MySQL 8.4 + 自定义主题 `aeropulse-fpv` + Elementor + Yoast SEO + Contact Form 7** 独立搭建的产品展示与 B2B 询盘官网。

项目提供两种运行形态：
1. **完整动态 WordPress 后台**：本地一行 `docker compose up -d` 即可启动真实 `wp-admin` 后台、MySQL 数据库与 WP-CLI 自动化脚本。
2. **线上全球边缘静态演示站**：通过 `scripts/export-static.py` 将真实 WordPress 渲染页面与 `/wp-content/` 静态资源导出至 Cloudflare Workers Assets，供面试官零等待直接访问体验。

## 负责的页面与核心工作内容

- **站点栏目与信息架构**：规划品牌首页、产品分类页、产品详情页、技术支持与固件下载中心、B2B 联系询盘页与建站复盘页。
- **自定义主题与产品库 CPT**：在 `wp-content/themes/aeropulse-fpv/` 下编写完整 WordPress 主题，注册 `fpv_product` 自定义文章类型与 `product_category` 分类法，支持运营在后台直接上新与维护硬件参数。
- **插件生态集成**：通过 WP-CLI 安装并启用 **Elementor**（页面可视化编辑）、**Yoast SEO**（站内 SEO 管理）与 **Contact Form 7**（询盘表单）。
- **视觉排版与双端适配**：采用深色工业科技风格与高对比参数表，兼容 PC 端与移动端自适应浏览，并内置 **中英文一键切换（默认简体中文）**。
- **站内 SEO 与运维规范**：配置规范化固定链接（`/%postname%/`）、TDK、图片语义化 ALT、`Product` / `Organization` JSON-LD 结构化数据、XML Sitemap（`/wp-sitemap.xml`）与 `robots.txt`。

## 本地一键启动真实 WordPress

```bash
docker compose up -d
docker compose --profile cli run --rm wpcli sh /scripts/setup-wp.sh
```

- 前台地址：`http://localhost:8088/`
- 后台地址：`http://localhost:8088/wp-admin/`（账号：`terre_admin` / 密码：`AeroPulse2026!Demo`）

## 导出静态站并部署到 Cloudflare Workers

```bash
python3 scripts/export-static.py
wrangler deploy
```
