<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
if ( !function_exists( 'Chym_owl_m' ) ) {
    function Chym_owl_m( $att = array() )
    {
        $out  = '<div bandr class="chym-owl nhacungcap owl-carousel owl-theme">';
        foreach ($att as $value) {
            $out .= '<div class="item">';
            $out .= '<a href="'.$value['link'].'" title=""><img src="'.$value['img'].'" alt=""/></a>';
            $out .= '</div>';
        }
        $out .= '</div>';
        return $out;
    }
}