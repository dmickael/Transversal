
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
        if (window.innerWidth < 1000) {
            $(".cross").hide();
            $("nav").hide();
            $(".hamburger").show();
            $(".hamburger").click(function(){});
            $(".cross").click(function (){});
        }
        else{$("nav").show();}
    });
});
