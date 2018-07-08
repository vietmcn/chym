<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
if ( !function_exists( 'Chym_navbar_button' ) ) {
    function Chym_navbar_button() 
    {
        $out  = '<nav Chym_buttonMobile id="chym-button-mobile" class="chym-nav-m">';
        $out .= '<button id="chym-nav-m" class="chym-btn chym-navbar-m"><ion-icon name="menu"></ion-icon></button>';
        $out .= '</nav>';
        return $out;
    }
}