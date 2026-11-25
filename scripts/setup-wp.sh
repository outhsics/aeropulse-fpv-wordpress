#!/bin/sh
set -e

echo "Waiting for WordPress files..."
until [ -f /var/www/html/wp-config.php ]; do
  sleep 2
done

if ! wp core is-installed --allow-root 2>/dev/null; then
  echo "Installing WordPress core..."
  wp core install \
    --url="http://localhost:8088" \
    --title="AeroPulse FPV — 智能硬件与穿越机官网" \
    --admin_user="terre_admin" \
    --admin_password="AeroPulse2026!Demo" \
    --admin_email="terre@aeropulse-fpv.demo" \
    --skip-email
fi

echo "Configuring site options and permalinks..."
wp option update blogdescription "高性能 FPV 穿越机整机、碳纤维机架与飞控图传系统 · WordPress 独立建站案例"
wp rewrite structure '/%postname%/' --hard

echo "Activating custom theme aeropulse-fpv..."
wp theme activate aeropulse-fpv

echo "Installing & activating industry-standard plugins (Elementor, Yoast SEO, Contact Form 7)..."
wp core update && wp core update-db || true
wp plugin install elementor wordpress-seo --activate || true
wp plugin install contact-form-7 --version=6.0.6 --activate || true

echo "Creating core pages..."
create_or_get_page() {
  TITLE="$1"
  SLUG="$2"
  TEMPLATE="$3"
  ID=$(wp post list --post_type=page --name="$SLUG" --field=ID)
  if [ -z "$ID" ]; then
    ID=$(wp post create --post_type=page --post_title="$TITLE" --post_name="$SLUG" --post_status=publish --porcelain)
  fi
  if [ -n "$TEMPLATE" ]; then
    wp post meta update "$ID" _wp_page_template "$TEMPLATE" >/dev/null
  fi
  echo "$ID"
}

HOME_ID=$(create_or_get_page "首页" "home" "")
create_or_get_page "技术支持与固件" "support" "page-support.php" >/dev/null
create_or_get_page "联系与询盘" "contact" "page-contact.php" >/dev/null
create_or_get_page "WP 后台与建站复盘" "case-study" "page-case-study.php" >/dev/null

wp option update show_on_front page
wp option update page_on_front "$HOME_ID"

echo "Creating product categories..."
for slug in cinewhoop freestyle electronics frames; do
  wp term create product_category "$slug" --slug="$slug" 2>/dev/null || true
done

echo "Seeding 6 FPV hardware products..."
seed_product() {
  SLUG="$1"
  TITLE="$2"
  TITLE_EN="$3"
  EXCERPT="$4"
  DESC_EN="$5"
  CONTENT="$6"
  CAT="$7"
  IMG="$8"
  PRICE="$9"
  PRICE_NUM="${10}"
  SKU="${11}"
  BADGE="${12}"
  SPEC1="${13}"
  SPEC2="${14}"
  SPEC3="${15}"
  FC="${16}"
  ESC="${17}"
  VTX="${18}"
  MOTOR="${19}"
  WB="${20}"
  WT="${21}"
  BAT="${22}"
  ORDER="${23}"

  PID=$(wp post list --post_type=fpv_product --name="$SLUG" --field=ID)
  if [ -z "$PID" ]; then
    PID=$(wp post create \
      --post_type=fpv_product \
      --post_title="$TITLE" \
      --post_name="$SLUG" \
      --post_excerpt="$EXCERPT" \
      --post_content="$CONTENT" \
      --post_status=publish \
      --menu_order="$ORDER" \
      --porcelain)
  fi
  wp post term set "$PID" product_category "$CAT" >/dev/null
  wp post meta update "$PID" _ap_title_en "$TITLE_EN" >/dev/null
  wp post meta update "$PID" _ap_desc_en "$DESC_EN" >/dev/null
  wp post meta update "$PID" _ap_image "$IMG" >/dev/null
  wp post meta update "$PID" _ap_price "$PRICE" >/dev/null
  wp post meta update "$PID" _ap_price_num "$PRICE_NUM" >/dev/null
  wp post meta update "$PID" _ap_sku "$SKU" >/dev/null
  wp post meta update "$PID" _ap_badge "$BADGE" >/dev/null
  wp post meta update "$PID" _ap_spec1 "$SPEC1" >/dev/null
  wp post meta update "$PID" _ap_spec2 "$SPEC2" >/dev/null
  wp post meta update "$PID" _ap_spec3 "$SPEC3" >/dev/null
  wp post meta update "$PID" _ap_fc "$FC" >/dev/null
  wp post meta update "$PID" _ap_esc "$ESC" >/dev/null
  wp post meta update "$PID" _ap_vtx "$VTX" >/dev/null
  wp post meta update "$PID" _ap_motor "$MOTOR" >/dev/null
  wp post meta update "$PID" _ap_wheelbase "$WB" >/dev/null
  wp post meta update "$PID" _ap_weight "$WT" >/dev/null
  wp post meta update "$PID" _ap_battery "$BAT" >/dev/null
}

