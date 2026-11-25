<?php
/**
 * Template Name: Contact & Inquiry
 */
get_header();
?>
<section class="section">
  <div class="container">
    <div class="breadcrumbs">
      <a href="<?php echo esc_url(home_url('/')); ?>" data-zh="首页" data-en="Home">首页</a> / <span data-zh="联系与询盘" data-en="Contact">联系与询盘</span>
    </div>
    <div class="section-head">
      <div>
        <h1 style="margin:0 0 8px;font-size:2rem;" data-zh="联系我们 · 全球渠道与 B2B 询盘" data-en="Contact Us · Global B2B & OEM Inquiry">联系我们 · 全球渠道与 B2B 询盘</h1>
        <p data-zh="已集成 Contact Form 7 插件兼容结构与前端无刷新表单校验，方便海外买家与经销商快速发起询盘。" data-en="Integrated with WordPress Contact Form 7 compatibility and instant client-side validation for B2B buyers.">已集成 Contact Form 7 插件兼容结构与前端无刷新表单校验，方便海外买家与经销商快速发起询盘。</p>
      </div>
    </div>

    <div class="contact-grid">
      <div class="form-panel">
        <h3 style="margin:0 0 18px;" data-zh="在线提交采购 / 合作需求" data-en="Send a Product or Distributor Inquiry">在线提交采购 / 合作需求</h3>
        <form id="ap-inquiry-form">
          <div class="form-row">
            <div class="field">
              <label data-zh="您的姓名 *" data-en="Your Name *">您的姓名 *</label>
              <input type="text" required placeholder="例如：Alex Chen" data-zh="例如：张经理 / Alex Chen" data-en="e.g. Alex Chen">
            </div>
            <div class="field">
              <label data-zh="企业邮箱 *" data-en="Business Email *">企业邮箱 *</label>
              <input type="email" required placeholder="buyer@company.com" data-zh="buyer@company.com" data-en="buyer@company.com">
            </div>
          </div>
          <div class="form-row">
            <div class="field">
              <label data-zh="合作类型" data-en="Inquiry Type">合作类型</label>
              <select>
                <option value="distributor" data-zh="海外经销商 / 代理商采购" data-en="Global Distributor / Wholesale">海外经销商 / 代理商采购</option>
                <option value="oem" data-zh="OEM / ODM 定制开发" data-en="OEM / ODM Customization">OEM / ODM 定制开发</option>
                <option value="sample" data-zh="样机评测与媒体合作" data-en="Review Sample & Media">样机评测与媒体合作</option>
                <option value="support" data-zh="技术售后与固件支持" data-en="Technical Support">技术售后与固件支持</option>
              </select>
            </div>
            <div class="field">
              <label data-zh="意向型号" data-en="Interested Product">意向型号</label>
              <input type="text" placeholder="CinePulse 35 O4 Pro / Vortex 5" data-zh="CinePulse 35 O4 Pro / Vortex 5" data-en="CinePulse 35 O4 Pro / Vortex 5">
            </div>
          </div>
          <div class="field">
            <label data-zh="需求详情（数量、目标市场、定制要求）*" data-en="Project Details (Qty, Market, Specs) *">需求详情（数量、目标市场、定制要求）*</label>
            <textarea required placeholder="请简述您的采购数量、交付周期或定制需求..." data-zh="请简述您的采购数量、交付周期或定制需求..." data-en="Tell us your target quantity, destination market, or customization requirements..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary" data-zh="提交询盘" data-en="Submit Inquiry">提交询盘</button>
          <div class="form-feedback" id="ap-form-feedback"></div>
        </form>
      </div>

      <div style="display:grid;gap:18px;align-content:start;">
        <div class="info-card">
          <h3 data-zh="深圳研发与生产中心" data-en="Shenzhen R&D & Manufacturing HQ">深圳研发与生产中心</h3>
          <p data-zh="中国广东省深圳市宝安区智能硬件产业园（支持来访看厂与实机试飞）" data-en="Bao'an Smart Hardware Park, Shenzhen, Guangdong, China (Factory visits & test flights welcome)">中国广东省深圳市宝安区智能硬件产业园（支持来访看厂与实机试飞）</p>
        </div>
        <div class="info-card">
          <h3 data-zh="响应时效与服务语言" data-en="Response SLA & Languages">响应时效与服务语言</h3>
          <p data-zh="工作日 4 小时内给出阶梯报价单（PI / Spec Sheet），支持中文与英文技术对接。" data-en="Tiered quotation (PI & Spec Sheet) within 4 business hours in English or Chinese.">工作日 4 小时内给出阶梯报价单（PI / Spec Sheet），支持中文与英文技术对接。</p>
        </div>
        <div class="info-card">
          <h3 data-zh="查看 WordPress 建站实操说明" data-en="Inspect WordPress Implementation">查看 WordPress 建站实操说明</h3>
          <p style="margin-bottom:12px;" data-zh="如果您是面试官，可直接查看本项目的 WordPress 后台截图、插件配置、SEO 清单与日常维护规范。" data-en="Interviewers can inspect real wp-admin screenshots, plugin stack, SEO setup, and maintenance workflows.">如果您是面试官，可直接查看本项目的 WordPress 后台截图、插件配置、SEO 清单与日常维护规范。</p>
          <a href="<?php echo esc_url(home_url('/case-study/')); ?>" class="link-arrow" data-zh="打开 WP 后台实操复盘 →" data-en="Open WP Case Study →">打开 WP 后台实操复盘 →</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
