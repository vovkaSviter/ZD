<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container-fluid customWidth mainPage">
        <div class="row">
            <nav class="siteNav col-xs-12">
                <div class="row">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-0 col-md-2">
                        <div class="orange"></div>
                        <div class="bgImage"></div>
                    </a>

                    <div class="phones col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-0 col-md-2">
                        <i class="customPhone"></i>
                        8 978 123 45 67
                    </div>

                    <ul class="navList col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-0 col-md-4">
                        <li data-tab="about">
                            <a href="<?php echo get_page_link(127);?>">О нас</a>
                            <div id="about" class="innerList tab row hidden-sm hidden-xs">
                                <div class="container">
                                    <div class="row">
                                        <a href="<?php echo get_page_link(131);?>" class="col-md-3">Наша команда</a>
                                        <a href="<?php echo get_page_link(129);?>" class="col-md-3">Наши преимущества</a>
                                        <a href="<?php echo get_page_link(133);?>" class="col-md-3">PDF</a>
                                    </div>
                                </div>
                            </div>
                            <i class="fa fa-angle-double-down hidden-md hidden-lg xSmall innerListTrigger"></i>
                            <ul class="hidden-md hidden-lg innerList xSmall">
                                <li><a href="<?php echo get_page_link(131);?>">Наша команда</a></li>
                                <li><a href="<?php echo get_page_link(129);?>">Наши преимущества</a></li>
                                <li><a href="<?php echo get_page_link(133);?>">PDF</a></li>
                            </ul>
                        </li>
                        <li data-tab="services">
                                <a href="<?php echo get_page_link(35);?>">Услуги</a>
                            <div id="services" class="innerList tab row hidden-sm hidden-xs">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3">
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
                                        <div class="col-md-3">
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
                                        <div class="col-md-3">
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
                                        <div class="col-md-3">
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
                            <i class="fa fa-angle-double-down hidden-md hidden-lg xSmall innerListTrigger"></i>
                            <ul class="hidden-md hidden-lg innerList xSmall">
                                <?php
                                $args = array(
                                    'orderby' => 'name',
                                    'title_li' => '',
                                    'hide_empty' => 0,
                                    'hide_title_if_empty' => true,
                                    'exclude' => 1,
                                    'include' => '19, 9, 10, 11, 12, 13, 8, 17, 18',
                                    'style' => 'none'
                                );
                                wp_list_categories( $args );
                                ?>
<!--                                <li><a href="http://zhgi.rf.gd/markup/serviceSingle.html">эстетическое воздействие</a></li>-->
<!--                                <li><a href="http://zhgi.rf.gd/markup/serviceSingle.html">выбирает стиль</a></li>-->
<!--                                <li><a href="http://zhgi.rf.gd/markup/serviceSingle.html">Строфоид</a></li>-->
<!--                                <li><a href="http://zhgi.rf.gd/markup/serviceSingle.html">доступна</a></li>-->
<!--                                <li><a href="http://zhgi.rf.gd/markup/serviceSingle.html">Синхрония прекрасно</a></li>-->
<!--                                <li><a href="http://zhgi.rf.gd/markup/serviceSingle.html">полустишие</a></li>-->
<!--                                <li><a href="http://zhgi.rf.gd/markup/serviceSingle.html">конкретный подтекст</a></li>-->
                            </ul>
                        </li>
                        <li><a href="<?php echo get_page_link(73);?>">Портфолио</a></li>
                        <li><a href="<?php echo get_page_link(57);?>">Новости</a></li>
                        <li><a href="<?php echo get_page_link(7);?>">Контакты</a></li>
                    </ul>

                    <div class="socials col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-0 col-md-2">
<!--                        <form class="hidden">-->
<!--                            <input  type="search" id="navSearch" name="q" maxlength="75" placeholder="Поиск по сайту">-->
<!--                        </form>-->
                        <?php get_search_form(); ?>
                        <i class="customSearch" id="navSearchTrigger"></i>
                        <a href="#" class="fa fa-youtube"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-facebook"></a>
                    </div>


                </div>

            </nav>
        </div>
