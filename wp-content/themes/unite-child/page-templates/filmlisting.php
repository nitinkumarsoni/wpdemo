<?php
/*
  Template Name:  Film Listing
 */
get_header();
?>
<div id="primary" class="content-area col-sm-12 col-md-12">
    <main id="main" class="site-main" role="main">

        <?php $loop = new WP_Query(array('post_type' => 'film', 'posts_per_page' => 10)); ?>

        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <?php the_title('<a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a>'); ?>
                </div>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>