$(document).ready(function () {
    $('.panel').hover(function () {
        $(this).addClass('shadow');
    }, function () {
        $(this).removeClass('shadow');
    });
});
