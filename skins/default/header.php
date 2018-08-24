<!DOCTYPE html>
<html <?php language_attributes(); ?> id="parallax_scrolling">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<?php
$MagikCreta = new MagikCreta(); ?>
<body <?php body_class(); ?> >

<div id="page">

    <header class="header menu_fixed">
        <div id="preloader">
            <div data-loader="circle-side"></div>
        </div><!-- /Page Preload -->
        <div id="logo">
            <?php magikCreta_logo_image(); ?>

        </div>
        <ul id="top_menu">
            <li><a href="cart-1.html" class="cart-menu-btn" title="Cart"><strong>4</strong></a></li>
            <li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
            <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
        </ul>
        <!-- /top_menu -->
        <a href="#menu" class="btn_mobile">
            <div class="hamburger hamburger--spin" id="hamburger">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
        </a>
        <nav id="menu" class="main-menu">
            <?php echo magikCreta_main_menu(); ?>
        </nav>

    </header>


