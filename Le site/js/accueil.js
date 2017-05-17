/**
 * Created by maelb on 16/05/2017.
 */
$(document).ready(function(){
    $('.slider').slick({
        touchMove:false,
        accebility:false
    });
});
$(window).scroll(function(){
    var sticky = $('header'),
        scroll = $(window).scrollTop();
    if (scroll>500) sticky.addClass('fixed'),
    sticky.removeClass('invisible');
    else sticky.removeClass('fixed'), sticky.addClass('invisible');
});