var points = L.layerGroup();

function getPosition(address) {
	var returnArray = [];

	$.ajax({
		url: "https://nominatim.openstreetmap.org/?addressdetails=1&q="+ address +"&format=json&limit=1",
		type: "GET",
		async: false,
		crossDomain: true,
		dataType: "json",
		success: function(data) {
			if(!jQuery.isEmptyObject(data)) {
				returnArray['lat'] = data[0].lat;
				returnArray['lng'] = data[0].lon;
			}
		},
	})
	return(returnArray);
}

var markersArray = [];
$(".tr").each(function() {

	let name =  $(this).find("[itemprop='name']").html();
	let location =  $(this).find("[itemprop='location']").html();
	let tel =  $(this).find("[itemprop='telephone']").html();
	let email =  $(this).find("[itemprop='email']").html();

	var positionData = getPosition(location);
	let lat = positionData['lat'];
	let lng = positionData['lng'];

	if(typeof lat === "undefined") {
		if(typeof $(this).data("lat") === "undefined") {
			lat = 48.3303;
		} else {
			lat = $(this).data("lat");
		}
	}
	if(typeof lng === "undefined") {
		if(typeof $(this).data("lng") === "undefined") {
			lng = 19.6632;
		} else {
			lng = $(this).data("lng");
		}
	}

	if(lat !== 0 && lng !== 0) {
		markersArray[name] = L.marker([lat, lng]).bindPopup('<b><span style="color:red;">'+ name +'</span></b><br>'+ location +'<br>Tel: '+ tel +'<br>Email: '+ email).addTo(points);
	}
})

var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
		'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
		'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox.light', attribution: mbAttr}),
	streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});

var map = L.map('map', {
	center: [48.3303, 19.6632],
	zoom: 6.5,
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
	var name = $(this).find("[itemprop='name']").html();
	markersArray[name].togglePopup();
	$("html, body").animate({scrollTop:  $("#map").offset().top - 50}, "slow");
})