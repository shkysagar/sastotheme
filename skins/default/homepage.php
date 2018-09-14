<section class="hero_single version_2 heroImage">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3><?php echo do_shortcode('[product_count]'); ?> Premium Templates & Website Themes</h3>

                </div>
                <div class="col-lg-8 offset-lg-2">
                    <p>A marketplace of responsive HTML templates from a huge community of professional authors to
                        create your amazing online presence.</p>

                    <?php echo do_shortcode('[wr_live_search show_button="yes" show_category="yes" search_in="title, description, content, sku" show_suggestion="yes"]'); ?>
                </div>
            </div>

        </div>
    </div>
    <style>
        .heroImage::before {
            background: url("<?php header_image(); ?>") no-repeat !important;
            background-size: cover !important;
        }
    </style>
</section>

<?php magikCreta_featured_products(); ?>
<?php magikCreta_recent_products(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div id="carousel" class="owl-carousel owl-theme">
                <?php magikCreta_hotdeal_product(); ?>
            </div>
        </div>
        <div class="col-9">
            <?php magikCreta_new_products(); ?>
        </div>
    </div>
</div>
<?php //magikCreta_home_page_banner(); ?>
<?php //magikCreta_bestseller_products(); ?>
<?php //magikCreta_featured_products();?>
<?php //magikCreta_recommended_products();?>
<?php //magikCreta_home_sub_banners ();?>
<?php //magikCreta_home_blog_posts();?>
<?php //magikCreta_home_customsection();?><!-- -->
  
  