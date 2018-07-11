<?php
if (! defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * Import WC
 * more {@link: https://woocommerce.com/}
 * @since 3.4+
 * @author Woocommerce
 */
require_once ( 'hook/product-taxonamy.php' );
require_once ( 'hook/product-single.php' );

class Chym_WCconfig
{
    public function __construct()
    {
        add_action( 'template_redirect',  array( $this, 'chym_wc_setup' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'chym_wc_script' ) );
        //Remove Generator tag
        remove_action('wp_head', 'wp_generator');
    }
    public function chym_wc_setup()
    {
        remove_theme_support( 'wc-product-gallery-zoom' );
        remove_theme_support( 'wc-product-gallery-lightbox' );
        remove_theme_support( 'wc-product-gallery-slider' );
    }
    public function chym_wc_script()
    {
        /**
         * disable Script WC
         * more {@link: https://gist.github.com/gregrickaby/2846416} 
         * @since 1.0
         * @author chym con
         */
        wp_dequeue_style( 'woocommerce-layout' );
    }
}
return new Chym_WCconfig;