
if (window.innerWidth<1000) {
    $(".cross").hide();
    $("nav").hide();
    $(".hamburger").click(function () {
        $("nav").slideToggle("slow", function () {
            $(".hamburger").hide();
            $(".cross").show();
        });
    });

    $(".cross").click(function () {
        $("nav").slideToggle("slow", function () {
            $(".cross").hide();
            $(".hamburger").show();
        });
    });
}
$(function () {
    $(window).resize(function () {
        $(".cross").hide();
        $("nav").hide();
        $(".hamburger").show();
        if (window.innerWidth < 1000) {
            $(".cross").hide();
            $("nav").hide();
        }
        else{$("nav").slideToggle("slow", function () {
            $(".cross").hide();
            $(".hamburger").show();
        });}
    });
});
