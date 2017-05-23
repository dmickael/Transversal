function initMap() {
    var map3 = new google.maps.Map(document.getElementById('map3'),{
        mapTypeId:google.maps.MapTypeId.satelite,
        center: {lat:47.227, lng: -1.5519566},
        zoom: 11,
        scrollwheel:false,
        streetViewControl:false,
        mapTypeControl:false
    });
    var marker3 = new google.maps.Marker({
        position: {lat: 47.24369,lng: -1.55151},
        map: map3,
        title: 'Campus Fac science'
    });



    var map4 = new google.maps.Map(document.getElementById('map4'),{
        mapTypeId:google.maps.MapTypeId.satelite,
        center: {lat:47.227, lng: -1.5519566},
        zoom: 11,
        scrollwheel:false,
        streetViewControl:false,
        mapTypeControl:false
    });
    var marker4 = new google.maps.Marker({
        position: {lat: 47.25482,lng: -1.52325},
        map: map4,
        title: 'Stade de la Beaujoire'
    });



    var map5 = new google.maps.Map(document.getElementById('map5'),{
        mapTypeId:google.maps.MapTypeId.satelite,
        center: {lat:47.227, lng: -1.5519566},
        zoom: 11,
        scrollwheel:false,
        streetViewControl:false,
        mapTypeControl:false
    });
    var marker5 = new google.maps.Marker({
        position: {lat: 47.23017,lng: -1.63005},
        map: map5,
        title: 'Zénith'
    });





    var map6 = new google.maps.Map(document.getElementById('map6'),{
        mapTypeId:google.maps.MapTypeId.satelite,
        center: {lat:47.227, lng: -1.5519566},
        zoom: 11,
        scrollwheel:false,
        streetViewControl:false,
        mapTypeControl:false
    });
    var marker6 = new google.maps.Marker({
        position: {lat: 47.2126,lng: -1.55788},
        map: map6,
        title: 'Commerce'
    });




    var map7 = new google.maps.Map(document.getElementById('map7'),{
        mapTypeId:google.maps.MapTypeId.satelite,
        center: {lat:47.227, lng: -1.5519566},
        zoom: 11,
        scrollwheel:false,
        streetViewControl:false,
        mapTypeControl:false
    });
    var marker7 = new google.maps.Marker({
        position: {lat: 47.21377,lng: -1.54468},
        map: map7,
        title: 'Nantes Métropole'
    });




    var map8 = new google.maps.Map(document.getElementById('map8'),{
        mapTypeId:google.maps.MapTypeId.satelite,
        center: {lat:47.227, lng: -1.5519566},
        zoom: 11,
        scrollwheel:false,
        streetViewControl:false,
        mapTypeControl:false
    });
    var marker8 = new google.maps.Marker({
        position: {lat: 47.20563,lng: -1.53903},
        map: map8,
        title: 'Beaulieu'
    });




    var map9 = new google.maps.Map(document.getElementById('map9'),{
        mapTypeId:google.maps.MapTypeId.satelite,
        center: {lat:47.227, lng: -1.5519566},
        zoom: 11,
        scrollwheel:false,
        streetViewControl:false,
        mapTypeControl:false
    });

};
google.maps.event.addDomListener(window,'load', initMap);


