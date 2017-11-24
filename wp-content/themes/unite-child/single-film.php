<?php
/**
 * The Template for displaying all single posts.
 *
 * @package unite
 */
get_header();
?>

<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option('site_layout'); ?>">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('content', 'single'); ?>
            <?php
            $ticket_price = get_post_custom_values('wpcf-ticket-price', $id);
            if (!each($ticket_price[0]))
            {
                echo '<b>Ticket Price :</b> ' . $ticket_price[0] . '<br />';
            }
            $release_date = get_post_custom_values('wpcf-release-date', $id);
            if (!each($release_date[0]))
            {
                echo '<b>Release Date :</b> ' . date(get_option('date_format'), $release_date[0]) . '<br />';
                ;
            }
            $countries = get_the_terms($post, 'country');
            if (!empty($countries))
            {
                echo '<b>Countries :</b> ';
                foreach ($countries as $country):
                    echo $country->name . '';
                endforeach;
                echo '<br />';
            }
            $genres = get_the_terms($post, 'genre');
            if (!empty($countries))
            {
                echo '<b>Genres :</b> ';
                $text = '';
                foreach ($genres as $genre):
                    $text .= $genre->name . ', ';
                endforeach;
                echo rtrim($text, ', ') . '<br />';
            }
            $actors = get_the_terms($post, 'actor');
            if (!empty($actors))
            {
                echo '<b>Actors :</b> ';
                $text = '';
                foreach ($actors as $actor):
                    $text .= $actor->name . ', ';
                endforeach;
                echo rtrim($text, ', ') . '<br />';
            }
            ?> 
            <hr class="section-divider">
            <?php unite_post_nav(); ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template
            if (comments_open() || '0' != get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; // end of the loop.    ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>