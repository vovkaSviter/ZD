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

            console.log(navHeight);
            console.log(children);
        });

    console.log('JQ is here');
});