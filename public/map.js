var mymap = L.map('mapid').setView([21.505, -0.09], 2);

L.tileLayer('https://api.tiles.mapbox.com/v4/%7Bid%7D/%7Bz%7D/%7Bx%7D/%7By%7D.png?access_token=pk.eyJ1IjoiYm90bWFuMSIsImEiOiJjancyYXptZWkwMThjNDhzMDNsa3J0c2FuIn0.wetY1yG3Qs1Z92-LXuhimg', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/%22%3EOpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/%22%3ECC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/%22%3EMapbox</a>',
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiYm90bWFuMSIsImEiOiJjancyYXptZWkwMThjNDhzMDNsa3J0c2FuIn0.wetY1yG3Qs1Z92-LXuhimg'
}).addTo(mymap);

var marker = L.marker([51.5, -0.09]).addTo(mymap);
marker.bindPopup("<div class='popup'></div>");