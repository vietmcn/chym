<?php 
if (!defined('ABSPATH') ) {
    exit;
}
if ( chym_is_woocommerce_activated() ) {
    import_commp( 'content-product', 'wc' );
}