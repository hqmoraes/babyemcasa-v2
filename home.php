<?php get_header();
    get_template_part('template-parts/navigation/nav_superior');
    query_posts(array('orderby'=>'title','order'=>'DESC'));
    get_template_part('template-parts/content/sections'); 
    get_footer();
?>
