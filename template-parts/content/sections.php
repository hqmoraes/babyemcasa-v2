<div class="row mb-4 justify-content-center">
    <div class="col-12 col-md-10 d-flex flex-wrap">
        <div class="col-12 col-md-10">
            <?php   $cat = get_cat_ID(single_cat_title("", false));
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $query = array('orderby'=>'title','order'=>'DESC','cat'=>$cat,'posts_per_page'=>5,'paged'=>$paged);
                $exibir_posts = new WP_Query($query);
                        if ( $exibir_posts->have_posts() ) {
                            while ( $exibir_posts->have_posts() ) {
                                $exibir_posts->the_post(); ?>
                                <div class="container pb-2">
                                    <section class="row container-posts me-md-1">
<!--                                        <div class="col-12" style="width: 20rem; height:20rem; background-repeat: no-repeat; background-position: center top; background-size: cover; background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>)"></div> -->
                                        <div class="col-12 d-flex align-items-center flex-wrap">
                                            <img class="col-12 col-md-4 img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>" alt="">
                                            <div class="col-12 col-md-8 ps-3 resumo_posts">
                                                <h1><?php the_title(); ?></h1>
                                                <p><?php echo get_the_excerpt(); ?></p>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="row infos_posts align-items-center me-md-1">
                                        <a href="<?php echo get_category_link(get_cat_ID(get_the_category()[0]->name))?>"><p><?php echo get_the_category()[0]->name; ?></p></a>
                                    </div>
                                </div>    
                                    <?php
                            }
                            wp_reset_query();
                        }
                        ?>
        </div>
        <div class="col-12 col-md-2 mb-md-1"><?php get_template_part('template-parts/navigation/barra_lateral'); ?></div>
    </div>
</div>