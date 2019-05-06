let $map = document.querySelector('#map');

class LeafLetMap {
    load (element) {
        L.map()
    }
}

const initMap = function () {
    let map = new LeafLetMap();
    map.load($map)
};

if($map !== null) {
  initMap();
}

let map = L.map('map').setView([51.505, -0.09], 13);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
    maxZoom: 18,
    accessToken: 'pk.eyJ1IjoiaGVybWFuamFja3NvbiIsImEiOiJjanZiaWJ3cXAwNzJkM3lxb2RzbjFjMHZiIn0.UUzP48bbLwUSGS1DKCQkOw',
    id: 'mapbox.streets',
}).addTo(map);
L.popup()
    .setLatLng([51.505, -0.09])
    .setContent('<p>Hello world!<br />This is a nice popup.</p>')
    .openOn(map);

