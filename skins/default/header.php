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
<div id="page" class="page catalog-category-view">

    <header id="header" class="site-head header menu_fixed">
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
    <main>
        <?php if (class_exists('WooCommerce') && is_woocommerce()) : ?>

            <section class="hero_in general start_bg_zoom">
                <div class="wrapper">
                    <div class="container">
                        <form class="fadeInUp animated">
                            <div id="custom-search-input">
                                <div class="input-group">
                                    <input type="text" class=" search-query" placeholder="Ask a question...">
                                    <input type="submit" class="btn_search" value="Search">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!--/hero_in-->

            <div class="filters_listing sticky_horizontal">
                <div class="container">
                    <div class="row">
                    <ul class="clearfix">
                        <li>
                            <div class="switch-field">
                                <input type="radio" id="all" name="listing_filter" value="all" checked data-filter="*"
                                       class="selected">
                                <label for="all">All</label>
                                <input type="radio" id="popular" name="listing_filter" value="popular"
                                       data-filter=".popular">
                                <label for="popular">Popular</label>
                                <input type="radio" id="latest" name="listing_filter" value="latest"
                                       data-filter=".latest">
                                <label for="latest">Latest</label>
                            </div>
                        </li>
                        <li>
                            <div class="layout_view">
                                <a href="#0" class="active"><i class="fa fa-home"></i></a>
                                <a href="restaurants-list-isotope.html"><i class="fa fa-home"></i></a>
                            </div>
                        </li>
                    </ul></div>
                </div>
                <!-- /container -->
            </div>
            <!-- /filters -->

            <div class="breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <?php woocommerce_breadcrumb(); ?>
                        </div>
                        <!--col-xs-12-->
                    </div>
                    <!--row-->
                </div>
                <!--container-->
            </div>
        <?php endif; ?>
