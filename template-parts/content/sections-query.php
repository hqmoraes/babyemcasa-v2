<?php   
    $cat = get_cat_ID(single_cat_title("", false));
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $query = array('orderby'=>'title','order'=>'DESC','cat'=>$cat,'posts_per_page'=>5,'paged'=>$paged);
    $exibir_posts = new WP_Query($query);
    if ( $exibir_posts->have_posts() ) {
        while ( $exibir_posts->have_posts() ) {
            $exibir_posts->the_post(); ?>
            <div class="container">
                <?php get_template_part('template-parts/content/section-content'); ?>
            </div>    
                <?php
        }
        wp_reset_query();
    }
?>