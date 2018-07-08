<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
if ( !function_exists( 'Chym_navbar_m' ) ) {
    function Chym_navbar_m() 
    {
        $out  = '<nav Chym_buttonMobile id="chym-button-mobile" class="chym-nav-m">';
        $out .= '<button id="chym-nav-m" class="chym-btn chym-navbar-m"><div id="nav-icon4" class=""><span></span><span></span><span></span></div></button>';
        $out .= '</nav>';
        return $out;
    }
}
add_action( 'chym_footer', 'Chym_navbar_dropdown_m' );
function Chym_navbar_dropdown_m()
{
    global $mobile;
    if ( $mobile->isMobile() ) {
        $out  = '<div class="Chym-navbar-m">';
        $out .= '<ul class="chym-menu">';
        $out .= '<h4>Thông tin tài khoản</h4>';
        $out .= '<li><a href="#">Đăng Nhập</a></li>';
        $out .= '<li><a href="#">Đăng Ký</a></li>';
        $out .= '<li class="hotline"><a href="tel:19001267"><span>HotLine Mua Hàng 0886 40 95 98</span></a></li>';
        $out .= '</ul>';
        $out .= '</div>';
        __render( $out );
    }
}