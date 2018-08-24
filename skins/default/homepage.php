<main>
    <section class="hero_single version_2">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3><?php echo do_shortcode('[product_count]'); ?> Premium Templates & Website Themes</h3>

                    </div>
                    <div class="col-lg-8 offset-lg-2">
                        <p>A marketplace of responsive HTML templates from a huge community of professional authors to
                            create
                            your amazing online presence.</p>
                        <form class="d-none">
                            <div class="row no-gutters custom-search-input-2 inner">
                                <div class="col-lg-4">
                                    <select class="wide">
                                        <option>All Categories</option>
                                        <option>Churches</option>
                                        <option>Historic</option>
                                        <option>Museums</option>
                                        <option>Walking tours</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text"
                                               placeholder="What are you looking for...">
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <input type="submit" class="btn_search" value="Search">
                                </div>
                            </div>
                            <!-- /row -->
                        </form>

                        <?php echo do_shortcode('[wr_live_search show_button="yes" show_category="yes" search_in="title, description, content, sku" show_suggestion="yes"]'); ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php magikCreta_new_products();?>

    <?php magikCreta_featured_products(); ?>

</main>
<?php //magikCreta_home_page_banner(); ?>
<?php //magikCreta_new_products();?>
<?php //magikCreta_bestseller_products(); ?>
<?php //magikCreta_featured_products();?>
<?php //magikCreta_recommended_products();?>
<?php //magikCreta_home_sub_banners ();?>
<?php //magikCreta_home_blog_posts();?>
<?php //magikCreta_home_customsection();?><!-- -->
  
  