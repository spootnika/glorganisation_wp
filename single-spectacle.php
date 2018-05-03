<?php
/* 
Template Name: Page Spectacle
*/
    get_header();
    if(have_posts()):
        while(have_posts()): 
            the_post();
?>
    <div id="imageSpectacle" style="background-image:url(' <?php echo get_field( 'image_principale'); ?>');">
        <div id="navigationSpectacle" class="navigation">
            <div class="nav-box previous"><a href="Spectacle/le-roi-soleil/" rel="prev"><span>previous show</span></a></div>
            <div class="nav-box next"><a href="Spectacle/le-roi-soleil/" rel="next"><span>next show</span></a></div>
        </div>
    </div>
    <div id="containerSpectacle" class="container">

        <h1>
            <?php       
            the_title();
?>
        </h1>
        <img src="<?php echo get_field('affiche'); ?>" alt="">
    </div>
    <?php
            the_content();
           
        endwhile;
    endif;
    get_footer();
?>