seed_product \
  "cinepulse-35-o4-pro" \
  "CinePulse 35 O4 Pro 电影穿越机" \
  "CinePulse 35 O4 Pro Cinewhoop" \
  "3.5 寸商业航拍旗舰电影机，搭载新一代 O4 高清数字图传与四点硅胶减震云台，无果冻 4K/120fps 成片。" \
  "3.5-inch commercial cinema drone with O4 HD Air Unit Pro and 4-point damped gimbal for jello-free 4K/120fps footage." \
  "<p>专为室内一镜到底、商业地产与汽车追拍打造的 3.5 寸涵道电影机。采用高韧性注塑护圈搭配 7075 CNC 航空铝侧板，有效吸收高频震动并保护复杂场景下的飞行安全。</p><p>出厂预刷 Betaflight 4.5 定制滤波曲线，支持 6S 1300mAh 电池最高 14 分钟稳定巡航。</p>" \
  "cinewhoop" "hero-cinepulse.jpg" "\$489" "489" "AP-CINE35-O4" "旗舰电影机" \
  "O4 Pro 4K/120" "F722 60A" "145mm 轴距" \
  "AeroPulse F722-45A AIO (ICM42688P)" "Bluejay 45A 4-in-1 (2-6S)" "O4 Air Unit Pro Digital HD" "SPEEDX2 2105.5 2650KV" "145mm" "242g (不含电池)" "6S 1050mAh - 1300mAh LiPo" "1"

seed_product \
  "vortex-5-hd-freestyle" \
  "Vortex 5 HD 5寸花飞整机" \
  "Vortex 5 HD Freestyle Quad" \
  "经典 DC 死猫构型 5 寸高清花飞整机，画面无桨叶遮挡，配备 60A 高爆发飞控栈与 T700 5mm 机臂。" \
  "5-inch deadcat HD freestyle rig with prop-free view, 60A high-burst stack, and 5mm Toray T700 carbon arms." \
  "<p>Vortex 5 HD 采用广受飞手好评的 DC 无桨遮挡构型，前臂加宽防撞设计配合快拆结构，单臂仅需两颗螺丝即可在飞场快速更换。</p><p>搭配 2207 1960KV 暴力电机与 60A 电调，兼顾丝滑油门手感与极限拉升爆发力。</p>" \
  "freestyle" "product-freestyle.jpg" "\$439" "439" "AP-VTX5-HD" "5寸花飞" \
  "5mm T700 机臂" "60A 4合1" "2207 1960KV" \
  "PulseStack F722 Dual Gyro" "60A 32-Bit 4-in-1 ESC" "O4 / Avatar HD Pro Ready" "SPEEDX2 2207 1960KV" "228mm" "395g (不含电池)" "6S 1300mAh - 1550mAh LiPo" "2"

seed_product \
  "stratos-lr7-long-range" \
  "Stratos LR7 7寸远航穿越机" \
  "Stratos LR7 Long Range Cruiser" \
  "专为山野雪山远航设计的 7 寸长续航平台，标配 M10 高精度陶瓷 GPS 与 2.5W 大功率图传，续航突破 28 分钟。" \
  "7-inch mountain cruiser featuring M10 ceramic GPS, 2.5W high-output VTX, and up to 28 minutes flight time." \
  "<p>面向专业山野远航与大场景风光航拍，7 寸高效率力效比搭配前移式 GPS 支架，冷启动搜星更快、返航更稳。</p><p>兼容 6S 4000mAh 21700 锂离子电池包，轻松实现 10 公里级稳定往返巡航。</p>" \
  "freestyle" "product-freestyle.jpg" "\$529" "529" "AP-LR7-M10" "远航长续航" \
  "M10 GPS 返航" "28min 续航" "2806.5 1300KV" \
  "PulseStack F722 HD" "65A 4-in-1 ESC" "2.5W 5.8G / O4 Digital" "SPEEDX2 2806.5 1300KV" "318mm" "545g (不含电池)" "6S 4000mAh Li-ion" "3"

