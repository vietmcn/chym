<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
if ( !function_exists( 'chym_header_title' ) ) {
    /**
     * Buil Title Icon 
     * @use ionicon
     * @since 1.0
     * @author chym con
     */
    function chym_header_title()
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
if ( !function_exists('chym_logo') ) {
    /**
     * Create logo 
     * @more {@link: //}
     * @since 1.0
     * @author Chym Con
     */
    function chym_logo( $att = array() )
    {
        if ( ! is_singular() ) {
            $h = 'h3';
        } else {
            $h = 'h1';
        }
        if ( is_front_page() || is_home() ) {
            $meta = get_post_meta( $att['post_id'], $att['key_name'], true );
            if ( !empty( $meta['meta_seo_title'] ) ) {
                $title = esc_attr( $meta['meta_seo_title'] );
            } else {
                $title = get_bloginfo( 'name' );
            }
        } else {
            $title = get_bloginfo( 'name' );
        }
        $out = '<'.$h.' id="chym-logo"><a href="'.esc_url( get_bloginfo('url') ).'" title="'.$title.'">'.$title.'</a></'.$h.'>';
        return $out;
    }
}
add_action( 'chym_header', function() {
    /**
     * Render Các Đối Tượng Trong Header
     * 
     * @import /inc/class.menu.php;
     * 
     * @since 1.0
     * @author Chym Con
     */
    global $chym_menu, $mobile;

    $out  = '<div flex id="chym-header" class="">';

    if ( !$mobile->isTablet() || !$mobile->isMobile() ) {
        /**
         * Hiển thị ngoài thiết bị màn hình lớn 
         * @since 1.0
         * @author chym
         */
        //Title
        $out .= chym_header_title();
        //Menu
        $out .= $chym_menu->menu( [
            'class' => 'menu-header-before',
            'cart' => true,
            'item' => [
                'Hổ trợ' => 'hotro',
                'Kiểm tra đơn hàng' => 'kiemtradonhang',
                'Đăng nhập' => 'login',
                'Đăng ký' => 'dangky',
            ],
        ] );
    }

    $out .= '</div>';

    __render( $out );
} );