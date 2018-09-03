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
            <li>
                <?php
                if (class_exists('WooCommerce')) :
                    $MagikCreta->magikCreta_mini_cart();
                endif;
                ?>

                <!--                <a href="cart-1.html" class="cart-menu-btn" title="Cart"><strong>4</strong></a>-->
            </li>
            <li>
                <?php if (is_user_logged_in()) { ?>
                    <a data-toggle="tooltip" data-placement="bottom" title="My Account" href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>
                <?php } else { ?>
                    <a data-toggle="tooltip" data-placement="bottom" title="Login" href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a>
                <?php } ?>

            </li>
            <li><a data-toggle="tooltip" data-placement="bottom"  href="<?php echo get_permalink(get_option('yith_wcwl_wishlist_page_id')); ?>" class="wishlist_bt_top"
                   title="Your wishlist">Your wishlist</a></li>
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
    <!-- Sign In Popup -->
    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Sign In</h3>
        </div>
        <?php
        $redirect_to = '/my-account'
        ?>
        <form class="" name="loginform" id="loginform" action="<?php echo site_url('/wp-login.php'); ?>" method="post">
            <div class="sign-in-wrapper">
                <div class="form-group">
                    <label>Email</label>
                    <input id="user_login" type="text" size="20" value="" name="log" class="form-control">
                    <!--                    <input type="email" name="email" id="email">-->
                    <i class="ec ec-user"></i>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" size="20" value="" name="pwd" id="password" class="form-control">
                    <!--                    <input type="password" class="form-control" name="password" id="password" value="">-->
                    <i class="ec ec-returning"></i>
                </div>
                <div class="clearfix add_bottom_15">
                    <div class="checkboxes float-left">
                        <label class="container_check">Remember me
                            <input id="rememberme" type="checkbox" value="forever" name="rememberme">
                            <!--                            <input type="checkbox">-->
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="float-right mt-1"><a id="forgota" href=" <?php echo wp_lostpassword_url( $redirect ); ?>">Forgot Password?</a></div>
                </div>
                <div class="text-center">
                    <!--                    <input type="submit" value="Log In" class="btn_1 full-width">-->
                    <input id="wp-submit" type="submit" value="Login" name="wp-submit" class="btn_1 full-width">
                    <input type="hidden" value="<?php echo esc_attr($redirect_to); ?>" name="redirect_to">
                    <input type="hidden" value="1" name="testcookie">
                </div>
                <div class="divider"><span>Or</span></div>
                <div class="text-center">
                    Don’t have an account? <a href="<?php echo wp_registration_url(); ?> ">Sign up</a>
                </div>
                <div id="forgot_pw">
                    <a id="back" href="javascript:void(0);">
                        <i class="fa fa-arrow-left"></i>
                    </a>

                    <div class="form-group">
                        <label>Please confirm login email below</label>
                        <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                        <i class="ec ec-mail"></i>
                    </div>
                    <p>You will receive an email containing a link allowing you to reset your password to a new
                        preferred one.</p>
                    <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
                </div>
            </div>
        </form>
        <!--form -->
    </div>
    <!-- /Sign In Popup -->
    <main>

