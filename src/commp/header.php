<?php 
import_commp( 'breadcrumb', 'global' );

if ( !defined('ABSPATH') ) {
    exit;
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
    global $chym_menu, $mobile, $post;

    $out  = '<div flex id="chym-header" class="">';

    if ( !$mobile->isTablet() || !$mobile->isMobile() ) {
        if ( is_singular( 'product' ) ) {
            $post_id = $post->ID;
        } else {
            $post_id = NULL;
        }
        //Breadcrumb
        $out .= chym_breadcrumb( $post_id );
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