<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
if ( !function_exists('Chym_logo') ) {
    /**
     * Create logo 
     * @more {@link: //}
     * @since 1.0
     * @author Chym Con
     */
    function Chym_logo( $att = array() )
    {
        if ( ! is_singular() ) {
            $h = 'h3';
        } else {
            $h = 'h1';
        }
        $out = '<'.$h.' id="chym-logo"><a href="'.esc_url( get_bloginfo('url') ).'" title="'.$att['logo_title'].'">'.$att['logo'].'</a></'.$h.'>';
        return $out;
    }
}