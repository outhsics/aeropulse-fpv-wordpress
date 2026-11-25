<?php
/**
 * Template Name: Support Center
 */
get_header();
?>
<section class="section">
  <div class="container">
    <div class="breadcrumbs">
      <a href="<?php echo esc_url(home_url('/')); ?>" data-zh="首页" data-en="Home">首页</a> / <span data-zh="技术支持与固件" data-en="Support">技术支持与固件</span>
    </div>
    <div class="section-head">
      <div>
        <h1 style="margin:0 0 8px;font-size:2rem;" data-zh="技术支持、固件与 CLI 调参中心" data-en="Firmware, CLI Dumps & Support Hub">技术支持、固件与 CLI 调参中心</h1>
        <p data-zh="面向全球飞手与海外经销商的自助资料库，覆盖出厂 Betaflight CLI 备份、接线图及常见故障排查。" data-en="Self-service documentation hub for global pilots and distributors: Betaflight CLI dumps, wiring diagrams, and troubleshooting.">面向全球飞手与海外经销商的自助资料库，覆盖出厂 Betaflight CLI 备份、接线图及常见故障排查。</p>
      </div>
    </div>

    <table class="spec-table" style="margin-bottom:44px;">
      <thead>
        <tr>
          <th data-zh="机型 / 硬件型号" data-en="Model">机型 / 硬件型号</th>
          <th data-zh="固件版本" data-en="Firmware">固件版本</th>
          <th data-zh="文件说明" data-en="Package">文件说明</th>
          <th data-zh="更新时间" data-en="Updated">更新时间</th>
        </tr>
      </thead>
      <tbody>
        <tr><td><strong>CinePulse 35 O4 Pro</strong></td><td>Betaflight 4.5.1</td><td data-zh="出厂 PID / 滤波 CLI Dump + 英文快速手册 PDF" data-en="Factory PID/Filter CLI Dump + EN Quickstart PDF">出厂 PID / 滤波 CLI Dump + 英文快速手册 PDF</td><td>2026-11-18</td></tr>
        <tr><td><strong>Vortex 5 HD Freestyle</strong></td><td>Betaflight 4.5.1</td><td data-zh="5寸花飞预设 + ELRS 2.4G 对频指引" data-en="5-inch Freestyle Preset + ELRS 2.4G Binding Guide">5寸花飞预设 + ELRS 2.4G 对频指引</td><td>2026-11-12</td></tr>
        <tr><td><strong>Stratos LR7 远航机</strong></td><td>iNav 7.1 / BF 4.5</td><td data-zh="GPS 返航（GPS Rescue）参数配置与长续航预设" data-en="GPS Rescue Preset & Long-Range Tuning">GPS 返航（GPS Rescue）参数配置与长续航预设</td><td>2026-11-05</td></tr>
        <tr><td><strong>PulseStack F722 60A</strong></td><td>AEROPULSE_F722</td><td data-zh="飞控焊盘定义高清接线图 + Bluejay 电调固件" data-en="FC Pinout Wiring Diagram + Bluejay ESC Hex">飞控焊盘定义高清接线图 + Bluejay 电调固件</td><td>2026-10-28</td></tr>
      </tbody>
    </table>

    <div class="info-grid">
      <div class="info-card">
        <h3 data-zh="Q1：整机到手如何快速与遥控器对频？" data-en="Q1: How to bind ELRS receiver quickly?">Q1：整机到手如何快速与遥控器对频？</h3>
        <p data-zh="连续插拔电池三次进入 ELRS 对频模式，或使用 Betaflight 地面站一键写入绑定短语（Binding Phrase），30 秒即可完成。" data-en="Power cycle 3 times to enter ELRS binding mode, or flash your Binding Phrase via Wi-Fi WebUI in 30 seconds.">连续插拔电池三次进入 ELRS 对频模式，或使用 Betaflight 地面站一键写入绑定短语（Binding Phrase），30 秒即可完成。</p>
      </div>
      <div class="info-card">
        <h3 data-zh="Q2：是否支持海外 OEM / ODM 定制丝印与包装？" data-en="Q2: Do you offer OEM/ODM customization?">Q2：是否支持海外 OEM / ODM 定制丝印与包装？</h3>
        <p data-zh="支持碳板激光雕刻、定制 CNC 阳极配色、专属开机 OSD Logo 及多语言彩盒，最小起订量 50 套起。" data-en="Yes — laser-etched carbon, custom anodized CNC colors, custom OSD boot logo, and retail packaging starting at MOQ 50.">支持碳板激光雕刻、定制 CNC 阳极配色、专属开机 OSD Logo 及多语言彩盒，最小起订量 50 套起。</p>
      </div>
      <div class="info-card">
        <h3 data-zh="Q3：海外售后备件与保修政策如何执行？" data-en="Q3: Global warranty & spare parts policy?">Q3：海外售后备件与保修政策如何执行？</h3>
        <p data-zh="核心电子件（飞控/电调/图传）提供 6 个月非人为质保，欧美澳合作仓常备机臂、护圈与电机快修件。" data-en="6-month warranty on electronics (FC/ESC/VTX) with local spare arms, ducts, and motors stocked in US/EU partner hubs.">核心电子件（飞控/电调/图传）提供 6 个月非人为质保，欧美澳合作仓常备机臂、护圈与电机快修件。</p>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
