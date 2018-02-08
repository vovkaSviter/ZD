<?php
/**
 * Template Name: News
 */

get_header(); ?>

    <div class="row">
        <section class="pageHeader col-xs-12">
            <div class="container">
                <div class="row">
                    <h1>Новости</h1>
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <section class="nExcuse col-xs-12">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <?php query_posts('cat=20'); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="col-xs-12 col-md-4">
                                <a href="<?php echo get_permalink(); ?>" class="nItem">
                                    <div class="date"><?php echo get_the_date(); ?></div>
                                    <?php $bgImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full') ?>
                                    <div class="imgKeeper" style="background-image: url('<?php echo $bgImg[0] ?>')"></div>
                                    <h6><?php the_title(); ?></h6>
                                    <div class="nItemSubHeader">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="more">
                                        <i class="fa fa-angle-double-right fa-2x"></i>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="showMeMore col-xs-12">
                    <div class="smmWrapper">
                        <img src="imgs/showMeMore.png" alt="showMeMore">
                        Смотреть больше!
                    </div>
                </div>
            </div>

        </section>
    </div>

<?php get_footer();
