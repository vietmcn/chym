<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
require N_EXTEND_FOLDER .'/src/wc/global/price.php';
require N_EXTEND_FOLDER .'/src/wc/global/product-thumbnail.php';
require N_EXTEND_FOLDER .'/src/wc/global/pa.php';

if ( !function_exists( 'chym_product_content' ) ) {
    function chym_product_content( $att = array() )
    {
        $thumbnail = new Chym_WC_Product_thumbnail;
        $price = new Chym_WC_Price;
        $pa = new Chym_WC_Pa;

        $Query = new WP_Query( [
            'post_type' => 'product',
            'posts_per_page' => $att['posts_per_page'],
            'orderby' => $att['orderby'],
            'order' => $att['order'],
        ] );

        ob_start();
        
        $out  = '<aside id="list-thumbnail">';
        
        if ( $Query->have_posts() ) {
            
            while ( $Query->have_posts() ) : $Query->the_post();
                $out .= '<div flex id="chym-product-'.$Query->post->ID.'" class="product product-item">';
                //Set Thumbnail
                $out .= '<figure id="chym-product-item-thumbnail">';
                $out .= '<a href="'.esc_url( get_permalink( $Query->post->ID ) ).'" title="'.esc_attr( get_the_title( $Query->post->ID ) ).'">';
                $out .= '<img src="'. 
                    $thumbnail->get_thumbnail( [
                        'post_id' => $Query->post->ID,
                        ] )
                    .'" alt="'.get_the_title( $Query->post->ID ).'"/>';
                $out .= '</a>';
                $out .= '</figure>';
                //Set Info
                $out .= '<div id="chym-productinfo">';
                $out .= '<a href="'.esc_url( get_permalink( $Query->post->ID ) ).'" title="'.esc_attr( get_the_title( $Query->post->ID ) ).'">';
                $out .= '<h3>'.get_the_title( $Query->post->ID ).'</h3>';
                $out .= $price->get_price( ['post_id' => $Query->post->ID] );
                $out .= $pa->get_sku([
                    'post_id' => $Query->post->ID,
                ]);
                $out .= $pa->pa_e( [
                    'post_id' => $Query->post->ID,
                    'pa' => 'pa_nha-cung-cap',
                ] );
                $out .= '</a>';
                $out .= '</div>';
                $out .= '</div>';

            endwhile;
        
            //Rest Query 
            wp_reset_postdata();
            wp_reset_query();
        }
        $out .= '</aside>';
        $out .= ob_get_clean();
        return $out;
    }
}