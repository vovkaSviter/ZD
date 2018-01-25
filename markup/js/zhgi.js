$(document).ready(function(){

    //Equal heights
        //Navigation
        $(function(){
            var nav = $('nav');
            var navHeight = nav.outerHeight();
            var children = $('nav .row>*');

            $(children).each(function(){
                var height = $(this).height();
                var marginTop = (navHeight - height) / 8 + 'px';

                $(this).css('margin-top', marginTop);
            });

        });

        //MarryGoRound
        $(function(){
            var stub = $('.marryGoRound .stub');
            var owlC = $('.owl-stage-outer');
            var owlCWidth = owlC.width();

            stub.css('height', owlCWidth / 2)

        });

        //Portfolio
        $(function(){
            var item = $('.pItem');
            var iWidth = item.width();
            var iHeight = iWidth / 1.5 + 'px';

            item.css('height', iHeight);
        });

    //Scroll to top
    $(function(){
        var upTo = $('.upTo');
        $(window).scroll(function () {
            if ($(this).scrollTop() > 0) {
                upTo.fadeIn();
            } else {
                upTo.fadeOut();
            }
        });
        upTo.click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 400);
            return false;
        });
    });

    //innerList behaviour
    $(function(){
        var trigger = $('.innerListTrigger');
        trigger.click(function(){
            $(this).toggleClass('fa-angle-double-down fa-angle-double-up');
            $(this).next().slideToggle();
        });
    });

    //Navtabs behaviour
    $(function(){
        var trigger = $('.navList>li>a');
        var tab = $('nav>.tab');

        trigger.mouseenter(function(){
            var dataName = $(this).attr('data-tab');
            var selectedTab = tab.filter(function(){
                return $(this).attr('id') == dataName;
            });

            selectedTab.slideToggle();
        });
    });

    console.log('JQ is here');
});