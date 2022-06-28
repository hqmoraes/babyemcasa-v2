<div class="col-12 col-md-10 display-6 my-4">
    <?php
        the_posts_pagination( array(
        'mid_size'  => 5,
        'prev_text' => __( 'Anterior', 'textdomain' ),
        'next_text' => __( 'Próximo', 'textdomain' ),
    ) );?>
</div>
