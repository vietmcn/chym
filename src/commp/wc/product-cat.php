<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
if ( !function_exists( 'chym_product_cat' ) ) {
    function chym_product_cat( $att = NULL )
    {
        $out  = '<aside flex class="product-cat chym-product-cat">';
        $out .= '<ul class="product-cat-ul">';
        $out .= '<li><a class="current" href="/">Trang Chủ</a></li>';
        $out .= '<li><a href="/">Quần Legging</a></li>';
        $out .= '<li><a href="/">Đầm</a></li>';
        $out .= '<li><a href="/">Đồ Khác</a></li>';
        $out .= '</ul>';
        $out .= '</aside>';
        return $out;
    }
}