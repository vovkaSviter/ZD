<?php
/**
 * Template Name: Contacts
 */

get_header(); ?>


    <div class="row">
        <section class="feedback contacts col-xs-12">
            <div class="container">
                <div class="row">
                    <?php
                    if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }
                    ?>
                    <h1 class="col-xs-12">Свяжитесь с нами</h1>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <section class="contactsMap">
            <h2>Кърым</h2>

            <div id="contactsMap" style="width: 100%; height: 550px"></div>
        </section>
    </div>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script type="text/javascript">
        ymaps.ready(init);
        var myMap,
            myPlacemark;

        function init(){
            myMap = new ymaps.Map("contactsMap", {
                center: [44.95469287, 34.11802557],
                zoom: 17,
                controls: []
            });
            myMap.behaviors.disable('scrollZoom');

            myPlacemark = new ymaps.Placemark([44.95469287, 34.11802557], {
                hintContent: '!',
                balloonContent: 'г. Симферополь<br> ул. Киевская, 59<br> тел. 8 978 123 45 67'
            });

            myMap.geoObjects.add(myPlacemark);
            myPlacemark.balloon.open();

        }
    </script>



<?php get_footer();
