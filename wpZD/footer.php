<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>


<div class="row">
    <footer class="col-xs-12">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="pdf col-xs-12 col-md-2 pull-right">
                        <a href="#" class="download">
                            <i class="fa fa-file-pdf-o"></i>
                            PDF-презентация
                        </a>
                        <a href="#" class="download">
                            <i class="fa fa-comments-o"></i>
                            Обратная связь
                        </a>
                        <h4>Мы в соцсетях</h4>
                        <a href="#" class="social">
                            <i class="fa fa-facebook"></i>
                            <span class="hidden-xs hidden-sm">фейсбук</span>
                        </a>
                        <a href="#" class="social">
                            <i class="fa fa-vk"></i>
                            <span class="hidden-xs hidden-sm">Вконтакте</span>
                        </a>
                        <a href="#" class="social">
                            <i class="fa fa-instagram"></i>
                            <span class="hidden-xs hidden-sm">инстаграм</span>
                        </a>
                        <a href="#" class="social">
                            <i class="fa fa-youtube-play"></i>
                            <span class="hidden-xs hidden-sm">ютуб</span>
                        </a>
                    </div>
                    <div class="address col-xs-12 col-md-8 pull-right">
                        <div class="row">
                            <div class="leftAddress col-xs-12 col-md-6">
                                <h4>
                                    <i class="fa fa-map-marker"></i>
                                    Россия
                                </h4>
                                <div>
                                    г. Москва, ул. Ленинская слобода, 26, стр. 5,<br>
                                    оф. 5707, 5708<br>
                                    Тел.: +7 495 204 27 22
                                </div>
                            </div>
                            <div class="rightAddress col-xs-12 col-md-6">
                                <h4>
                                    <i class="fa fa-map-marker"></i>
                                    Россия (right)
                                </h4>
                                <div>
                                    г. Москва, ул. Ленинская слобода, 26, стр. 5,<br>
                                    оф. 5707, 5708<br>
                                    Тел.: +7 495 204 27 22
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map col-xs-12 col-md-2 pull-left">
                        <h4>
                            <a href="<?php echo get_page_link(35);?>">Услуги</a>
                        </h4>
                        <ul>
                            <?php
                                $args = array(
                                    'orderby' => 'name',
                                    'title_li' => '',
                                    'hide_empty' => 0,
                                    'hide_title_if_empty' => true,
                                    'include' => '8,17,18,19,9,10,11,12,13,14,15,16',
                                );
                                wp_list_categories( $args );
                            ?>
                        </ul>
                    </div>
                    <div class="footerBody col-xs-12 col-md-8 pull-right">
                        <div class="row">
                            <div class="col-xs-12">
                                Реакция, в том числе, многопланово диссонирует
                                неизменный хтонический миф, что отмечают такие
                                крупнейшие ученые как Фрейд, Адлер, Юнг, Эриксон,
                                Фромм. Искусство многопланово начинает психоанализ.
                                Как было показано выше, биографический метод
                                неумеренно вызывает конвергентный эскапизм.
                                Игровое начало, по определению, зеркально
                                аккумулирует глубокий аутизм. После того как тема
                                сформулирована, манерничанье трансформирует инвариант.
                                Ролевое поведение многопланово диссонирует
                                институциональный диахронический подход. Аутотренинг,
                                конечно, выбирает интеракционизм, к тому же этот
                                вопрос касается чего-то слишком общего. Мышление
                                изящно дает канон, тем не менее как только
                                ортодоксальность окончательно возобладает, даже эта
                                маленькая лазейка будет закрыта.
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 footerCopy">
                                <i class="fa fa-copyright"></i>
                                2018
                                ЖГИ Дизайн
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>

<script>
    $(document).ready(function(){
        var mgr = $('#mgr');
        $(mgr).owlCarousel({
            nav: true,
            dots: true,
            items: 1,
            loop: true,
            autoplay: false,
            autoplayTimeout: 7500,
            autoplayHoverPause: true
        });

        mgr.click(function(){
            mgr.trigger('next.owl.carousel');
        });

        $('#news').owlCarousel({
            nav: true,
            dots: true,
            margin: 15,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 3
                }
            }
        });

        $('#customers').owlCarousel({
            nav: true,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 5
                }
            }
        });
    });
</script>

<script>
    $(window).bind('resize',function(){
        window.location.href = window.location.href;
    });
</script>

</body>
</html>
