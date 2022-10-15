$(document).ready(function () {
    $('.menu_bar').click(function () {
        $('nav.menu').slideToggle();
    });
    $(window).resize(function () {
        if (parseInt($('body').width()) > 768) {
            $('nav.menu').show();
        }else{
            $('nav.menu').hide();
        }
    });
});