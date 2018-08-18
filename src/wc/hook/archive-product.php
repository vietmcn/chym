<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * 
 * Remove Hook WC Taxonamy in Dashborad Admin
 * 
 * 
 * @since 1.0
 * @author chym
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 * 
 */

/**
 * Remove Hook: woocommerce_before_shop_loop.
 *
 * @hooked woocommerce_result_count - 20
 * @hooked woocommerce_catalog_ordering - 30
 */
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count',     20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
