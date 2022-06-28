<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<div class="row justify-content-center" style="margin-bottom: 1rem;">
    <div class="col-12 col-md-10 d-flex flex-wrap">
        <div class="col-12 col-md-10 pe-2">
            <section class="container_post col-12 p-4">
                <div class="row align-items-center mt-2">
                    <div class="titulo_posts col-6 col-md-8">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="col-6 col-md-4"><img style="border-radius: 1rem;" class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_id(),'scalled') ?>" alt=""></div>

                </div>
                <div class="conteudo_post col-12" style="font-size: 1.5rem"><p><?php the_content();  ?><p></div>
                <div class="branco"></div>
                <div class="infos_post col-12 d-flex align-items-center justify-content-between p-3">
                    <a href="<?php echo get_category_link(get_cat_ID(get_the_category()[0]->name))?>"><p><?php echo get_the_category()[0]->name; ?></p></a>
                </div>
            </section>
            <h3 class="my-3">Continue lendo... </h3>
            <div class="carrossel">
            <?php 
                $id_categoria = get_cat_ID(get_the_category()[0]->name);
                $q_categoria = new wp_query(array('cat'=>$id_categoria));
                if ($q_categoria->have_posts()){
                    while ($q_categoria->have_posts()){
                        $q_categoria->the_post(); ?>
                        <div class="container">
                            <section class="row" style="height: 10rem; border-right: 2px solid #e4b4c2">
                            <div class="img-carrossel" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); ?>)"></div>
                                    <div class="col-12 resumo_posts">
                                        <h5 class="col-12 text-center"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
                                    </div>
                            </section>

                        </div><?php
                    }
                }
                
            ?>
            </div>
            <?php comments_template('/comments.php');
            ?>
        </div>
        <div class="col-12 col-md-2">
            <?php get_template_part('template-parts/navigation/barra_lateral'); ?>
        </div>
    </div>
</div>