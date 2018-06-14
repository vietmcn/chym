<?php 

require_once 'inc/dashborad/meta-box.php';

if ( !defined( 'ABSPATH' ) ) {
    exit;
}

if ( !class_exists( 'Ninja_Bootstrap' ) ) {
    /**
     * 
     * Bootstrap Template 
     * @since 1.0
     * @author facebook.com/vietmcn.com
     * 
     */
    class Ninja_Bootstrap
    {
        public function __construct()
        {
            add_action( 'after_setup_theme',  array( $this, 'chym_setup_template' ) );
            add_action( 'wp_enqueue_scripts', array( $this, 'chym_script' ) );
            add_action( 'init',               array( $this, 'chym_remove_emojis' ) );
            add_filter( 'wp_resource_hints',  array( $this, 'disable_emojis_remove_dns_prefetch' ), 10, 2 );
            add_filter( 'tiny_mce_plugins',   array( $this, 'disable_emojis_tinymce' ) );
            add_filter( 'show_admin_bar',     '__return_false'); //Remove Bar Admin
        }
        public function chym_setup_template()
        {
           /*
            * Make theme available for translation.
            * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyfifteen
            * If you're building a theme based on twentyfifteen, use a find and replace
            * to change 'twentyfifteen' to the name of your theme in all the template files
            */
            load_theme_textdomain( 'girl' );

            // Add default posts and comments RSS feed links to head.
            add_theme_support( 'automatic-feed-links' );

            /*
            * Let WordPress manage the document title.
            * By adding theme support, we declare that this theme does not use a
            * hard-coded <title> tag in the document head, and expect WordPress to
            * provide it for us.
            */
            add_theme_support( 'title-tag' );

            /*
            * Enable support for Post Thumbnails on posts and pages.
            *
            * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
            */
            add_theme_support( 'post-thumbnails' );
            set_post_thumbnail_size( 825, 510, true );

            /*
            * Switch default core markup for search form, comment form, and comments
            * to output valid HTML5.
            */
            add_theme_support( 'html5', array(
                'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
            ) );
            
            /**
             * Reg Menu Wordpress
             * see https://codex.wordpress.org/Function_Reference/register_nav_menu
             */
            register_nav_menus( array(
                'primary' => __( 'Primary Menu',      'chymfox_spa' ),
            ) );

            /*
            * Enable support for Post Formats.
            *
            * See: https://codex.wordpress.org/Post_Formats
            */
            add_theme_support( 'post-formats', array(
                'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
            ) );

            // Indicate widget sidebars can use selective refresh in the Customizer.
            add_theme_support( 'customize-selective-refresh-widgets' );
        }
        public function chym_script()
        {
            /**
             * Config Style Template
             * @link {https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts}
             * @since 1.0
             * @author Trangfox
             */
            global $ver;
            //Style
            wp_enqueue_style( 'chym-style', get_template_directory_uri().'/style.css', '', $chym_ver );
        }
        public function chym_remove_emojis()
        {
            /**
             * Disable the emoji's by Ninjafox
             * @since 1.0
             * @author chymfox
             */
            remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
            remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
            remove_action( 'wp_print_styles', 'print_emoji_styles' );
            remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
            remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
            remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
            remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
        }
        public function disable_emojis_tinymce( $plugins ) {
           /**
            * Filter function used to remove the tinymce emoji plugin.
            * 
            * @param array $plugins 
            * @return array Difference betwen the two arrays
            */
            if ( is_array( $plugins ) ) {
            return array_diff( $plugins, array( 'wpemoji' ) );
            } else {
            return array();
            }
        }
        public function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
           /**
            * Remove emoji CDN hostname from DNS prefetching hints.
            *
            * @param array $urls URLs to print for resource hints.
            * @param string $relation_type The relation type the URLs are printed for.
            * @return array Difference betwen the two arrays.
            */
            if ( 'dns-prefetch' == $relation_type ) {
            /** This filter is documented in wp-includes/formatting.php */
            $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );  
            $urls = array_diff( $urls, array( $emoji_svg_url ) );
            }
            return $urls;
        }
    }
}
return new Ninja_Bootstrap;