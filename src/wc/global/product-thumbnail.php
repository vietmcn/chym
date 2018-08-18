<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
if ( !class_exists( 'Chym_WC_Product_thumbnail' ) ) {
    class Chym_WC_Product_thumbnail
    {
        protected $att = array();
        
        public function get_thumbnail( $att )
        {
            $meta_product = get_post_meta( $att['post_id'], '_chym_meta_product', true );
            if ( !empty( $meta_product['meta_thumbnail'] ) ) {
                    $thumbnail = $meta_product['meta_thumbnail'];
            } else {
                $thumbnails = wp_get_attachment_image_src( get_post_thumbnail_id( $att['post_id'] ), ['768','768'] );
                $thumbnail = $thumbnails[0];
            }
            return $thumbnail;
        }
        public function thumbnail_e( $att )
        {
            $out  = '<figure id="chym-archive-thumbnail">';
            $out .= '<img src="'.$this->get_thumbnail( ['post_id'=> $att['post_id'] ] ).'" alt="'.esc_attr( $att['alt'] ).'"/>';
            $out .= '</figure>';
            return $out;
        }
    }
    
}