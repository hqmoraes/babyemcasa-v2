<section class="row">
    <img class="col-12" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); ?>" alt="">
    <h2><?php the_title(); ?></h2>
    <p><?php echo get_the_excerpt(); ?></p>
</section>