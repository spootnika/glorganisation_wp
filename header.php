<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.js"></script>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png">

    <title>GL Organisation</title>


    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>

    <header>

        <nav class="navbar navbar-info">
            <div class="container-fluid site-nav">
                <div class="navbar-header">
                    <!-- Logo -->
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
                        <div>
                            <img class="logo imgSize" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_GL.png" alt="Logo GL Organisation" width="" height="" />
                        </div>
                        <div class="collapse navbar-collapse">
                            <span class="glo-title">
								International Agency
								<br><span class="highlight">for Live Shows</span>
                            </span>
                        </div>
                    </a>
                </div>
                <div id="myNavbar">
                    <?php
					wp_nav_menu(array(
						"theme_location"=>"main",
						"container"=>null,
						"items_wrap"=>'<ul id="%1$s" class="%2$s nav navbar-nav navbar-right">%3$s</ul>',
					));
				?>

                </div>
            </div>
        </nav>
    </header>

    <?php /* pour le php : if (is_front_page() && is_home()):
endif; */ ?>
