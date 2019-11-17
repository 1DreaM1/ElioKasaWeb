var cities = L.layerGroup();

	L.marker([48.33386, 19.66238]).bindPopup('<b><span style="color:red;">Axis Distribution s.r.o.</span></b><br>M:Rázusa 35, 984 01 Lučenec , Slovensko<br>Tel.: 047-4331173<br>Email: obchod@axis-distribution.eu').addTo(cities),
	L.marker([48.33486, 19.68238]).bindPopup('<b><span style="color:red;">Axis Distribution s.r.o.</span></b><br>M:Rázusa 35, 984 01 Lučenec , Slovensko<br>Tel.: 047-4331173<br>Email: obchod@axis-distribution.eu').addTo(cities);


	var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

	var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox.light', attribution: mbAttr}),
		streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});

	var map = L.map('map', {
		center: [48.3303, 19.6632],
		zoom: 15,
		layers: [streets, cities]
	});

	var baseLayers = {
		"Čierno biele": grayscale,
		"Ulice": streets
	};

	var overlays = {
		"Mestá": cities
	};

	L.control.layers(baseLayers, overlays).addTo(map);