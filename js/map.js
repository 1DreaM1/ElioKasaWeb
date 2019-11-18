var points = L.layerGroup();

var markersArray = [];
markersArray["axis"] = L.marker([48.33386, 19.66238]).bindPopup('<b><span style="color:red;">Axis Distribution s.r.o.</span></b><br>M:Rázusa 35, 984 01 Lučenec , Slovensko<br>Tel.: 047-4331173<br>Email: obchod@axis-distribution.eu').addTo(points),
markersArray["axis2"] = L.marker([48.33486, 19.68238]).bindPopup('<b><span style="color:red;">Axis Distribution s.r.o.</span></b><br>M:Rázusa 35, 984 01 Lučenec , Slovensko<br>Tel.: 047-4331173<br>Email: obchod@axis-distribution.eu').addTo(points);
markersArray["axis3"] = L.marker([49.33486, 20.68238]).bindPopup('<b><span style="color:red;">Axis Distribution s.r.o.</span></b><br>M:Rázusa 35, 984 01 Lučenec , Slovensko<br>Tel.: 047-4331173<br>Email: obchod@axis-distribution.eu').addTo(points);

var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
		'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
		'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox.light', attribution: mbAttr}),
	streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});

var map = L.map('map', {
	center: [48.3303, 19.6632],
	zoom: 7.5,
	layers: [streets, points]
});

var baseLayers = {
	"Čierno biele": grayscale,
	"Ulice": streets
};

var overlays = {
	"Body": points
};

L.control.layers(baseLayers, overlays).addTo(map);

$("#test").on('click', function () {
	mk.togglePopup();
})

$(".td").on('click', function () {
	var name = $(this).data("name");
	markersArray[name].togglePopup();
	$("html, body").animate({scrollTop:  $("#map").offset().top - 50}, "slow");
})