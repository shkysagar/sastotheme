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

                        <select class="custom-select" id="inputGroupSelect03"
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

                    <form role="search" method="get" class="navbar-search-form d-none"
                          action="http://sastotheme.domain/">
                        <div class="cate-search-outer">
                            <select class="cate-search" name="product_cat">
                                <option value="">All categories</option>
                                <option value="uncategorized">Uncategorized</option>
                                <option value="men">Anniversary</option>
                                <option value="furniture">Birthday</option>
                                <option value="flower-box-basket">Flower Box/ Basket</option>
                                <option value="music">Mixed Flowers</option>
                                <option value="women">Occasion</option>
                                <option value="rose-bouquet">Rose Bouquet</option>
                                <option value="valentine-day">Valentine Day</option>
                                <option value="wedding">Wedding</option>
                            </select>
                        </div>
                        <div class="results-search">
                            <input type="hidden" name="post_type" value="product">
                            <input type="hidden" name="wrls_search_in" value="title">
                            <input required="" data-max-results="5" data-thumb-size="50" data-min-characters="3"
                                   data-search-in="{&quot;title&quot;:1,&quot;description&quot;:&quot;0&quot;,&quot;content&quot;:&quot;0&quot;,&quot;sku&quot;:&quot;0&quot;}"
                                   data-show-suggestion="1" value="" placeholder="Search product..."
                                   class="txt-livesearch suggestion-search" type="search" name="s" autocomplete="off">
                        </div>
                        <input class="btn-livesearch " type="submit" value="Search">
                    </form>
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
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header-middle">
        <div class="container-fluid">

        </div>
    </div>
</div>

<hr/>

<!-- Header -->
<header id="header">
    <div class="header-container">
        <div class="header-top">
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

        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs">

                    <?php echo magikCreta_search_form(); ?>

                </div>

                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 logo-block">
                    <!-- Header Logo -->
                    <div class="logo">
                        <?php magikCreta_logo_image(); ?>
                    </div>

                    <!-- End Header Logo -->

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="top-cart-contain pull-right">
                        <?php
//                        if (class_exists('WooCommerce')) :
//                            $MagikCreta->magikCreta_mini_cart();
//                        endif;
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<nav>
    <div class="container">
        <div class="mm-toggle-wrap">
            <div class="mm-toggle"><a class="mobile-toggle"><i class="fa fa-reorder"></i></a></div>

        </div>
        <div id="main-menu-new">
            <div class="nav-inner">

                <?php echo magikCreta_main_menu(); ?>
            </div>

        </div>
    </div>
</nav>
<!-- end header -->
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