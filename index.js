function pulsante() {
    document.getElementById("pulsante1").innerHTML="";
    document.getElementById("pulsante1").style.right="0px";
    document.getElementById("pulsante1").style.background="linear-gradient(#fefae0, #dda15e)";
    document.getElementById("pulsante1").innerHTML += `<div class="homeMenuVerticale"> Ristorante Oasi <br> <br /></div> <div class="opzioni"> <a href="prenota.html"> Prenota<br /> </a> </div><div class="opzioni"> <a href="doveSiamo.html"> Dove siamo <br /> </a></div>`;
    document.getElementById("pulsante1").innerHTML += `<button id="pulsanteChiudi" class="fas fa-times" onclick="chiudi()"></button>`;
    document.getElementById("pulsante1").style.color = "black";
}

function chiudi(){
    document.getElementById("pulsante1").style.right="-110%";
}

const createMap = (containerId, lon, lat, zoom = 16) => {
    const Mappa = new OpenLayers.Map(containerId);
    Mappa.addLayer(new OpenLayers.Layer.OSM());

    const LayerMarkers = new OpenLayers.Layer.Markers("Markers");
    Mappa.addLayer(LayerMarkers);

    const LonLat = new OpenLayers.LonLat(parseFloat(lon), parseFloat(lat)).transform(new OpenLayers.Projection("EPSG:4326"), Mappa.getProjectionObject());
    LayerMarkers.addMarker(new OpenLayers.Marker(LonLat));

    Mappa.setCenter(LonLat, zoom);
};

const mapLocations = {
    ferrara: {
        lon: "11.616667",
        lat: "44.833332",
    },
};

createMap("DivMappa", mapLocations.ferrara.lon, mapLocations.ferrara.lat);
