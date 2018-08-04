<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
if ( !function_exists( 'Chym_footer_ht' ) ) {
    function Chym_footer_ht( $att = array() )
    {
        $out  = '<div class="chym-ht hotro-guest" id="chym-support">';
        $out .= '<div class="col-left"><span class="chym-icon icon-support"></span></div>';
        $out .= '<div class="col-right">';
        $out .= '<h3>'.$att['title'].' <span>(8h00 - 22h00)</span></h3>';
        $out .= '<p class="t-ms1">Mua hàng <a href="'.$att['phone']['key-1']['phone'].'">'.$att['phone']['key-1']['phone'].'</a></p>';
        $out .= '<p class="t-ms2">Giao Nhận - Bảo Hành <a href="'.$att['phone']['key-2']['phone'].'">'.$att['phone']['key-2']['phone'].'</a></p>';
        $out .= '</div>';
        $out .= '</div>';
        return $out;
    }
}
if ( !function_exists( 'Chym_footer_mxh' ) ) {
    function Chym_footer_mxh( $att = array() )
    {
        $out  = '<div class="chym-footer network">';
        $out .= '<h4>Kết Nối Với Chung Tôi</h4>';
        $out .= '<div class="icon-mxh">';
        foreach ($att as $key => $atts ) {
            if ( $key == 'face' ) {
                $out .= '<a target="_blank" href="'.$atts.'" title="Fanpage Của Chúng Tối"><span class="facebook"><ion-icon name="logo-facebook"></ion-icon></span><p>Facebook</p></a>';
            }
            if ( $key == 'googleplus' ) {
                $out .= '<a target="_blank" href="'.$atts.'" title="Fanpage Google Plus"><span class="googleplus"><ion-icon name="logo-googleplus"></ion-icon></span><p>Google+</p></a>';
            }
            if ( $key == 'zalo' ) {
                $out .= '<a target="_blank" href="'.$atts.'" title="Fanpage Zalo Của Chúng Tôi"><span class="zalo"><i class="icon-zalo icon-text">Zalo</i></span><p>Zalo</p></a>';
            }
            if ( $key == 'youtube' ) {
                $out .= '<a target="_blank" href="'.$atts.'" title="Kênh Youtube  Của Chúng Tôi"><span class="youtube"><ion-icon name="logo-youtube"></ion-icon></span><p>Youtube</p></a>';
            }
        }
        $out .= '</div>';
        $out .= '</div>';
        return $out;
    }
}
if ( !function_exists( 'Chym_footer_info_m' ) ) {
    function Chym_footer_info_m()
    {
        $out  = '<div class="chym-footer-info">';
        $out .= '<h4 class="chym-click"><span>Các Thông Tin Khác</span> <ion-icon class="dropdown dropnone" name="arrow-dropdown"></ion-icon><ion-icon class="dropup dropnone dropdefault" name="arrow-dropup"></ion-icon></h4>';
        $out .= '<ul class="chym-footer-info-content">';
        $out .= '<li><a href="#">Về Chúng Tôi</a></li>';
        $out .= '<li><a href="#">Chính sách</a></li>';
        $out .= '<li><a href="#">Hổ trợ khách hàng</a></li>';
        $out .= '<li><a href="#">Thông tin</a></li>';
        $out .= '</ul>';
        $out .= '</div>';
        return $out;
    }
}