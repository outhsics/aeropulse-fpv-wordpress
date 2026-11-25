<?php
/**
 * Footer template for AeroPulse FPV Showcase
 */
?>
</main>
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-col">
        <div class="brand-logo" style="margin-bottom:12px;">
          <span class="brand-mark">AP</span>
          <span>AEROPULSE <span class="brand-sub">FPV</span></span>
        </div>
        <p data-zh="专注高性能 FPV 穿越机整机、碳纤维机架与飞控图传电子系统的智能硬件品牌展示官网。本项目由 Terre 基于 WordPress 7.1 + 自定义产品库 CPT + Elementor + Yoast SEO 独立搭建并部署上线。" data-en="High-performance FPV cinema drones, carbon fiber frames, and flight electronics showcase built by Terre on WordPress 7.1 with custom CPT catalog, Elementor, and Yoast SEO.">
          专注高性能 FPV 穿越机整机、碳纤维机架与飞控图传电子系统的智能硬件品牌展示官网。本项目由 Terre 基于 WordPress 7.1 + 自定义产品库 CPT + Elementor + Yoast SEO 独立搭建并部署上线。
        </p>
      </div>
      <div class="footer-col">
        <h4 data-zh="产品系列" data-en="Products">产品系列</h4>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/products/?cat=cinewhoop')); ?>" data-zh="电影穿越机 Cinewhoop" data-en="Cinewhoop Drones">电影穿越机 Cinewhoop</a></li>
          <li><a href="<?php echo esc_url(home_url('/products/?cat=freestyle')); ?>" data-zh="花飞整机 Freestyle" data-en="Freestyle Quads">花飞整机 Freestyle</a></li>
          <li><a href="<?php echo esc_url(home_url('/products/?cat=electronics')); ?>" data-zh="飞控 / 电调 / 图传" data-en="FC / ESC / VTX">飞控 / 电调 / 图传</a></li>
          <li><a href="<?php echo esc_url(home_url('/products/?cat=frames')); ?>" data-zh="3K 碳纤维机架" data-en="Carbon Frames">3K 碳纤维机架</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4 data-zh="支持与运维" data-en="Support & SEO">支持与运维</h4>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/support/')); ?>" data-zh="固件与 CLI 调参下载" data-en="Firmware & CLI Dumps">固件与 CLI 调参下载</a></li>
          <li><a href="<?php echo esc_url(home_url('/case-study/')); ?>" data-zh="WordPress 后台实操复盘" data-en="WP Admin Case Study">WordPress 后台实操复盘</a></li>
          <li><a href="<?php echo esc_url(home_url('/wp-sitemap.xml')); ?>" data-zh="站内 SEO 网站地图 (Sitemap)" data-en="XML Sitemap">站内 SEO 网站地图 (Sitemap)</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" data-zh="渠道合作与询盘" data-en="B2B / OEM Inquiry">渠道合作与询盘</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4 data-zh="项目源码与作品集" data-en="Portfolio & Repo">项目源码与作品集</h4>
        <ul>
          <li><a href="https://github.com/outhsics/aeropulse-fpv-wordpress" target="_blank" rel="noreferrer">GitHub 源码仓库</a></li>
          <li><a href="https://terre-admin-identity.outhsics.workers.dev/apps" target="_blank" rel="noreferrer">Terre 作品工作台</a></li>
          <li><a href="https://voltpeak-gtm-studio.outhsics.workers.dev/" target="_blank" rel="noreferrer">VoltPeak Shopify 案例</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span data-zh="© 2026 AeroPulse FPV · WordPress 独立建站作品案例（作者：Terre · 9 年全栈与独立站工程经验）" data-en="© 2026 AeroPulse FPV · WordPress Showcase by Terre (9 yrs Full-Stack & Independent Site Experience)">© 2026 AeroPulse FPV · WordPress 独立建站作品案例（作者：Terre · 9 年全栈与独立站工程经验）</span>
      <span>Powered by WordPress 7.1 · Elementor · Yoast SEO · CF7</span>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
