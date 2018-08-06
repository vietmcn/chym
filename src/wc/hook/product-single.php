<?php
if (!defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * 
 * Remove Hook WC product content in the single-product.php template
 * @Hook woocommerce_breadcrumb()
 * @Hook woocommerce_show_product_images()
 * @Hook woocommerce_get_sidebar()
 * @since 1.0
 * @author chym
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */ 
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb',                    20 );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar',                               10 );
