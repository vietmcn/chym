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
	function import_commp( $name = NULL ) 
	{
		$inc = 'src';
		$commp = 'commp';
		require_once ( N_EXTEND_FOLDER .'/'.$inc.'/'.$commp.'/'.$name.'.php' );
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