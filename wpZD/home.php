<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
        <section class="marryGoRound">
            <?php echo do_shortcode('[slide-anything id="154"]')?>
        </section>
    </div>

    <div class="row">
        <section class="portfolio col-xs-12">
            <div class="container">
                <div class="row">
                    <h3>Fabula Branding: создаем историю вашего бренда</h3>
                    <div class="digits row">
                        <div class="digit plusDot col-xs-12 col-md-offset-3 col-md-2">
                            <div class="fatDig">300</div>
                            <div class="thinDig">торговых марок</div>
                        </div>
                        <div class="digit plusDot col-xs-12 col-md-2">
                            <div class="fatDig">665</div>
                            <div class="thinDig">названий, слоганов</div>
                        </div>
                        <div class="digit col-xs-12 col-md-2">
                            <div class="fatDig">18</div>
                            <div class="thinDig">ещё чего-нибудь</div>
                        </div>
                    </div>
                </div>

                <div class="row each">

                    <div class="col-xs-12 col-md-4">
                        <a href="<?php echo get_tag_link(21); ?>" class="pItem pItemText">
                            <div class="header">
                                <?php
                                $tagName = get_term(21, 'post_tag');
                                echo $tagName->name;
                                ?>
                            </div>
                            <?php echo term_description( 21, 'post_tag' ) ?>
                            <div class="more">
                                <i class="fa fa-angle-double-right fa-2x"></i>
                            </div>
                        </a>
                    </div>

                    <?php
                        $the_query = new WP_Query( array(
                                        'tag'=>'pervaya-plashka',
                                        'posts_per_page' => 2
                                    ));
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>

                    <div class="pItemWrapper col-xs-12 col-md-4">
                        <div class="owlKeeper col-xs-12" style="visibility: hidden; height: 0">
                            <div class="owlDescription">
                                Клиент:
                                <div class="customer">
                                    <?php $key="Клиент"; echo get_post_meta($post->ID, $key, true); ?>
                                </div>
                                Бренд:
                                <div class="goal">
                                    <?php $key="Бренд"; echo get_post_meta($post->ID, $key, true); ?>
                                </div>
                                Краткое описание проекта:
                                <div class="goal">
                                    <?php $key="ПроектКратко"; echo get_post_meta($post->ID, $key, true); ?>
                                </div>
                                <a href="<?php echo get_permalink(); ?>" class="descrPermalink">Подробнее</a>
                                </br>
                                </br>
                                Услуги:
                                <div class="tags">
                                    <?php
                                        foreach( get_the_category() as $category ){
                                        $catID = $category->cat_ID ;
                                        echo '<a href="'. get_category_link($catID) . '">' . $category->cat_name . '</a>';
                                    }  ?>
                                </div>
                            </div>
                            <div class="cornerStone owl-carousel">
                                <?php
                                    $attachments = get_children(array('post_parent' => $post->ID,
                                        'post_status' => 'inherit',
                                        'post_type' => 'attachment',
                                        'post_mime_type' => 'image',
                                        'order' => 'ASC',
                                        'orderby' => 'menu_order ID'));

                                    foreach($attachments as $att_id => $attachment) {
                                        $full_img_url = wp_get_attachment_image($attachment->ID);
                                        echo $full_img_url;
                                    }
                                ?>
                            </div>
                            <span class="cutOut fa fa-close"></span>
                            <div class="owlDescriptionTrigger">Описание проекта</div>
                        </div>
                        <?php $bgImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full') ?>
                        <div class="pItem pItemImg" id="<?php echo get_the_ID(); ?>" style="background-image: url('<?php echo $bgImg[0] ?>')">
                            <div class="info">
                                <div class="header"><?php the_title(); ?></div>
                                Клиент:
                                <div class="customer">
                                    <?php $key="Клиент"; echo get_post_meta($post->ID, $key, true); ?>
                                </div>
                                Задача:
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

                    <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

                </div>

                <div class="row each">
                    <?php
                    $the_query = new WP_Query( array(
                        'tag'=>'pervaya-plashka',
                        'offset'=> 2,
                        'posts_per_page' => 3
                    ));
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>

                        <div class="pItemWrapper col-xs-12 col-md-4">
                            <div class="owlKeeper col-xs-12" style="visibility: hidden; height: 0">

                                <div class="cornerStone owl-carousel">
                                    <?php
                                    $attachments = get_children(array('post_parent' => $post->ID,
                                        'post_status' => 'inherit',
                                        'post_type' => 'attachment',
                                        'post_mime_type' => 'image',
                                        'order' => 'ASC',
                                        'orderby' => 'menu_order ID'));

                                    foreach($attachments as $att_id => $attachment) {
                                        $full_img_url = wp_get_attachment_image($attachment->ID);
                                        echo $full_img_url;
                                    }
                                    ?>
                                </div>
                                <span class="cutOut fa fa-close"></span>
                            </div>
                            <?php $bgImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full') ?>
                            <div class="pItem pItemImg" id="<?php echo get_the_ID(); ?>" style="background-image: url('<?php echo $bgImg[0] ?>')">
                                <div class="info">
                                    <div class="header"><?php the_title(); ?></div>
                                    Клиент:
                                    <div class="customer">
                                        <?php $key="Клиент"; echo get_post_meta($post->ID, $key, true); ?>
                                    </div>
                                    Задача:
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

                    <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                </div>

                <div class="row each">
                    <?php
                    $the_query = new WP_Query( array(
                        'tag'=>'pervaya-plashka',
                        'offset'=> 5,
                        'posts_per_page' => 3
                    ));
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>

                        <div class="pItemWrapper col-xs-12 col-md-4">
                            <div class="owlKeeper col-xs-12" style="visibility: hidden; height: 0">
                                <div class="cornerStone owl-carousel">
                                    <?php
                                    $attachments = get_children(array('post_parent' => $post->ID,
                                        'post_status' => 'inherit',
                                        'post_type' => 'attachment',
                                        'post_mime_type' => 'image',
                                        'order' => 'ASC',
                                        'orderby' => 'menu_order ID'));

                                    foreach($attachments as $att_id => $attachment) {
                                        $full_img_url = wp_get_attachment_image($attachment->ID);
                                        echo $full_img_url;
                                    }
                                    ?>
                                </div>
                                <span class="cutOut fa fa-close"></span>
                            </div>
                            <?php $bgImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full') ?>
                            <div class="pItem pItemImg" id="<?php echo get_the_ID(); ?>" style="background-image: url('<?php echo $bgImg[0] ?>')">
                                <div class="info">
                                    <div class="header"><?php the_title(); ?></div>
                                    Клиент:
                                    <div class="customer">
                                        <?php $key="Клиент"; echo get_post_meta($post->ID, $key, true); ?>
                                    </div>
                                    Задача:
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

                    <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                </div>

                <div class="row">

                    <div class="col-xs-12 col-md-4">
                        <a href="<?php echo get_tag_link(22); ?>" class="pItem pItemText">
                            <div class="header">
                                <?php
                                    $tagName = get_term(22, 'post_tag');
                                    echo $tagName->name;
                                ?>
                            </div>
                            <?php echo term_description( 22, 'post_tag' ) ?>
                            <div class="more">
                                <i class="fa fa-angle-double-right fa-2x"></i>
                            </div>
                        </a>
                    </div>

                    <?php query_posts('tag=vtoraya-plashka'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <div class="col-xs-12 col-md-4">
                            <?php $bgImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full') ?>
                            <div class="pItem pItemImg" style="background-image: url('<?php echo $bgImg[0] ?>')">
                                <div class="info">
                                    <div class="header"><?php the_title(); ?></div>
                                    Клиент:
                                    <div class="customer">
                                        <?php $key="Клиент"; echo get_post_meta($post->ID, $key, true); ?>
                                    </div>
                                    Задача:
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
                    <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <section class="news col-xs-12">
            <div class="container">
                <div class="row">
                    <h2 class="dashBelow col-xs-12">обоЖГИ новости</h2>
                    <div class="subHeader">
                        Самое свежее и интересное из жизни компании,
                        а также полезные обучающие буквы
                    </div>

                    <div id="news" class="owl-carousel col-xs-12">

                        <?php query_posts('cat=20'); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <section class="customers col-xs-12">
            <div class="container">
                <div class="row">
                    <h2 class="dashBelow col-xs-12">наши клиенты</h2>
                    <div class="subHeader">
                        бла бла бла, окаймляя крупные озера
                        и морские побережья
                    </div>
                    <div id="customers" class="owl-carousel  col-xs-12">
                        <div class="cItem">
                            <div class="above">
                                <a href="#" title="БелЛакт">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms11.png" alt="БелЛакт">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms1.png" alt="БелЛакт">
                                </a>
                            </div>
                            <div class="below">
                                <a href="#" title="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms21.png" alt="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms2.png" alt="Ингман">
                                </a>
                            </div>
                        </div>
                        <div class="cItem">
                            <div class="above">
                                <a href="#" title="СантаБремор">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms31.png" alt="СантаБремор">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms3.png" alt="СантаБремор">
                                </a>
                            </div>
                            <div class="below">
                                <a href="#" title="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms21.png" alt="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms2.png" alt="Ингман">
                                </a>
                            </div>
                        </div>
                        <div class="cItem">
                            <div class="above">
                                <a href="#" title="БелЛакт">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms11.png" alt="БелЛакт">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms1.png" alt="БелЛакт">
                                </a>
                            </div>
                            <div class="below">
                                <a href="#" title="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms21.png" alt="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms2.png" alt="Ингман">
                                </a>
                            </div>
                        </div>
                        <div class="cItem">
                            <div class="above">
                                <a href="#" title="СантаБремор">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms31.png" alt="СантаБремор">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms3.png" alt="СантаБремор">
                                </a>
                            </div>
                            <div class="below">
                                <a href="#" title="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms21.png" alt="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms2.png" alt="Ингман">
                                </a>
                            </div>
                        </div><div class="cItem">
                            <div class="above">
                                <a href="#" title="БелЛакт">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms11.png" alt="БелЛакт">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms1.png" alt="БелЛакт">
                                </a>
                            </div>
                            <div class="below">
                                <a href="#" title="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms21.png" alt="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms2.png" alt="Ингман">
                                </a>
                            </div>
                        </div>
                        <div class="cItem">
                            <div class="above">
                                <a href="#" title="СантаБремор">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms31.png" alt="СантаБремор">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms3.png" alt="СантаБремор">
                                </a>
                            </div>
                            <div class="below">
                                <a href="#" title="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms21.png" alt="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms2.png" alt="Ингман">
                                </a>
                            </div>
                        </div><div class="cItem">
                            <div class="above">
                                <a href="#" title="БелЛакт">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms11.png" alt="БелЛакт">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms1.png" alt="БелЛакт">
                                </a>
                            </div>
                            <div class="below">
                                <a href="#" title="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms21.png" alt="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms2.png" alt="Ингман">
                                </a>
                            </div>
                        </div>
                        <div class="cItem">
                            <div class="above">
                                <a href="#" title="СантаБремор">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms31.png" alt="СантаБремор">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms3.png" alt="СантаБремор">
                                </a>
                            </div>
                            <div class="below">
                                <a href="#" title="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms21.png" alt="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms2.png" alt="Ингман">
                                </a>
                            </div>
                        </div><div class="cItem">
                            <div class="above">
                                <a href="#" title="БелЛакт">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms11.png" alt="БелЛакт">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms1.png" alt="БелЛакт">
                                </a>
                            </div>
                            <div class="below">
                                <a href="#" title="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms21.png" alt="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms2.png" alt="Ингман">
                                </a>
                            </div>
                        </div>
                        <div class="cItem">
                            <div class="above">
                                <a href="#" title="СантаБремор">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms31.png" alt="СантаБремор">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms3.png" alt="СантаБремор">
                                </a>
                            </div>
                            <div class="below">
                                <a href="#" title="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms21.png" alt="Ингман">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custms2.png" alt="Ингман">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <section class="feedback">
            <div class="container">
                <div class="row">
                    <h2 class="dashBelow col-xs-12">Напишите нам</h2>
                    <div class="subHeader">
                        Оператор данных может обрабатывать технические данные для:
                        обеспечения функционирования и безопасности Сайта и улучшения качества Сайта
                    </div>
                    <div class="feedbackEnvelope col-xs-12">
                        <div class="row">
                            <div class="left col-xs-12 col-md-6">
                                <h2>
                                    Звони или пиши!<br>
                                    Вторая строка заметно длиннее...<br>
                                    И третья.
                                </h2>
                                <div class="descr">
                                    <b>Сильный и эффективный бренд —</b>
                                    это ключевой нематериальный актив
                                    вашего бизнеса. Разработка бренда — сугубо индивидуальное
                                    решение, удовлетворяющее целям и задачам именно вашего бизнеса.
                                    Поэтому и расчет стоимости услуг по разработке фирменного стиля
                                    в каждом случае проводится индивидуально.
                                </div>
                            </div>
                            <div class="right col-xs-12 col-md-6">
                                <h3>
                                    Заказать услугу
                                </h3>
                                <?php echo do_shortcode('[contact-form-7 id="113" title="Контактная форма 1"]') ?>
<!--                                <form id="envelopeForm">-->
<!--                                    <label for="name">-->
<!--                                        <input id="name" type="text">-->
<!--                                        <span>Ваше имя*</span>-->
<!--                                    </label>-->
<!---->
<!--                                    <label for="phone">-->
<!--                                        <input id="phone" type="tel">-->
<!--                                        <span>Телефон</span>-->
<!--                                    </label>-->
<!---->
<!--                                    <label for="email">-->
<!--                                        <input id="email" type="email">-->
<!--                                        <span>E-Mail*</span>-->
<!--                                    </label>-->
<!---->
<!--                                    <select>-->
<!--                                        <option>Создание сайта</option>-->
<!--                                        <option>Дизайн рекламы</option>-->
<!--                                        <option>Стратегия бренда</option>-->
<!--                                        <option>Прочее</option>-->
<!--                                    </select>-->
<!---->
<!--                                    <label for="comment">-->
<!--                                        <textarea id="comment"></textarea>-->
<!--                                        <span>Комментарий</span>-->
<!--                                    </label>-->
<!---->
<!--                                    <label for="file">-->
<!--                                        <span>Прикрепить файл</span><br>-->
<!--                                        <small>подсказка о форматах и прочее</small>-->
<!--                                        <input id="file" type="file">-->
<!--                                    </label>-->
<!---->
<!--                                    <label for="check">-->
<!--                                        <input id="check" type="checkbox">-->
<!--                                        <span></span>-->
<!--                                        <small>-->
<!--                                            Согласие на обработку персональныйх данных-->
<!--                                            <a href="#"><b>(политика конфидециальности)</b></a>-->
<!--                                        </small>-->
<!--                                    </label>-->
<!--                                    <input id="submit" type="submit" placeholder="Отправить" disabled="disabled">-->
<!--                                </form>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php get_footer();
