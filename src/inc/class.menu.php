<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
class Custom_Menu
{
    protected $att = array();

    private function item( $att )
    {
        $out = '';
        foreach ($att as $name => $url) {
            $out .= '<li><a href="'.$url.'">'.$name.'</a></li>';
        }
        return $out;
    }
    public function menu( $att )
    {
        $out  = '<nav nav-menu id="menu-'.$att['class'].'">';
        $out .= '<ul>';
        $out .= $this->item( $att['item'] );
        $out .= '</ul>';
        $out .= '</nav>';
        if ( isset( $att['echo'] ) == false ) {
            return $out;
        } else {
            echo $out;
        }
    }
}
$chym_menu = new Custom_Menu;