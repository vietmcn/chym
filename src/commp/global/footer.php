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
                $out .= '<a target="_blank" href="'.$atts.'" title="Fanpage Của Chúng Tối"><span class="facebook"><i class="icon ion-logo-facebook"></i></span><p>Facebook</p></a>';
            }
            if ( $key == 'googleplus' ) {
                $out .= '<a target="_blank" href="'.$atts.'" title="Fanpage Google Plus"><span class="googleplus"><i class="icon ion-logo-googleplus"></i></span><p>Google+</p></a>';
            }
            if ( $key == 'zalo' ) {
                $out .= '<a target="_blank" href="'.$atts.'" title="Fanpage Zalo Của Chúng Tôi"><span class="zalo"><i class="icon-zalo icon-text">Zalo</i></span><p>Zalo</p></a>';
            }
            if ( $key == 'youtube' ) {
                $out .= '<a target="_blank" href="'.$atts.'" title="Kênh Youtube  Của Chúng Tôi"><span class="youtube"><i class="icon ion-logo-youtube"></i></span><p>Youtube</p></a>';
            }
        }
        $out .= '</div>';
        $out .= '</div>';
        return $out;
    }
}