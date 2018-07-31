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

<div class="header-container">
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-6">

                    <?php //echo magikCreta_currency_language(); ?>

                    <div class="welcome-msg">
                        <?php echo magikCreta_msg(); ?>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6">
                    <?php echo magikCreta_top_navigation(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle">
        <div class="navbar navbar-dark">
            <div class="container-fluid d-flex justify-content-start">
                <div class="mr-auto">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                            aria-controls="navbarHeader" aria-expanded="true" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php magikCreta_logo_image(); ?>

                </div>
                <div class="navbar-search mr-3">
                    <?php //echo do_shortcode( '[wr_live_search show_button="yes" show_category="yes" min_characters="3" show_suggestion="yes"]' ); ?>

                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>

                        <select class="form-control" id="inputGroupSelect03"
                                aria-label="Example select with button addon">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="input-group-prepend">
                            <button class="btn btn-secondary" type="button">Button</button>
                        </div>
                    </div>

                </div>
                <?php
                if (class_exists('WooCommerce')) :
                    $MagikCreta->magikCreta_mini_cart();
                endif;
                ?>


            </div>
        </div>
        <div class="header-middle-menu collapse show" id="navbarHeader" style="">
            <div class="container-fluid">
                <?php echo magikCreta_main_menu(); ?>
            </div>
        </div>
    </div>


</div>

<?php if (class_exists('WooCommerce') && is_woocommerce()) : ?>

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