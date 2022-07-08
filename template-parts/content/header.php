<nav>
      <div class="logoTopo">
        <a href="/"><?php 
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'thumbnail' );?>
            <img width='60' src="<?php echo $image[0]; ?>" alt="Logo Baby em Casa">
        </a>
      </div>
      <div class="nomeBlog">
        <h2><?php echo get_bloginfo('name'); ?></h2>
      </div>
      <div class="barraPesquisa">
        <?php get_sidebar('wdg_1'); ?>
      </div>
      <div class="menuTopo">
        <button type="button">
        </button>
        <?php get_template_part('template-parts/navigation/nav_superior'); ?>
      </div>
</nav>

