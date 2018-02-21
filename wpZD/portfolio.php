<?php
/**
 * Template Name: Portfolio
 */

get_header(); ?>

    <div class="row">
        <section class="pageHeader col-xs-12">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <?php
                        if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }
                        ?>
                        <h1>Портфолио</h1>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <section class="tagsFilter col-xs-12">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="tags col-xs-12 col-md-9">
                            <a href="#" class="tagItem">Потребительский брендинг</a>
                            <a href="#" class="tagItem">Корпоративный брендинг</a>
                            <a href="#" class="tagItem">Брендинг пространства</a>
                        </div>
                        <div class="filter col-xs-12 col-md-3">
                            Фильтровать по:
                            <a href="#" class="active" id="type">типу услуг</a>
                            <span class="separator">/</span>
                            <a href="#" id="area">отрасли</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <section class="works col-xs-12">
            <div class="row">
                <div class="container">
                    <div class="row">

                        <?php query_posts('cat=-20'); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <div class="worksItem col-xs-12 col-md-4">
                                <?php $bgImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full') ?>
                                <div class="pItem pItemImg" style="background-image: url('<?php echo $bgImg[0] ?>')">
                                    <div class="info">
                                        <div class="header"><?php the_title(); ?></div>
                                        Клиент:
                                        <div class="customer">
                                            <?php $key="Клиент"; echo get_post_meta($post->ID, $key, true); ?>
                                        </div>
                                        Цель:
                                        <div class="goal">
                                            <?php $key="Задача"; echo get_post_meta($post->ID, $key, true); ?>
                                        </div>
                                        <div class="viewsLikes">
                                            <span class="views">
                                                <i class="fa fa-eye"></i> &mdash;
                                                <span class="viewsNr">5587</span>
                                            </span>
                                            <span class="likes">
                                                <i class="fa fa-thumbs-o-up"></i> &mdash;
                                                <span class="likesNr">13441</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="showMeMore col-xs-12">
                            <div class="smmWrapper">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/showMeMore.png" alt="showMeMore">
                                Смотреть больше!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php get_footer();
