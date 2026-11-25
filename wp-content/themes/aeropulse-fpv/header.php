<?php
/**
 * Header template for AeroPulse FPV Showcase
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> data-lang="zh">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="AeroPulse FPV 极脉创新 — 专注 FPV 穿越机整机、碳纤维机架、飞控电调图传与智能硬件出海官网（Terre WordPress 独立建站实操案例）。">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="container header-inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo" aria-label="AeroPulse FPV Home">
      <span class="brand-mark">AP</span>
      <span>AEROPULSE <span class="brand-sub">FPV</span></span>
    </a>

    <nav class="main-nav" id="ap-main-nav" aria-label="Main Navigation">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="<?php echo is_front_page() ? 'active' : ''; ?>" data-zh="首页" data-en="Home">首页</a>
      <a href="<?php echo esc_url(home_url('/products/')); ?>" class="<?php echo (is_post_type_archive('fpv_product') || is_singular('fpv_product')) ? 'active' : ''; ?>" data-zh="产品中心" data-en="Products">产品中心</a>
      <a href="<?php echo esc_url(home_url('/support/')); ?>" class="<?php echo is_page('support') ? 'active' : ''; ?>" data-zh="技术支持与固件" data-en="Support">技术支持与固件</a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="<?php echo is_page('contact') ? 'active' : ''; ?>" data-zh="联系与询盘" data-en="Contact">联系与询盘</a>
      <a href="<?php echo esc_url(home_url('/case-study/')); ?>" class="<?php echo is_page('case-study') ? 'active' : ''; ?>" style="color:#00d2ff;font-weight:700;" data-zh="WP 后台与建站复盘" data-en="WP Case Study">WP 后台与建站复盘</a>
    </nav>

    <div class="header-actions">
      <button type="button" class="lang-toggle" id="ap-lang-toggle">中文 / EN</button>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary" data-zh="获取 B2B 报价" data-en="Request Quote">获取 B2B 报价</a>
      <button type="button" class="mobile-menu-btn" id="ap-mobile-menu" aria-label="Menu">☰</button>
    </div>
  </div>
</header>
<main>
