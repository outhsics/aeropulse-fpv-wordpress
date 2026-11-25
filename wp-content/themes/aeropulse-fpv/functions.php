<?php
/**
 * AeroPulse FPV Showcase Theme Functions
 *
 * @package AeroPulse_FPV
 */

if (!defined('ABSPATH')) {
    exit;
}

function aeropulse_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('custom-logo');
    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'aeropulse-fpv'),
        'footer'  => __('Footer Navigation', 'aeropulse-fpv'),
    ));
}
add_action('after_setup_theme', 'aeropulse_theme_setup');

function aeropulse_enqueue_assets() {
    wp_enqueue_style('aeropulse-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('aeropulse-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'aeropulse_enqueue_assets');

/**
 * Register FPV Product Custom Post Type & Category Taxonomy
 */
function aeropulse_register_product_cpt() {
    register_post_type('fpv_product', array(
        'labels' => array(
            'name'          => 'FPV 产品库',
            'singular_name' => 'FPV 产品',
            'add_new'       => '新增产品',
            'add_new_item'  => '新增 FPV 产品',
            'edit_item'     => '编辑 FPV 产品',
            'menu_name'     => 'FPV 产品中心',
        ),
        'public'       => true,
        'has_archive'  => 'products',
        'rewrite'      => array('slug' => 'products'),
        'menu_icon'    => 'dashicons-airplane',
        'supports'     => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
    ));

    register_taxonomy('product_category', array('fpv_product'), array(
        'labels' => array(
            'name'          => '产品分类',
            'singular_name' => '产品分类',
        ),
        'public'       => true,
        'hierarchical' => true,
        'rewrite'      => array('slug' => 'product-category'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'aeropulse_register_product_cpt');

/**
 * Helper to fetch product meta safely
 */
function aeropulse_meta($post_id, $key, $default = '') {
    $val = get_post_meta($post_id, $key, true);
    return ($val !== '' && $val !== false) ? $val : $default;
}

/**
 * Output SEO meta description & JSON-LD structured data (complements Yoast SEO)
 */
function aeropulse_seo_head() {
    $site_name = get_bloginfo('name');
    if (is_singular('fpv_product')) {
        $post_id = get_the_ID();
        $price = aeropulse_meta($post_id, '_ap_price_num', '399');
        $sku = aeropulse_meta($post_id, '_ap_sku', 'AP-FPV-001');
        $img = get_template_directory_uri() . '/assets/images/' . aeropulse_meta($post_id, '_ap_image', 'hero-cinepulse.png');
        $json = array(
            '@context'    => 'https://schema.org/',
            '@type'       => 'Product',
            'name'        => get_the_title($post_id),
            'sku'         => $sku,
            'image'       => $img,
            'description' => wp_strip_all_tags(get_the_excerpt($post_id)),
            'brand'       => array('@type' => 'Brand', 'name' => 'AeroPulse FPV'),
            'offers'      => array(
                '@type'         => 'Offer',
                'priceCurrency' => 'USD',
                'price'         => $price,
                'availability'  => 'https://schema.org/InStock',
            ),
        );
        echo '<script type="application/ld+json">' . wp_json_encode($json, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    } else {
        $org = array(
            '@context' => 'https://schema.org',
            '@type'    => 'Organization',
            'name'     => $site_name,
            'url'      => home_url('/'),
            'sameAs'   => array('https://github.com/outhsics/aeropulse-fpv-wordpress'),
        );
        echo '<script type="application/ld+json">' . wp_json_encode($org, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }
}
add_action('wp_head', 'aeropulse_seo_head', 5);
