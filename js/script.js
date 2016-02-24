jQuery(function($) { // DOM is now read and ready to be manipulated

    $( document ).ready(function() {
        console.log( "ready!" );
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() == 0) {
            $('#header').css({
                    'background-color': 'black',
                    'box-shadow': 'none',
                    '-moz-box-shadow' : 'none',
                    '-webkit-box-shadow' : 'none' });
        }
        else {
            $('#header').css({
                    'background-color': 'rgba(0, 0, 0, 0.66)',
                    //'box-shadow': '0px 10px 10px #888',
                    //'-moz-box-shadow' : '0px 10px 10px #888',
                    //'-webkit-box-shadow' : '0px 10px 10px #888'
                });
        }
    });

    $("#show-menu").click(function(){
        $("#menu ul").toggle(500);
    });

});
