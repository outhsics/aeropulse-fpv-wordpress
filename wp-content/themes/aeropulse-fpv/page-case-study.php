<?php
/**
 * Template Name: WP Case Study
 */
get_header();
$shot_base = get_template_directory_uri() . '/assets/admin-shots/';
?>
<section class="section">
  <div class="container">
    <div class="breadcrumbs">
      <a href="<?php echo esc_url(home_url('/')); ?>" data-zh="首页" data-en="Home">首页</a> / <span data-zh="WP 后台与建站复盘" data-en="WP Case Study">WP 后台与建站复盘</span>
    </div>

    <div class="section-head">
      <div>
        <span class="eyebrow" data-zh="面试官专属说明 · 真实 WordPress 7.1 独立建站案例" data-en="FOR INTERVIEWERS · REAL WORDPRESS 6.7 CASE STUDY">面试官专属说明 · 真实 WordPress 7.1 独立建站案例</span>
        <h1 style="margin:0 0 8px;font-size:2rem;" data-zh="AeroPulse FPV 智能硬件官网 — 建站架构与本人负责内容" data-en="AeroPulse FPV Website — Architecture & Responsibilities">AeroPulse FPV 智能硬件官网 — 建站架构与本人负责内容</h1>
        <p data-zh="本项目由 Terre（9 年研发与独立站工程经验）独立完成从站点栏目规划、WordPress 环境搭建、自定义主题开发、插件配置、SEO 优化到静态化上线发布的全流程。" data-en="End-to-end WordPress build by Terre (9 yrs experience): IA planning, Docker WP setup, custom theme & CPT, Elementor/Yoast/CF7 stack, SEO, and deployment.">
          本项目由 Terre（9 年研发与独立站工程经验）独立完成从站点栏目规划、WordPress 环境搭建、自定义主题开发、插件配置、SEO 优化到静态化上线发布的全流程。
        </p>
      </div>
    </div>

    <div class="info-grid" style="margin-bottom:44px;">
      <div class="info-card">
        <h3 data-zh="1. 负责的页面与视觉搭建" data-en="1. Pages & Visual Design">1. 负责的页面与视觉搭建</h3>
        <p data-zh="独立规划并制作 5 大核心页面：品牌首页（Hero + 矩阵 + 旗舰精选）、产品分类筛选页（支持品类切换与实时搜索）、产品参数详情页（规格表 + 包装清单 + JSON-LD）、技术支持与固件下载页、B2B 联系询盘页；全站实现 PC 与移动端自适应及中英文一键切换。" data-en="Designed and built 5 core pages: Homepage, filterable Product Archive, Product Detail with spec table & JSON-LD, Firmware Support Center, and B2B Inquiry page with responsive PC/Mobile layout and CN/EN toggle.">
          独立规划并制作 5 大核心页面：品牌首页（Hero + 矩阵 + 旗舰精选）、产品分类筛选页（支持品类切换与实时搜索）、产品参数详情页（规格表 + 包装清单 + JSON-LD）、技术支持与固件下载页、B2B 联系询盘页；全站实现 PC 与移动端自适应及中英文一键切换。
        </p>
      </div>
      <div class="info-card">
        <h3 data-zh="2. WordPress 后台与插件体系" data-en="2. WordPress Backend & Plugins">2. WordPress 后台与插件体系</h3>
        <p data-zh="基于 WordPress 7.1 + MySQL 8.4 搭建，注册独立产品库自定义文章类型（CPT: fpv_product）与分类法（product_category），让运营无需碰代码即可上新产品；集成并配置 Elementor（可视化页面编辑）、Yoast SEO（站内 SEO 管理）与 Contact Form 7（表单插件）。" data-en="Built on WordPress 7.1 + MySQL 8.4 with Custom Post Type (fpv_product) and taxonomy for no-code product publishing, plus Elementor, Yoast SEO, and Contact Form 7.">
          基于 WordPress 7.1 + MySQL 8.4 搭建，注册独立产品库自定义文章类型（CPT: fpv_product）与分类法（product_category），让运营无需碰代码即可上新产品；集成并配置 Elementor（可视化页面编辑）、Yoast SEO（站内 SEO 管理）与 Contact Form 7（表单插件）。
        </p>
      </div>
      <div class="info-card">
        <h3 data-zh="3. 站内 SEO 与日常运维规范" data-en="3. Technical SEO & Maintenance">3. 站内 SEO 与日常运维规范</h3>
        <p data-zh="配置规范化固定链接（/%postname%/）、页面 TDK、全站图片语义化 ALT 属性、Product/Organization JSON-LD 结构化数据、XML Sitemap（/wp-sitemap.xml）与 robots.txt；提供 Docker Compose 一键复现与数据库/主题备份脚本，便于日常更新升级与故障回滚。" data-en="Configured clean permalinks, page TDK, descriptive image ALT tags, Product JSON-LD, XML Sitemap, robots.txt, and Docker Compose reproducible backup/update workflow.">
          配置规范化固定链接（/%postname%/）、页面 TDK、全站图片语义化 ALT 属性、Product/Organization JSON-LD 结构化数据、XML Sitemap（/wp-sitemap.xml）与 robots.txt；提供 Docker Compose 一键复现与数据库/主题备份脚本，便于日常更新升级与故障回滚。
        </p>
      </div>
    </div>

    <div class="section-head" style="margin-bottom:24px;">
      <div>
        <h2 data-zh="真实 WordPress 后台实操截图（wp-admin）" data-en="Real WordPress Admin Screenshots (wp-admin)">真实 WordPress 后台实操截图（wp-admin）</h2>
        <p data-zh="以下截图直接采自本项目的真实 WordPress 7.1 运行环境，源码与一键启动脚本已全部开源至 GitHub。" data-en="Captured directly from the live WordPress 7.1 Docker instance; full source and setup scripts are open-sourced on GitHub.">以下截图直接采自本项目的真实 WordPress 7.1 运行环境，源码与一键启动脚本已全部开源至 GitHub。</p>
      </div>
      <a href="https://github.com/outhsics/aeropulse-fpv-wordpress" target="_blank" rel="noreferrer" class="btn btn-primary" data-zh="查看 GitHub 完整源码" data-en="View GitHub Repo">查看 GitHub 完整源码</a>
    </div>

    <div class="shot-grid">
      <div class="shot-card">
        <img src="<?php echo esc_url($shot_base . 'wp-admin-products.png'); ?>" alt="WordPress 后台 FPV 产品库自定义文章类型管理界面">
        <div class="shot-caption">
          <h4 data-zh="WordPress 后台 · FPV 产品库（Custom Post Type）" data-en="WP Admin · FPV Product Catalog (CPT)">WordPress 后台 · FPV 产品库（Custom Post Type）</h4>
          <p data-zh="独立注册 fpv_product 产品文章类型与分类法，支持可视化批量编辑产品标题、分类、参数与发布状态。" data-en="Custom post type fpv_product with structured categories for effortless catalog management.">独立注册 fpv_product 产品文章类型与分类法，支持可视化批量编辑产品标题、分类、参数与发布状态。</p>
        </div>
      </div>
      <div class="shot-card">
        <img src="<?php echo esc_url($shot_base . 'wp-admin-plugins.png'); ?>" alt="WordPress 后台已启用插件列表：Elementor、Yoast SEO、Contact Form 7">
        <div class="shot-caption">
          <h4 data-zh="WordPress 后台 · 核心插件栈（Elementor / Yoast SEO / CF7）" data-en="WP Admin · Active Plugins (Elementor / Yoast SEO / CF7)">WordPress 后台 · 核心插件栈（Elementor / Yoast SEO / CF7）</h4>
          <p data-zh="安装并启用 Elementor 页面编辑器、Yoast SEO 站内优化插件与 Contact Form 7 联系表单插件。" data-en="Installed and activated Elementor page builder, Yoast SEO, and Contact Form 7.">安装并启用 Elementor 页面编辑器、Yoast SEO 站内优化插件与 Contact Form 7 联系表单插件。</p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
