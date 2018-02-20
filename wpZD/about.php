<?php
/**
 * Template Name: About
 */

get_header(); ?>

    <div class="row">
        <section class="pageHeader col-xs-12">
            <div class="container">
                <div class="row">
                    <?php
                    if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }
                    ?>
                    <h1>
                        <?php wp_title(''); ?>
                    </h1>
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <section class="aboutPageItem col-xs-12">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <a href="<?php echo get_page_link(131);?>" class="pItem pItemText">
                                <div class="header">
                                    <?php echo get_the_title(131); ?>
                                </div>
                                <?php $key="СтраницаОНас"; echo get_post_meta($post->ID, $key, true); ?>
                                <div class="more">
                                    <i class="fa fa-angle-double-right fa-2x"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <a href="<?php echo get_page_link(129);?>" class="pItem pItemText">
                                <div class="header">
                                    <?php echo get_the_title(129); ?>
                                </div>
                                <?php $key="СтраницаОНас"; echo get_post_meta($post->ID, $key, true); ?>
                                <div class="more">
                                    <i class="fa fa-angle-double-right fa-2x"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <a href="<?php echo get_page_link(133);?>" class="pItem pItemText">
                                <div class="header">
                                    <?php echo get_the_title(133); ?>
                                </div>
                                <?php $key="СтраницаОНас"; echo get_post_meta($post->ID, $key, true); ?>
                                <div class="more">
                                    <i class="fa fa-angle-double-right fa-2x"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <section class="pageSeo col-xs-12">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="text col-xs-12 col-md-offset-3 col-md-6">
                            Один из признанных классиков маркетинга Ф.Котлер определяет это так:
                            концепция маркетинга синхронизирует департамент маркетинга и продаж.
                            Формат события, безусловно, отражает ролевой метод изучения рынка,
                            полагаясь на инсайдерскую информацию. Медиаплан, следовательно,
                            повсеместно трансформирует коллективный департамент маркетинга и продаж.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php get_footer();
