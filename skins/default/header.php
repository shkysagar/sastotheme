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
<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Page Preload -->
<div id="page" class="page catalog-category-view">

    <header class="site-head header menu_fixed">

        <div id="logo">
            <?php magikCreta_logo_image(); ?>

        </div>
        <ul id="top_menu">
            <li>
                <?php
                if (class_exists('WooCommerce')) :
                    $MagikCreta->magikCreta_mini_cart();
                endif;
                ?>

                <!--                <a href="cart-1.html" class="cart-menu-btn" title="Cart"><strong>4</strong></a>-->
            </li><li><a data-toggle="tooltip" data-placement="bottom"  href="<?php echo get_permalink(get_option('yith_wcwl_wishlist_page_id')); ?>" class="wishlist_bt_top"
                   title="Your wishlist">Your wishlist</a></li>

            <li>
                <?php if (is_user_logged_in()) {
                    global $current_user; ?>
                    <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="logout" >
                        <?php echo '' . esc_attr($current_user->display_name) . '';?>
                    </a>
                <?php } else { ?>
                    <a data-toggle="tooltip" data-placement="bottom" title="Login" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" id="sign-in" class="login" title="Sign In">
                        Sign In</a>
                <?php } ?>

            </li>

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

