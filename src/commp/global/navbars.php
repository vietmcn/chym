<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
if ( !function_exists( 'Chym_navbar_m' ) ) {
    function Chym_navbar_m() 
    {
        $out  = '<nav Chym_buttonMobile id="chym-button-mobile" class="chym-nav-m">';
        $out .= '<button id="chym-nav-m" class="chym-btn chym-navbar-m"><div id="nav-icon4"><span></span><span></span><span></span></div></button>';
        $out .= '</nav>';
        return $out;
    }
}
if ( !function_exists( 'Chym_navbar_dropdown_m' ) ) {
    function Chym_navbar_dropdown_m()
    {
        global $mobile;
        if ( $mobile->isMobile() ) {
            $out  = '<div class="Chym-navbar-m">';
            $out .= '<ul class="chym-menu">';
            $out .= '<h4>Thông tin tài khoản</h4>';
            $out .= '<li><ion-icon name="log-in"></ion-icon><a href="#">Đăng Nhập</a></li>';
            $out .= '<li><ion-icon name="person-add"></ion-icon><a href="#">Đăng Ký</a></li>';
            $out .= '<li class="hotline"><ion-icon name="phone-portrait"></ion-icon><a href="tel:19001267">HotLine Mua Hàng <strong>0886 40 95 98</strong></a></li>';
            $out .= '</ul>';
            $out .= '</div>';
            __render( $out );
        }
    }
}