seed_product \
  "pulsestack-f722-60a" \
  "PulseStack F722 60A 飞控电调套装" \
  "PulseStack F722 60A FC & ESC Stack" \
  "30.5x30.5mm 标准孔距飞塔，内置双独立 BEC 与大焊盘设计，直插兼容高清图传，支持 6S 持续 60A 输出。" \
  "30.5x30.5mm flight stack with dual independent BECs, plug-and-play HD VTX port, and continuous 60A 6S output." \
  "<p>PulseStack F722 60A 飞塔采用工业级沉金 PCB 与超大电流镀锡焊盘，大幅降低新手装机虚焊风险。飞控集成 16MB 黑匣子闪存与 6 路完整 UART 串口，轻松扩展 GPS、接收机与图传调参。</p>" \
  "electronics" "product-electronics.jpg" "\$89" "89" "AP-STK-F760" "核心电子" \
  "STM32F722" "60A 持续/75A 峰值" "9V 2.5A BEC" \
  "STM32F722RET6 + ICM42688P" "60A 4-in-1 (Bluejay 48KHz)" "直插 O4 / HDZero / Analog" "适配 5-7 寸无刷电机" "30.5x30.5mm 安装孔" "24.6g (含减震球)" "3-6S LiPo" "4"

seed_product \
  "vtx-maten-58g-2500mw" \
  "VTX-Maten 5.8G 2.5W 远航图传" \
  "VTX-Maten 5.8G 2.5W Pro VTX" \
  "全 CNC 航空铝散热外壳，支持 25mW 至 2500mW 五档功率切换与 IRC Tramp 飞控调参，无惧远航穿透。" \
  "Full CNC aluminum heatsink VTX with 25mW-2500mW 5-level output and IRC Tramp control for extreme range." \
  "<p>全机身采用高导热 CNC 阳极铝外壳并内置温控保护电路，防止地面长时间通电过热降频。支持 7-36V 宽压直供（最高 8S 电池），自带麦克风回传实时飞行风声。</p>" \
  "electronics" "product-electronics.jpg" "\$49" "49" "AP-VTX-2500" "大功率图传" \
  "2.5W 峰值功率" "CNC 散热装甲" "7-36V 宽压" \
  "兼容全部 Betaflight / iNav 飞控" "—" "5.8G 72CH 25/200/800/1600/2500mW" "—" "20x20mm / 30.5x30.5mm" "18.2g" "2-8S 宽压直供" "5"

seed_product \
  "carbonx-5-frame-kit" \
  "CarbonX 5 寸 3K 碳纤维机架套件" \
  "CarbonX 5-Inch 3K Carbon Frame Kit" \
  "精选东丽 T700 哑光 3K 碳纤维板材，倒角精加工不伤电池扎带，标配 7075 CNC 镜头护板与全套 TPU 打印件。" \
  "Toray T700 matte 3K carbon fiber frame with chamfered edges, 7075 CNC camera cage, and full TPU mount kit." \
  "<p>CarbonX 5 寸机架兼顾轻量化与高抗炸强度，5mm 加厚快拆机臂搭配 2.5mm 上下中心板，彻底消除中高频共振，让黑匣子曲线更干净，调参事半功倍。</p>" \
  "frames" "hero-cinepulse.jpg" "\$69" "69" "AP-FRM-CX5" "碳纤机架" \
  "东丽 T700 碳板" "7075 CNC 侧板" "全套 TPU 件" \
  "兼容 20x20 / 30.5x30.5mm 飞控" "兼容主流四合一电调" "兼容 O4 / Vista / 模拟图传" "16x16mm 电机孔距" "225mm" "128g (含 CNC 与五金)" "适配 6S 1300mAh" "6"

wp rewrite flush --hard
echo "WordPress AeroPulse FPV setup complete!"
