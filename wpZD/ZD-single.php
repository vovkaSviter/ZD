<?php
/*
 * Template Name: ZDSingle
 * Template Post Type: post
 */

get_header();  ?>

    <div class="row">
        <section class="portfolioSingleDescription col-xs-12">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <?php
                        if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }
                        ?>
                        <div class="wrap">
                            <div id="primary" class="content-area">
                                <main id="main" class="site-main" role="main">

                                    <?php
                                    /* Start the Loop */
                                    while ( have_posts() ) : the_post();

                                        get_template_part( 'template-parts/post/content', get_post_format() );

                                    endwhile; // End of the loop.
                                    ?>


                                </main><!-- #main -->
                            </div><!-- #primary -->
                            <?php get_sidebar(); ?>
                        </div><!-- .wrap -->
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php get_footer();
