<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
if ( ! function_exists( 'import_commp' ) ) {
    /**
     * Crate function import_commp
     * @author trangfox
     * @since 1.0
     */
	function import_commp( $name = NULL, $type = NULL ) 
	{
		$inc = 'src';
		$commp = 'commp';

		if ( !empty( $type ) !== NULL ) {
			$type = $type.'/';
		} else {
			$type = '';
		}

		require_once ( N_EXTEND_FOLDER .'/'.$inc.'/'.$commp.'/'.$type.$name.'.php' );
	}
}
if ( !function_exists( '__render' ) ) {
	function __render( $att = NULL )
	{
		echo $att;
	}
} 
if ( !function_exists( 'chym_class' ) ) {
	function chym_class()
	{
		global $mobile;
		if ( $mobile->isTablet() || ! $mobile->isMobile() ) {
			__render( 'flex' );
		}
	}
}

/**
 * Check Active Woocommerce functions.
 *
 * @package chym con
 */

if ( ! function_exists( 'chym_is_woocommerce_activated' ) ) {
	/**
	 * Query WooCommerce activation
	 */
	function chym_is_woocommerce_activated() {
		return class_exists( 'WooCommerce' ) ? true : false;
	}
}

/**
 * Checks if the current page is a product archive
 * @return boolean
 */
function chym_is_product_archive() {
	if ( chym_is_woocommerce_activated() ) {
		if ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) {
			return true;
		} else {
			return false;
		}
	} else {
		return false;
	}
}
