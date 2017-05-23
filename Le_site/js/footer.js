function initMap() {
    var map2 = new google.maps.Map(document.getElementById('map2'),{
        mapTypeId:google.maps.MapTypeId.satelite,
        center: {lat:47.227, lng: -1.5519566},
        zoom: 11,
        scrollwheel:false,
        streetViewControl:false,
        mapTypeControl:false
    });
    var marker = new google.maps.Marker({
        position: {lat: 47.24369,lng: -1.55151},
        map: map2,
        title: 'Campus Fac science'
    });
    var marker2 = new google.maps.Marker({
        position: {lat: 47.25482,lng: -1.52325},
        map: map2,
        title: 'Stade de la Beaujoire'
    });
    var marker3 = new google.maps.Marker({
        position: {lat: 47.23017,lng: -1.63005},
        map: map2,
        title: 'Zénith'
    });
    var marker4 = new google.maps.Marker({
        position: {lat: 47.2126,lng: -1.55788},
        map: map2,
        title: 'Commerce'
    });
    var marker4 = new google.maps.Marker({
        position: {lat: 47.21377,lng: -1.54468},
        map: map2,
        title: 'Nantes Métropole'
    });
    var marker4 = new google.maps.Marker({
        position: {lat: 47.20563,lng: -1.53903},
        map: map2,
        title: 'Beaulieu'
    });
};
google.maps.event.addDomListener(window,'load', initMap);/**
 * Created by maelb on 17/05/2017.
 */
