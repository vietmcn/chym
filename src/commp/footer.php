<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
add_action( 'chym_footer', function() {
    global $mobile;
    /**
     * Create Footer Template
     * 
     * @import_commp /commp/global/footer-credit
     * 
     * @since 1.0
     * @author chym con
     */
    
    import_commp( 'footer-credit', 'global' );
    $out  = '<footer class="chym-footer">';
    if ( $mobile->isMobile() ) {
        $out .= Chym_navbar_dropdown_m();
    }
    $out .= chym_footer_credit();
    $out .= '</footer>';
    __render( $out );
});