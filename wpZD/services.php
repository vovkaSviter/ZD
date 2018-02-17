<?php
/**
 * Template Name: Services
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
                    <h1>Услуги</h1>
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <section class="servicesList col-xs-12">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="serviceColumn col-xs-12 col-md-3">
                            <?php
                                $args = array(
                                    'orderby' => 'name',
                                    'title_li' => '',
                                    'hide_empty' => 0,
                                    'hide_title_if_empty' => true,
                                    'exclude' => 1,
                                    'include' => '8, 17, 18',
                                    'style' => 'none'
                                );
                                wp_list_categories( $args );
                            ?>
                        </div>
                        <div class="serviceColumn col-xs-12 col-md-3">
                            <?php
                                $args = array(
                                    'orderby' => 'name',
                                    'title_li' => '',
                                    'hide_empty' => 0,
                                    'hide_title_if_empty' => true,
                                    'exclude' => 1,
                                    'include' => '19, 9, 10',
                                    'style' => 'none'
                                );
                                wp_list_categories( $args );
                            ?>
                        </div>
                        <div class="serviceColumn col-xs-12 col-md-3">
                            <?php
                                $args = array(
                                    'orderby' => 'name',
                                    'title_li' => '',
                                    'hide_empty' => 0,
                                    'hide_title_if_empty' => true,
                                    'exclude' => 1,
                                    'include' => '11, 12, 13',
                                    'style' => 'none'
                                );
                                wp_list_categories( $args );
                            ?>
                        </div>
                        <div class="serviceColumn col-xs-12 col-md-3">
                            <?php
                                $args = array(
                                    'orderby' => 'name',
                                    'title_li' => '',
                                    'hide_empty' => 0,
                                    'hide_title_if_empty' => true,
                                    'exclude' => 1,
                                    'include' => '14, 16, 15',
                                    'style' => 'none'
                                );
                                wp_list_categories( $args );
                            ?>
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
                            Аффинное преобразование существенно оправдывает интеграл
                            по ориентированной области. Интеграл по бесконечной области
                            переворачивает критерий интегрируемости.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


<?php get_footer();
