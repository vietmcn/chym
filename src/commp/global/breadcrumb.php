<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
if ( ! function_exists( 'chym_breadcrumb_product_cat' ) ) {
    function chym_breadcrumb_product_cat( $post_id )
    {
        $product_cat = get_the_terms( $post_id, 'product_cat');
        if ( !empty( $product_cat ) ) {
            return '<li><a href="'.esc_url( get_term_link( $product_cat[0]->term_id, 'product_cat' ) ).'" title="'.esc_attr( $product_cat[0]->name ).'">'.esc_attr( $product_cat[0]->name ).'</a></li>';
        } 
        return '';
    }
}
if ( !function_exists( 'chym_breadcrumb' ) ) {
    function chym_breadcrumb( $post_id = NULL )
    {
        $out  = '<ul flex class="chym-breadcrumb">';
        $out .= '<li><ion-icon name="home"></ion-icon></li>';
        $out .= '<li><ion-icon name="arrow-dropright"></ion-icon></li>';
        if ( is_home() || is_front_page() ) {
            $out .= '<li><a class="" href="'.esc_url( get_bloginfo('url') ).'" title="Trang Chủ"><h4 class="breadcrumb-home">Sản Phẩm Mới</h4></a></li>';
        } elseif ( is_singular( 'product' ) ) {
            $out .= '<li><ion-icon name="arrow-dropright"></ion-icon></li>';
            $out .= chym_breadcrumb_product_cat( $post_id );
            $out .= '<li><ion-icon name="arrow-dropright"></ion-icon></li>';
            $out .= '<li>'.get_the_title( $post_id ).'</li>';
        }
        $out .= '</ul>';
        return $out;
    }
}