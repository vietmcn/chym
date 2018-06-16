<?php
if (!defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */
//Before 
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
//Thumbnail
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
//sidebar
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );