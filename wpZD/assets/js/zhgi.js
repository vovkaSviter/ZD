$(document).ready(function(){

    //Equal heights
    //Navigation
    //$(function(){
    //    if($(window).width() > 992) {
    //        var nav = $('nav');
    //        var children = $('nav .row>*');
    //
    //        var logo = $('a.logo');
    //        var navHeight = nav.height();
    //
    //        logo.css('height' , navHeight);
    //
    //        $(children).each(function(){
    //            var height = $(this).height();
    //            var marginTop = (navHeight - height) / 2 + 'px';
    //
    //            $(this).css('margin-top', marginTop);
    //        });
    //
    //    }
    //});

    $(function(){
        if($(window).width() > 992) {
            var nav = $('nav');
            var navHeight = nav.height();
            var children = $('nav .row>*');

            children.css('height' , navHeight * 1.5);

        }
    });


    //MarryGoRound
    $(function(){
        var stub = $('.marryGoRound .stub');
        var owlC = $('.owl-stage-outer');
        var owlCWidth = owlC.width();

        stub.css('height', owlCWidth / 3);

        if($(window).width() < 992) {

            stub.css('height', owlCWidth / 2);

        }

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
        var item = $('.nItem');
        var itemWidth = item.width();

        var imgItem = $('.nItem .imgKeeper');
        var imgItemWidth = imgItem.width();

        item.css('height' , itemWidth * 1.5);
        imgItem.css('height' , imgItemWidth * .65);

    });

    //Team
    $(function(){
        var phItem = $('.phItem');
        var phWidth = phItem.width();

        phItem.css('height', phWidth * .75);
    });

    //PDF
    $(function(){
        var item = $('.aboutInnPDFItem');
        var itemWidth = item.width();

        item.css('height' , itemWidth);
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
        var nav = $('nav');
        var tabWidth = nav.outerWidth();
        var navHeight = nav.outerHeight();
        //var rem = parseInt($('html').css('font-size'));

        tab.css({
            width: tabWidth,
            top: navHeight / 1.75
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
    $(function(){
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
    });

    //Search behaviour
    $(function(){
        var trigger = $('#navSearchTrigger');
        var form = $('nav .socials form');

        trigger.click(function(){
            form.toggleClass('hidden')
        });

    });

    //FeedbackSubmit behaviour
    //$(function(){
    //    var check = $('#check');
    //    var submit = $('#submit');
    //    var checked = check.attr('checked');
    //
    //    check.click(function(){
    //        submit.attr('disabled' , !this.checked);
    //    });
    //
    //});


    //FeedbackInputHeader behaviour
    $(function(){

        var input = $('.feedbackEnvelope input');
        var textarea = $('.feedbackEnvelope textarea');

        input.focusin(function(){
            $(this).closest('label').find('.inputHeader').addClass('focused');
        });

        input.focusout(function(){
            $(this).closest('label').find('.inputHeader').removeClass('focused');
        });

        textarea.focusin(function(){
            $(this).closest('label').find('.inputHeader').addClass('focused');
        });

        textarea.focusout(function(){
            $(this).closest('label').find('.inputHeader').removeClass('focused');
        });

        textarea.on('change keyup keydown paste cut', textarea, function () {
            $(this).height(0).height(this.scrollHeight);
        }).find('textarea').change();

    });

    console.log('JQ is here');
});

