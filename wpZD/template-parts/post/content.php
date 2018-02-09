<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    if ( is_sticky() && is_home() ) :
        echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
    endif;
    ?>
    <header class="entry-header">
        <?php

        if ( is_single() ) {
            the_title( '<h1 class="entry-title">', '</h1>' );
        } else {
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        }
        ?>
    </header><!-- .entry-header -->


    <?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
            </a>
        </div><!-- .post-thumbnail -->
    <?php endif; ?>

    <div class="entry-content">
        <?php

        $content = get_the_content('',FALSE,''); // arguments remove 'more' text

        echo my_multi_col_v2($content);


        echo '
        <div class="row">
            <section class="paginLike col-xs-12">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-offset-4 col-md-8">
                                <div class="likeIt">
                                    <a href="#">
                                        <span>Мне падабаецца!</span>
                                    </a>
                                </div>
                                <div class="pagination">
                                    <a href="'?> <?php echo get_previous_posts_link(); ?> <?php echo'" class="prev">
                                        <i class="fa fa-angle-double-left fa-2x"></i>
                                        Предыдущий
                                    </a>
                                    <a href="'?> <?php echo get_next_posts_link(); ?> <?php echo'" class="next">
                                        Следующий
                                        <i class="fa fa-angle-double-right fa-2x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        '
        ;?>

    </div><!-- .entry-content -->

    <?php if ( is_single() ) : ?>
        <?php twentyseventeen_entry_footer(); ?>
    <?php endif; ?>

</article><!-- #post-## -->
