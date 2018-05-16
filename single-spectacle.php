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
            <div class="nav-box previous"><?php next_post_link( '%link', 'Previous' ); ?></div>
            <div class="nav-box next"><?php previous_post_link( '%link', 'Next' ); ?></div>
        </div>
    </div>
    <div id="containerSpectacle" class="container">

        <h1>
            <?php       
            the_title();
?>
        </h1>

        <div class="row">
            <div class="col-sm-5 col-md-4 col-lg-3">
                <img src="<?php echo get_field('affiche'); ?>" alt="">
            </div>
            <div class="paragrapheIntroSpectacle col-sm-7 col-md-8 col-lg-9">

                <p style="color:white;font-size:20px">Legend of King Arthur is one of the most beautiful love stories that tradition and literature have passed on to us, like Tristan and Isolde or Romeo and Juliet.</p>
                <p style="color:#888!important"><span style="color:white">It is perhaps even richer because it tells us about two passions that mingle and refute each other:</span><br>Arthur and Guinevere and Lancelot. A legendary king, a beautiful, wilful queen, and the bravest of knights.<br>Loves that cross a magical universe where fairies become sorceresses, like Morgan, Arthur's stepsisiter, and where Merlin the magician speaks to spirits and dragons.</p>
                <p style="color:#888!important">The men who created this legend once upon a time, avoided giving it a real beginning or a definitive ending. Thus, they could dream and travel in a fantasy world, continually renewing it. And it is on journey that we wish to invite you. At the end of our story, Arthur, the little groom whoe became king, will rise above his suffering to forgive the two people whom, despite their having betrayed him, he loves most in the world...</p>
            </div>
        </div>

    </div>
    <?php
            the_content();
           
        endwhile;
    endif;
    get_footer();
?>
