<?php get_header();
    query_posts(array('orderby'=>'title','order'=>'DESC'));
    get_template_part('template-parts/content/sections'); 
    get_footer();
?>
