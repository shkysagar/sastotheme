<?php
get_header();
$magikCreta_breadcrumb_status = get_post_meta($post->ID, 'magikCreta_show_breadcrumb', true);
$design = get_post_meta($post->ID, 'magikCreta_page_layout', true);


?>

<?php while (have_posts()) :
    the_post(); ?>

    <?php if (is_search()) : // Only display Excerpts for Search ?>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
    <!-- .entry-summary -->
<?php else : ?>
    <?php the_content(); ?>
    <?php wp_link_pages(array('before' => '<div class="page-links">' . esc_html__('Pages:', 'creta'), 'after' => '</div>')); ?>
    </div><!-- .entry-content -->
<?php endif; ?>
<?php endwhile; // end of the loop. ?>
<?php
if (comments_open())
    comments_template(); ?>
<div class="main-container d-none">
    <div class="user-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><?php $MagikCreta->magikCreta_page_title(); ?></h2>
                    <p>Welcome to your Dashboard</p>
                </div>
                <div class="col-md-6">
                </div>
            </div>


            <div class="row">

                <div class="col-md-12">
                    <?php while (have_posts()) :
                    the_post(); ?>

                    <?php if (is_search()) : // Only display Excerpts for Search ?>
                        <div class="entry-summary">
                            <?php the_excerpt(); ?>
                        </div>
                        <!-- .entry-summary -->
                    <?php else : ?>
                    <?php the_content(); ?>
                    <?php wp_link_pages(array('before' => '<div class="page-links">' . esc_html__('Pages:', 'creta'), 'after' => '</div>')); ?>
                </div><!-- .entry-content -->
                <?php endif; ?>
                <?php endwhile; // end of the loop. ?>
                <?php
                if (comments_open())
                    comments_template(); ?>
            </div>
        </div>
    </div>
</div>

</div>
<?php get_footer(); ?>
