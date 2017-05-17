/**
 * Created by maelb on 16/05/2017.
 */
$(document).ready(function(){
    $('header').addClass('invisible');
    $('.slider').slick({
        touchMove:false,
        prevArrow:'<button type="button" id="buttonarrowprev"><img src="images/fleche.png" title="précédent"/></button>',
        nextArrow:'<button type="button" id="buttonarrownext"><img src="images/fleche.png" title="suivant"/></button>'
    });
});
$(window).scroll(function(){
    var sticky = $('header'),
        scroll = $(window).scrollTop();
    if (scroll>800) sticky.addClass('fixed'),
        sticky.removeClass('invisible');
    else sticky.removeClass('fixed'), sticky.addClass('invisible');
});
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'),{
        mapTypeId:google.maps.MapTypeId.satelite,
        center: {lat:47.227, lng: -1.5519566},
        zoom: 11,
        scrollwheel:false,
        streetViewControl:false,
        mapTypeControl:false
    });
}
google.maps.event.addDomListener(window,'load', initMap);