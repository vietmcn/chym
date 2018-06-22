<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
if ( !function_exists( 'chym_product_content' ) ) {
    function chym_product_content( $att = array() )
    {
        $Query = new WP_Query( [
            'post_type' => 'product',
            'posts_per_page' => $att['posts_per_page'],
            'orderby' => $att['orderby'],
            'order' => $att['order'],
        ] );
        ob_start();
        $out  = '<aside flex id="list-thumbnail">';
        
        if ( $Query->have_posts() ) {
            
            while ( $Query->have_posts() ) : $Query->the_post();
                
                $meta_product = get_post_meta( $Query->post->ID, '_chym_meta_product', true );
                $out .= '<div id="chym-productID" class="productID-'.$Query->post->ID.' product-item">';
                //Set Thumbnail
                $out .= '<figure id="chym-product-item-thumbnail">';
                $out .= '<a href="'.esc_url( get_permalink( $Query->post->ID ) ).'">';
                $out .= '<img src="'.esc_url( $meta_product['meta_thumbnail'] ).'" alt=""/>';
                $out .= '</a>';
                $out .= '</figure>';
                //Set Info
                $out .= '<footer id="chym-productinfo">';
                $out .= '<h3><a href="'.esc_url( get_permalink( $Query->post->ID ) ).'">'.get_the_title( $Query->post->ID ).'</a></h3>';
                $out .= '<div class="chym-productprice">';
                #$out .= get_term_by( 'name', 'price' );
                $out .= '</div>';
                $out .= '</footer>';
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