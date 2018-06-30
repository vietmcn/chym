<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
if ( !class_exists( 'Chym_WC_Navbar' ) ) {
    class Chym_WC_Navbar
    {
        protected $att = array();
        
        public function get_the_nav( $att )
        {
            return $att['logo'];
        }
    }
    
}