<?php
/* 
Template Name: Page Spectacle
*/
    get_header();
    if(have_posts()):
        while(have_posts()): 
            the_post();
?>
<h1>
<?php       
            the_title();
?>
</h1>
<img src="<?php echo get_field('affiche'); ?>" alt="">
<?php
            the_content();
            the_permalink();
        endwhile;
    endif;
    get_footer();
?>