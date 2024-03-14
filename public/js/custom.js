$(document).ready(function () {

    $("#hamburger").on("click", function () {
        if ($("#hamburger").attr("name") === "menu") {
            $("#hamburger").attr("name", "close");
            $(".sidebar-menu").css("display", "block");
        } else {
            $("#hamburger").attr("name", "menu");
            if ($("#hamburger").attr("name", "menu")) {
                $(".sidebar-menu").css("display", "none");
                if($(window).width() >= 768) {
                    $(".sidebar-menu").css("display", "block");
                }
            }
        }
    });

    if ($(window).on('resize', 'load', function () { 
        if ($(window).width() < 768) {
            $(".sidebar-menu").css("display", "none");
        } else {
            $(".sidebar-menu").css("display", "block");
        }
    }));
    
});