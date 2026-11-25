<?php
/**
 * Single FPV Product Template
 */
get_header();
$theme_img = get_template_directory_uri() . '/assets/images/';
if (have_posts()) : while (have_posts()) : the_post();
    $pid = get_the_ID();
    $img = aeropulse_meta($pid, '_ap_image', 'hero-cinepulse.jpg');
    $price = aeropulse_meta($pid, '_ap_price', '$399');
    $sku = aeropulse_meta($pid, '_ap_sku', 'AP-CINE35-O4');
    $badge = aeropulse_meta($pid, '_ap_badge', 'Flagship');
    $title_en = aeropulse_meta($pid, '_ap_title_en', get_the_title());
    $desc_en = aeropulse_meta($pid, '_ap_desc_en', get_the_excerpt());
    $fc = aeropulse_meta($pid, '_ap_fc', 'AeroPulse F722-45A AIO / Dual Gyro');
    $esc = aeropulse_meta($pid, '_ap_esc', 'BLHeli_S / Bluejay 60A 4-in-1');
    $vtx = aeropulse_meta($pid, '_ap_vtx', 'O4 Air Unit Pro (4K/120fps)');
    $motor = aeropulse_meta($pid, '_ap_motor', 'SPEEDX2 2105.5 2650KV');
    $wheelbase = aeropulse_meta($pid, '_ap_wheelbase', '145mm');
    $weight = aeropulse_meta($pid, '_ap_weight', '242g (不含电池)');
    $battery = aeropulse_meta($pid, '_ap_battery', '6S 1050mAh - 1300mAh LiPo');
    $packing = aeropulse_meta($pid, '_ap_packing', '整机 x1、备品螺旋桨 x2 组、电池扎带 x2、内六角扳手、出厂测试报告与快速指南');
?>
<section class="section">
  <div class="container">
    <div class="breadcrumbs">
      <a href="<?php echo esc_url(home_url('/')); ?>" data-zh="首页" data-en="Home">首页</a> /
      <a href="<?php echo esc_url(home_url('/products/')); ?>" data-zh="产品中心" data-en="Products">产品中心</a> /
      <span><?php the_title(); ?></span>
    </div>

    <div class="single-hero">
      <div class="single-gallery">
        <img src="<?php echo esc_url($theme_img . $img); ?>" alt="<?php echo esc_attr(get_the_title()); ?> 高清主图">
      </div>
      <div>
        <span class="eyebrow"><?php echo esc_html($badge); ?> · SKU: <?php echo esc_html($sku); ?></span>
        <h1 style="margin:0 0 12px;font-size:2.1rem;" data-zh="<?php echo esc_attr(get_the_title()); ?>" data-en="<?php echo esc_attr($title_en); ?>"><?php the_title(); ?></h1>
        <p style="color:var(--text-muted);font-size:1rem;margin:0 0 20px;" data-zh="<?php echo esc_attr(get_the_excerpt()); ?>" data-en="<?php echo esc_attr($desc_en); ?>"><?php echo esc_html(get_the_excerpt()); ?></p>
        <div style="font-size:1.85rem;font-weight:800;margin-bottom:22px;"><?php echo esc_html($price); ?> <span style="font-size:0.85rem;font-weight:500;color:var(--text-muted);" data-zh="参考零售价 / 支持 B2B 阶梯报价" data-en="MSRP / B2B Tiered Pricing Available">参考零售价 / 支持 B2B 阶梯报价</span></div>

        <div class="hero-ctas" style="margin-bottom:26px;">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary" data-zh="立即咨询渠道报价" data-en="Request B2B Quote">立即咨询渠道报价</a>
          <a href="<?php echo esc_url(home_url('/support/')); ?>" class="btn btn-outline" data-zh="下载 CLI 调参与手册" data-en="Download CLI & Manual">下载 CLI 调参与手册</a>
        </div>

        <h3 style="margin:0 0 10px;" data-zh="核心硬件规格" data-en="Technical Specifications">核心硬件规格</h3>
        <table class="spec-table">
          <tbody>
            <tr><th data-zh="飞控系统 (FC)" data-en="Flight Controller">飞控系统 (FC)</th><td><?php echo esc_html($fc); ?></td></tr>
            <tr><th data-zh="电调系统 (ESC)" data-en="ESC">电调系统 (ESC)</th><td><?php echo esc_html($esc); ?></td></tr>
            <tr><th data-zh="图传系统 (VTX)" data-en="Video System">图传系统 (VTX)</th><td><?php echo esc_html($vtx); ?></td></tr>
            <tr><th data-zh="动力电机 (Motor)" data-en="Motors">动力电机 (Motor)</th><td><?php echo esc_html($motor); ?></td></tr>
            <tr><th data-zh="轴距 / 尺寸" data-en="Wheelbase / Size">轴距 / 尺寸</th><td><?php echo esc_html($wheelbase); ?></td></tr>
            <tr><th data-zh="机身重量" data-en="Weight">机身重量</th><td><?php echo esc_html($weight); ?></td></tr>
            <tr><th data-zh="推荐电池" data-en="Recommended Battery">推荐电池</th><td><?php echo esc_html($battery); ?></td></tr>
          </tbody>
        </table>
      </div>
    </div>

    <div style="margin-top:44px;display:grid;grid-template-columns:1.2fr 0.8fr;gap:24px;">
      <div class="info-card">
        <h3 data-zh="产品亮点与结构说明" data-en="Engineering Highlights">产品亮点与结构说明</h3>
        <div style="color:var(--text-muted);font-size:0.93rem;">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="info-card">
        <h3 data-zh="标准包装清单 (In The Box)" data-en="Packing List">标准包装清单 (In The Box)</h3>
        <p style="margin-bottom:16px;"><?php echo esc_html($packing); ?></p>
        <a href="<?php echo esc_url(home_url('/support/')); ?>" class="link-arrow" data-zh="查看 Betaflight 4.5 出厂配置文件 →" data-en="View Betaflight 4.5 Factory CLI Dump →">查看 Betaflight 4.5 出厂配置文件 →</a>
      </div>
    </div>
  </div>
</section>
<?php endwhile; endif; get_footer(); ?>
