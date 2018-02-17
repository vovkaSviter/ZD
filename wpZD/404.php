<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <div class="row">
        <?php
        if(function_exists('bcn_display'))
            {
                bcn_display();
            }
        ?>
        <section class="error404 col-xs-12">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 404Wrapper">
                        <div class="row">
                            <div class="text404 col-xs-12 col-md-6">
                                <h1>Чёт пошло не так...</h1>
                                <p>Давай обратно на</p>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">главную!</a>
                            </div>
                            <div class="img404 hidden-xs hidden-sm col-md-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php get_footer();
