<?php
/**
 * Front Page Template - AeroPulse FPV Showcase
 */
get_header();
$theme_img = get_template_directory_uri() . '/assets/images/';
?>

<section class="hero">
  <div class="container hero-grid">
    <div>
      <span class="eyebrow" data-zh="WORDPRESS 7.1 独立建站实操案例 · 智能硬件 / FPV 出海官网" data-en="WORDPRESS 7.1 SHOWCASE · SMART HARDWARE & FPV BRAND SITE">WORDPRESS 7.1 独立建站实操案例 · 智能硬件 / FPV 出海官网</span>
      <h1 data-zh="极致稳定，为专业航拍与穿越飞行而生" data-en="Precision Engineered for Cinema & Freestyle FPV">极致稳定，为专业航拍与穿越飞行而生</h1>
      <p class="hero-desc" data-zh="面向全球航拍团队、FPV 飞手与海外渠道商的智能硬件产品展示官网。完整覆盖品牌首页、产品分类筛选、参数详情页、固件支持中心与询盘表单，原生支持中英文切换与站内 SEO。" data-en="Official global showcase for FPV cinewhoops, freestyle quads, carbon frames, and flight electronics. Built on WordPress with CPT product catalog, Elementor readiness, bilingual toggle, and technical SEO.">
        面向全球航拍团队、FPV 飞手与海外渠道商的智能硬件产品展示官网。完整覆盖品牌首页、产品分类筛选、参数详情页、固件支持中心与询盘表单，原生支持中英文切换与站内 SEO。
      </p>
      <div class="hero-ctas">
        <a href="<?php echo esc_url(home_url('/products/')); ?>" class="btn btn-primary" data-zh="浏览全部产品线" data-en="Explore Products">浏览全部产品线</a>
        <a href="<?php echo esc_url(home_url('/case-study/')); ?>" class="btn btn-outline" data-zh="查看 WP 后台与建站说明" data-en="View WP Admin Case Study">查看 WP 后台与建站说明</a>
      </div>
      <div class="hero-metrics">
        <div>
          <div class="metric-val">4K / 120fps</div>
          <div class="metric-label" data-zh="O4 数字高清图传适配" data-en="O4 HD Digital Link">O4 数字高清图传适配</div>
        </div>
        <div>
          <div class="metric-val">&lt; 249g</div>
          <div class="metric-label" data-zh="轻量化 3K 碳纤机身" data-en="Sub-250g Carbon Class">轻量化 3K 碳纤机身</div>
        </div>
        <div>
          <div class="metric-val">60+</div>
          <div class="metric-label" data-zh="全球渠道与海外仓覆盖" data-en="Global Distributors">全球渠道与海外仓覆盖</div>
        </div>
      </div>
    </div>

    <div class="hero-visual">
      <img src="<?php echo esc_url($theme_img . 'hero-cinepulse.jpg'); ?>" alt="AeroPulse CinePulse 35 O4 Pro 3.5寸电影穿越机主机展示图" width="960" height="600" fetchpriority="high">
      <div class="hero-badge">
        <div>
          <strong data-zh="CinePulse 35 O4 Pro 旗舰电影机" data-en="CinePulse 35 O4 Pro Flagship">CinePulse 35 O4 Pro 旗舰电影机</strong>
          <div style="color:#98a4b8;font-size:0.78rem;" data-zh="F722 飞控 · 60A 电调 · 一体减震护圈" data-en="F722 FC · 60A ESC · Damped Ducts">F722 飞控 · 60A 电调 · 一体减震护圈</div>
        </div>
        <a href="<?php echo esc_url(home_url('/products/cinepulse-35-o4-pro/')); ?>" class="link-arrow" data-zh="查看参数 →" data-en="Specs →">查看参数 →</a>
      </div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head">
      <div>
        <h2 data-zh="核心产品矩阵" data-en="Product Categories">核心产品矩阵</h2>
        <p data-zh="从室内商拍电影机、5 寸花飞整机，到核心飞控电调图传与 3K 碳纤维机架，覆盖 FPV 全栈硬件生态。" data-en="From indoor cinewhoops and 5-inch freestyle rigs to F722 flight stacks and 3K carbon frames.">从室内商拍电影机、5 寸花飞整机，到核心飞控电调图传与 3K 碳纤维机架，覆盖 FPV 全栈硬件生态。</p>
      </div>
      <a href="<?php echo esc_url(home_url('/products/')); ?>" class="btn btn-outline" data-zh="进入产品分类页" data-en="All Categories">进入产品分类页</a>
    </div>

    <div class="cat-grid">
      <a class="cat-card" href="<?php echo esc_url(home_url('/products/?cat=cinewhoop')); ?>">
        <span class="cat-tag">01 / CINEWHOOP</span>
        <h3 data-zh="电影穿越机" data-en="Cinewhoop Drones">电影穿越机</h3>
        <p data-zh="涵道安全防护 + 软减震云台，专为室内外商业一镜到底航拍打造。" data-en="Ducted safety guards with damped camera mounts for commercial one-take cinema.">涵道安全防护 + 软减震云台，专为室内外商业一镜到底航拍打造。</p>
      </a>
      <a class="cat-card" href="<?php echo esc_url(home_url('/products/?cat=freestyle')); ?>">
        <span class="cat-tag">02 / FREESTYLE</span>
        <h3 data-zh="花飞与远航整机" data-en="Freestyle & LR Quads">花飞与远航整机</h3>
        <p data-zh="5 寸暴力动力与 7 寸长续航远航平台，出厂精细调参到手即飞。" data-en="5-inch high-thrust freestyle and 7-inch long-range platforms, factory PID tuned.">5 寸暴力动力与 7 寸长续航远航平台，出厂精细调参到手即飞。</p>
      </a>
      <a class="cat-card" href="<?php echo esc_url(home_url('/products/?cat=electronics')); ?>">
        <span class="cat-tag">03 / ELECTRONICS</span>
        <h3 data-zh="飞控 / 电调 / 图传" data-en="Flight Electronics">飞控 / 电调 / 图传</h3>
        <p data-zh="F722 飞控栈、60A 四合一电调与 2.5W 大功率 CNC 散热图传模块。" data-en="F722 flight stacks, 60A 4-in-1 ESCs, and CNC-cooled 2.5W VTX modules.">F722 飞控栈、60A 四合一电调与 2.5W 大功率 CNC 散热图传模块。</p>
      </a>
      <a class="cat-card" href="<?php echo esc_url(home_url('/products/?cat=frames')); ?>">
        <span class="cat-tag">04 / CARBON FRAMES</span>
        <h3 data-zh="碳纤维机架套件" data-en="Carbon Frame Kits">碳纤维机架套件</h3>
        <p data-zh="东丽 T700 3K 碳板 + 7075 航空铝 CNC 侧板，高抗炸结构设计。" data-en="Toray T700 3K carbon plates with 7075 CNC aluminum camera cages.">东丽 T700 3K 碳板 + 7075 航空铝 CNC 侧板，高抗炸结构设计。</p>
      </a>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <div>
        <h2 data-zh="旗舰产品精选" data-en="Featured Hardware">旗舰产品精选</h2>
        <p data-zh="所有产品均由 WordPress 后台自定义文章类型（CPT: fpv_product）动态管理，支持运营随时上新与更新参数。" data-en="Dynamically managed via WordPress Custom Post Type (fpv_product) for effortless catalog updates.">所有产品均由 WordPress 后台自定义文章类型（CPT: fpv_product）动态管理，支持运营随时上新与更新参数。</p>
      </div>
      <a href="<?php echo esc_url(home_url('/products/')); ?>" class="link-arrow" data-zh="查看全部 6 款产品 →" data-en="View all 6 products →">查看全部 6 款产品 →</a>
    </div>

    <div class="product-grid">
      <?php
      $products = new WP_Query(array(
          'post_type'      => 'fpv_product',
          'posts_per_page' => 6,
          'orderby'        => 'menu_order',
          'order'          => 'ASC',
      ));
      if ($products->have_posts()) :
          while ($products->have_posts()) : $products->the_post();
              $pid = get_the_ID();
              $img = aeropulse_meta($pid, '_ap_image', 'hero-cinepulse.jpg');
              $price = aeropulse_meta($pid, '_ap_price', '$399');
              $badge = aeropulse_meta($pid, '_ap_badge', 'FPV');
              $spec1 = aeropulse_meta($pid, '_ap_spec1', 'F722 FC');
              $spec2 = aeropulse_meta($pid, '_ap_spec2', '60A ESC');
              $spec3 = aeropulse_meta($pid, '_ap_spec3', 'O4 HD');
              $title_en = aeropulse_meta($pid, '_ap_title_en', get_the_title());
              $desc_en = aeropulse_meta($pid, '_ap_desc_en', get_the_excerpt());
      ?>
      <article class="product-card">
        <a href="<?php the_permalink(); ?>" class="product-thumb">
          <img src="<?php echo esc_url($theme_img . $img); ?>" alt="<?php echo esc_attr(get_the_title()); ?> 产品展示图" loading="lazy">
          <span class="product-pill"><?php echo esc_html($badge); ?></span>
        </a>
        <div class="product-body">
          <h3><a href="<?php the_permalink(); ?>" data-zh="<?php echo esc_attr(get_the_title()); ?>" data-en="<?php echo esc_attr($title_en); ?>"><?php the_title(); ?></a></h3>
          <p class="product-summary" data-zh="<?php echo esc_attr(get_the_excerpt()); ?>" data-en="<?php echo esc_attr($desc_en); ?>"><?php echo esc_html(get_the_excerpt()); ?></p>
          <div class="spec-chips">
            <span class="spec-chip"><?php echo esc_html($spec1); ?></span>
            <span class="spec-chip"><?php echo esc_html($spec2); ?></span>
            <span class="spec-chip"><?php echo esc_html($spec3); ?></span>
          </div>
          <div class="product-foot">
            <span class="price"><?php echo esc_html($price); ?></span>
            <a href="<?php the_permalink(); ?>" class="link-arrow" data-zh="查看详情 →" data-en="Details →">查看详情 →</a>
          </div>
        </div>
      </article>
      <?php
          endwhile;
          wp_reset_postdata();
      endif;
      ?>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head">
      <div>
        <h2 data-zh="硬件品控与技术支持体系" data-en="Engineering Quality & Global Support">硬件品控与技术支持体系</h2>
        <p data-zh="对标深圳一线穿越机品牌官网标准，强化出厂检测、固件文档下载与 B2B 渠道转化链路。" data-en="Built to Shenzhen flagship FPV hardware standards: factory QC, firmware hub, and B2B conversion.">对标深圳一线穿越机品牌官网标准，强化出厂检测、固件文档下载与 B2B 渠道转化链路。</p>
      </div>
    </div>
    <div class="info-grid">
      <div class="info-card">
        <h3 data-zh="100% 出厂试飞与黑匣子调参" data-en="100% Factory Flight & Blackbox Tune">100% 出厂试飞与黑匣子调参</h3>
        <p data-zh="每台整机出厂前均经过电机动平衡、图传拉距及悬停 PID 曲线校验，到手绑频即可稳定飞行。" data-en="Every BNF quad undergoes motor balance testing, VTX range verification, and PID hover calibration before shipment.">每台整机出厂前均经过电机动平衡、图传拉距及悬停 PID 曲线校验，到手绑频即可稳定飞行。</p>
      </div>
      <div class="info-card">
        <h3 data-zh="一站式固件与 CLI 配置文件中心" data-en="Firmware & Betaflight CLI Hub">一站式固件与 CLI 配置文件中心</h3>
        <p data-zh="独立技术支持栏目沉淀全系列 Betaflight CLI Dump、接收机对频手册与接线图，大幅降低海外客服成本。" data-en="Centralized Betaflight CLI dumps, wiring diagrams, and manuals to streamline global post-sales support.">独立技术支持栏目沉淀全系列 Betaflight CLI Dump、接收机对频手册与接线图，大幅降低海外客服成本。</p>
      </div>
      <div class="info-card">
        <h3 data-zh="站内 SEO 与双端响应式性能" data-en="Technical SEO & Responsive UX">站内 SEO 与双端响应式性能</h3>
        <p data-zh="全站配置语义化标题、产品 JSON-LD 结构化数据、图片 ALT 与 XML Sitemap，兼容 PC 与移动端流畅浏览。" data-en="Semantic headings, Product JSON-LD schema, descriptive image ALT tags, XML Sitemap, and mobile-first layouts.">全站配置语义化标题、产品 JSON-LD 结构化数据、图片 ALT 与 XML Sitemap，兼容 PC 与移动端流畅浏览。</p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
