<nav class="navbar navbar-expand-lg">
    <div class="container-fluid flex-rap justify-content-space-between">
      <div class="col-1 col-md-3 order-1">
        <a class="navbar-brand" href="/"><?php 
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'thumbnail' );?>
            <img width='60' src="<?php echo $image[0]; ?>" alt="Logo Baby em Casa">
        </a>
      </div>
      <div class="col-12 col-md-3 order-md-3 order-4 mt-2">
        <?php get_sidebar('wdg_1'); ?>
      </div>
      <div class="col-5 order-2">
        <h2><?php echo get_bloginfo('name'); ?></h2>
      </div>
      <div class="col-2 order-md-4 order-3 text-end">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuTopo" aria-controls="menuTopo" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php get_template_part('template-parts/navigation/nav_superior'); ?>
      </div>
    </div>
</nav>

