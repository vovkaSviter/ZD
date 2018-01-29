$(document).ready(function(){

    //Equal heights
        //Navigation
        if($(window).width() > 992) {
            var nav = $('nav');
            var navHeight = nav.outerHeight();
            var children = $('nav .row>*');

            var logo = $('a.logo');
            var navHeight = nav.height();

            logo.css('height' , navHeight);

            $(children).each(function(){
                var height = $(this).height();
                var marginTop = (navHeight - height) / 8 + 'px';

                $(this).css('margin-top', marginTop);
            });

        };

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

        //News
        $(function(){
            var item = $('.nItem .imgKeeper');
            var itemWidth = item.width();

            item.css('height' , itemWidth *.65);

        });
        //Team
        $(function(){
            var phItem = $('.phItem');
            var phWidth = phItem.width();

            phItem.css('height', phWidth * .75);
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
        var trigger = $('.navList>li');
        var tab = trigger.children('.tab');
        var tabWidth = $('nav').outerWidth();
        var tabHeight = tab.height();
        var rem = parseInt($('html').css('font-size'));

        console.log(tabHeight);

        tab.css({
            width: tabWidth,
            top: tabHeight + (.75 * rem)
        });

        trigger.hover(function(){

            var dataName = $(this).attr('data-tab');
            var selectedTab = tab.filter(function(){
                return $(this).attr('id') == dataName;
            });


            selectedTab.stop(true).slideDown().delay(500);
        }, function(){
            var dataName = $(this).attr('data-tab');
            var selectedTab = tab.filter(function(){
                return $(this).attr('id') == dataName;
            });


            selectedTab.stop(true).slideUp().delay(2000);
        });
    });

    //Nav "fixed"
    if($(window).width() > 992) {


            var nav = $('nav');

            $(window).scroll(function () {
                if ($(this).scrollTop() > 0) {
                    nav.addClass('scrolled');
                } else {
                    nav.removeClass('scrolled')
                }
            });



    }

    console.log('JQ is here');
});