$(document).ready(function() {
    var height = $(window).height()-50;
    $('.map').css('height', height)
    $(window).resize(function() {
        height = $(window).height()-50;
        $('.map').css('height', height);
    });
});