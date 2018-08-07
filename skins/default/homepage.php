<?php magikCreta_home_page_banner(); ?>
<?php magikCreta_hotdeal_product(); ?>

<?php
$args = array(
    'post_type' => 'product',
    'posts_per_page' => 10,
//    'product_cat' => 'hoodies'
);

$loop = new WP_Query($args);

if ($loop->have_posts()) {
    while ($loop->have_posts()) : $loop->the_post();
        magikCreta_productitem_template();
    endwhile;
} else {
    esc_attr_e('No products found', 'creta');
}

wp_reset_postdata();
?>


<?php magikCreta_new_products(); ?>
<?php magikCreta_bestseller_products(); ?>
<?php magikCreta_featured_products(); ?>
<?php magikCreta_recommended_products(); ?>
<?php magikCreta_home_sub_banners(); ?>
<?php magikCreta_home_blog_posts(); ?>
 
  