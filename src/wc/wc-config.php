<?php 
if (! defined( 'ABSPATH' ) ) {
    exit;
}
class Chym_WCconfig
{
    public function __construct()
    {
        add_action( 'template_redirect', array( $this, 'chym_wc_setup' ) );
    }
    public function chym_wc_setup()
    {
        remove_theme_support( 'wc-product-gallery-zoom' );
        remove_theme_support( 'wc-product-gallery-lightbox' );
        remove_theme_support( 'wc-product-gallery-slider' );
    }
}
return new Chym_WCconfig;