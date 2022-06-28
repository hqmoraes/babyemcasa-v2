<?php
    function babyemcasa_setup() {
        register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'babyemcasa' ),
        'secondary' => __( 'Secondary Menu', 'babyemcasa' )
        ) );

        load_theme_textdomain( 'babyemcasa', get_template_directory() . '/languages' );

        $themeSuport = array(
            'align-wide','automatic-feed-links','core-block-patterns','custom-header','custom-line-height',
            'custom-logo','customize-selective-refresh-widgets','custom-spacing','custom-units',
            'dark-editor-style','disable-custom-colors','editor-color-palette','editor-gradient-presets',            'editor-styles',
            'featured-content','html5','menus','post-formats','post-thumbnails','responsive-embeds',
            'starter-content','title-tag','wp-block-styles','widgets','widgets-block-editor'
        );

        foreach($themeSuport as $ts){
            if ($ts == 'html5'){
                add_theme_support( 'html5', array('style','script', ) );
            }
            else if($ts == 'post-formats'){
                add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
            }
            else{
                add_theme_support($ts);
            }
        }

    }


// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
    global $post;
 return '<a class="leiamais" href="'. get_permalink($post->ID) . '"> ... continue lendo.</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function wp_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wp_excerpt_length');
    function add_scripts(){
        wp_enqueue_style('botstrap_css', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css",5);
        wp_enqueue_script('recursos',get_stylesheet_directory_uri() . '/js/recursos.js',array(),1,true);
    }
add_action('wp_enqueue_scripts','add_scripts', 1);

function local_style(){
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css',1);
    wp_enqueue_style('slick_js','//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',1);
}
add_action ('wp_enqueue_scripts','local_style',99);

add_action('after_setup_theme','babyemcasa_setup');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function reg_widgets_init() {

	register_sidebar( array(
		'name'          => 'Barra de widgets',
		'id'            => 'wdg_1',
		'before_widget' => '<div class="wdg">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'reg_widgets_init' );

?>