<?php
/* 
Template Name: Page Terms
*/

get_header();
if(have_posts()):
    while(have_posts()): 
        the_post();
        echo '<h1>';
        the_title();
        echo '</h1>';
        the_content();
    endwhile;
endif;
get_footer();
?>