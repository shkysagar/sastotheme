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
<div class="bg_color_1">
    <?php magikCreta_recent_products(); ?>
</div>

<div class="container-fluid margin_80_55">
    <div class="row">
        <div class="col-3">
            <div id="carousel" class="owl-carousel owl-theme section-onsale-product ">
                <?php magikCreta_hotdeal_product(); ?>
            </div>
        </div>
        <div class="col-9">
            <?php magikCreta_new_products(); ?>
        </div>
    </div>
</div>

<div class="call_section">
    <div class="container clearfix">
        <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
            <div class="block-reveal">
                <div class="block-vertical"></div>
                <div class="box_1">
                    <h3>Enjoy a GREAT travel with us</h3>
                    <p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea
                        primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
                    <a href="#0" class="btn_1 rounded">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/call_section-->
<?php //magikCreta_home_page_banner(); ?>
<?php //magikCreta_bestseller_products(); ?>
<?php //magikCreta_featured_products();?>
<?php //magikCreta_recommended_products();?>
<?php //magikCreta_home_sub_banners ();?>
<?php //magikCreta_home_blog_posts();?>
<?php //magikCreta_home_customsection();?><!-- -->
  
  