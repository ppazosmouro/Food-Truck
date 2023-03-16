<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
		<meta name="robots" content="noindex,nofollow">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" /> -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header" role="banner">
            <div class="container">
                <a href="<?php echo get_home_url(); ?>" id="logo"><img src="<?php the_field('logo','option') ?>"></a>
                <div>
                    <nav id="menu" role="navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
                    </nav>
                    <!-- <ul id="rs">
                        <li><a href="<?php the_field('facebook','option') ?>"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?php the_field('twitter','option') ?>"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="<?php the_field('linkedin','option') ?>"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul> -->
                </div>
                <span id="menu-mobile"><i class="fas fa-bars"></i></span>
            </div>
        </header>