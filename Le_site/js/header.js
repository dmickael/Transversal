if (window.innerWidth<1000) {
    $(".cross").hide();
    $("nav").hide();
    $(".hamburger").click(function () {
        $("nav").slideToggle("slow", function () {
            $(".hamburger").hide();
            $(".cross").show();
            $(".titre_caroussel").addClass('move');
            $(".titre_caroussel").removeClass('titre_caroussel');
        });
    });

    $(".cross").click(function () {
        $("nav").slideToggle("slow", function () {
            $(".cross").hide();
            $(".hamburger").show();
            $(".move").addClass('titre_caroussel');
            $(".move").removeClass('move');
        });
    });
}
$(function () {
    $(window).resize(function () {
        if (window.innerWidth < 1000) {
            $(".cross").hide();
            $("nav").hide();
            $(".hamburger").show();
            $(".hamburger").click(function(){
                $("nav").slideToggle()
                $(".titre_caroussel").addClass('move');
                $(".titre_caroussel").removeClass('titre_caroussel');
            });
            $(".cross").click(function (){
                $(".move").addClass('titre_caroussel');
                $(".move").removeClass('move');
            });
        }
        else{$("nav").show();}
    });
});
