<?php
/**
 * Product Archive Template (/products/)
 */
get_header();
$theme_img = get_template_directory_uri() . '/assets/images/';
?>
<section class="section">
  <div class="container">
    <div class="breadcrumbs">
      <a href="<?php echo esc_url(home_url('/')); ?>" data-zh="首页" data-en="Home">首页</a> / <span data-zh="产品中心" data-en="Products">产品中心</span>
    </div>
    <div class="section-head" style="margin-bottom:24px;">
      <div>
        <h1 style="margin:0 0 8px;font-size:2rem;" data-zh="产品分类与硬件目录" data-en="FPV Product Catalog">产品分类与硬件目录</h1>
        <p data-zh="按飞行场景与硬件分类快速筛选整机、飞控图传与碳纤维机架，点击卡片进入完整技术参数页。" data-en="Filter FPV drones, flight electronics, and carbon frames by category or keyword.">按飞行场景与硬件分类快速筛选整机、飞控图传与碳纤维机架，点击卡片进入完整技术参数页。</p>
      </div>
    </div>

    <div class="filter-bar">
      <div class="filter-pills">
        <button type="button" class="filter-pill active" data-filter="all" data-zh="全部产品" data-en="All">全部产品</button>
        <button type="button" class="filter-pill" data-filter="cinewhoop" data-zh="电影穿越机" data-en="Cinewhoop">电影穿越机</button>
        <button type="button" class="filter-pill" data-filter="freestyle" data-zh="花飞 / 远航" data-en="Freestyle / LR">花飞 / 远航</button>
        <button type="button" class="filter-pill" data-filter="electronics" data-zh="飞控 / 图传" data-en="Electronics">飞控 / 图传</button>
        <button type="button" class="filter-pill" data-filter="frames" data-zh="碳纤维机架" data-en="Frames">碳纤维机架</button>
      </div>
      <input type="search" id="ap-product-search" class="search-input" placeholder="搜索型号、飞控或参数..." data-zh="搜索型号、飞控或参数..." data-en="Search model, FC, or specs...">
    </div>

    <div class="product-grid">
      <?php
      $all_products = new WP_Query(array(
          'post_type'      => 'fpv_product',
          'posts_per_page' => 20,
          'orderby'        => 'menu_order',
          'order'          => 'ASC',
      ));
      if ($all_products->have_posts()) :
          while ($all_products->have_posts()) : $all_products->the_post();
              $pid = get_the_ID();
              $terms = get_the_terms($pid, 'product_category');
              $cat_slug = ($terms && !is_wp_error($terms)) ? $terms[0]->slug : 'cinewhoop';
              $img = aeropulse_meta($pid, '_ap_image', 'hero-cinepulse.jpg');
              $price = aeropulse_meta($pid, '_ap_price', '$399');
              $badge = aeropulse_meta($pid, '_ap_badge', 'FPV');
              $spec1 = aeropulse_meta($pid, '_ap_spec1', 'F722 FC');
              $spec2 = aeropulse_meta($pid, '_ap_spec2', '60A ESC');
              $spec3 = aeropulse_meta($pid, '_ap_spec3', 'O4 HD');
              $title_en = aeropulse_meta($pid, '_ap_title_en', get_the_title());
              $desc_en = aeropulse_meta($pid, '_ap_desc_en', get_the_excerpt());
      ?>
      <article class="product-card" data-cat="<?php echo esc_attr($cat_slug); ?>">
        <a href="<?php the_permalink(); ?>" class="product-thumb">
          <img src="<?php echo esc_url($theme_img . $img); ?>" alt="<?php echo esc_attr(get_the_title()); ?> 产品图" loading="lazy">
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
            <a href="<?php the_permalink(); ?>" class="link-arrow" data-zh="查看详情 →" data-en="Specs →">查看详情 →</a>
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
<?php get_footer(); ?>
