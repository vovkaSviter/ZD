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

    console.log('JQ is here');
});