var mymap = L.map('mapid').setView([21.505, -0.09], 2);

L.tileLayer('https://tile.thunderforest.com/neighbourhood/%7Bz%7D/%7Bx%7D/%7By%7D.png?apikey=2c74870cafa64631bd474d06de06a5cc', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/%22%3EOpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/%22%3ECC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/%22%3EMapbox</a>',
    id: 'mapbox.streets'
}).addTo(mymap);

var marker = L.marker([51.5, -0.09]).addTo(mymap);
marker.bindPopup("<div class='popup'></div>");