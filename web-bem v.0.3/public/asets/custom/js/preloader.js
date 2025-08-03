$(document).ready(function () {
    $("body").addClass("onloading");
    $(".preloader").fadeOut(1000, function () {
        $("body").removeClass("onloading");
    });
});