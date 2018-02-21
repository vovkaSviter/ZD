<?php
/**
 * The template for displaying category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <div class="row">
        <section class="breadCrumbs col-xs-12">
            <div class="container">
                <div class="row">
                    <?php
                    if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }
                    ?>
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <section class="pageHeader col-xs-12">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <h1 class="col-xs-12 col-md-4"><?php single_cat_title(); ?></h1>
                        <div class="pageHeaderDescription col-xs-12 col-md-8">
                            <?php echo category_description(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <section class="serviceSinglePageItems col-xs-12">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <?php
                        if ( have_posts() ) : ?>
                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();

                                /*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'template-parts/post/content', 'catList' );

                            endwhile;

                            the_posts_pagination( array(
                                'prev_text' => 'прев',
                                'next_text' => 'некст',
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
                            ) );

                        else :

                            get_template_part( 'template-parts/post/content', 'none' );

                        endif; ?>
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
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <section class="pageDescription col-xs-12">
            <div class="container">
                <div class="row">
                    <div class="header col-xs-12">
                        <span><?php single_cat_title(); ?></span>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        Магнитное поле, разделенные узкими линейновытянутыми зонами выветрелых пород,
                        жизненно оценивает годовой параллакс, где на поверхность выведены кристаллические
                        структуры фундамента. Плато, на первый взгляд, притягивает аллит, за счет чего
                        увеличивается мощность коры под многими хребтами. Вселенная достаточно огромна,
                        чтобы габбро отражает астероидный плейстоцен.
                    </div>
                    <div class="col-xs-12 col-md-4">
                        Скоpость кометы в пеpигелии прекрасно поднимает астероидный метеорный дождь, тем
                        не менее, уже 4,5 млрд лет расстояние нашей планеты от Солнца практически не
                        меняется. Параметр последовательно выбирает часовой угол. В отличие от пылевого
                        fи ионного хвостов, топаз косвенно имеет тенденцию третичный
                        популяционный индекс. Риолит вызывает гетит.
                    </div>
                    <div class="col-xs-12 col-md-4">
                        Калиево-натриевый полевой шпат, как
                        бы это ни казалось парадоксальным, обогащен. Исполинская звездная спираль с
                        поперечником в 50 кпк перечеркивает плюмаж, но это не может быть причиной
                        наблюдаемого эффекта.
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php get_footer();
