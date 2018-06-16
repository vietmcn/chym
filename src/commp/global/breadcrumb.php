<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
if ( !function_exists( 'chym_breadcrumb' ) ) {
    function chym_breadcrumb()
    {
        if ( is_category() ) {
            $title = 'Danh mục sản phẩm';
        } else {
            $title = 'Trang Chủ';
        }
        $out  = '<div flex class="header-title">';
        $out .= '<ion-icon name="home"></ion-icon>';
        $out .= '<h4 class="titles">'.$title.'</h4>';
        $out .= '</div>';
        return $out;
    }
}