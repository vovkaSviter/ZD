<?php
/**
 * Template Name: Contacts
 */

get_header(); ?>


    <div class="row">
        <section class="feedback contacts col-xs-12">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <h1 class="col-xs-12">Свяжитесь с нами</h1>
                        <form class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-12 col-md-4">
                                    <input type="text" placeholder="Ваше имя">
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <input type="email" placeholder="Ваш e-mail">
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <input type="tel" placeholder="Ваш телефон">
                                </div>
                            </div>
                            <textarea placeholder="Ваше сообщение" rows="5"></textarea>
                            <input type="submit" placeholder="отправить">
                        </form>
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
