/*import {map, geo};

var map = leaflet.map("map").setView([4.094, -74.685], 6);

var tiles = leafletL.tileLayer(
  "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw",
  {
  maxZoom: 18,
  attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' + 'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
  id: "mapbox/streets-v11",
  tileSize: 512,
  zoomOffset: -1,
  }
  ).addTo(map);

var geoJson;
function style(feature) {
  return {
    fillColor: feature.properties.fill,
    fillOpacity: 0.5,
    strokeColor: feature.properties.stroke,
    strokeOpacity: 1
    };
}

geojson = leaflet.geoJson(regionsData, {
    style:style
}).addTo(map);

*/