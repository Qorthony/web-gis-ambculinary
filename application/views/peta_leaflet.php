<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<script type="text/javascript" src="<?=base_url()?>assets/template/js/jquery.1.11.1.js"></script>
	
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

	<link rel="stylesheet" href="<?=base_url()?>assets/leaflet.groupedlayercontrol.css" />
	<script src="<?=base_url()?>assets/leaflet.groupedlayercontrol.js"></script>
	<link rel="stylesheet" href="<?=base_url()?>assets/Control.MiniMap.css" />
	<script src="<?=base_url()?>assets/Control.MiniMap.js"></script>

	<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
	<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

	<link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css">

	<script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js"></script>

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/L.Control.ZoomBar.css"/>
	<script type="text/javascript" src="<?=base_url()?>assets/L.Control.ZoomBar.js"></script>

	<script type="text/javascript" src="<?=base_url()?>assets/Leaflet.Coordinates-0.1.5.min.js"></script>
	<link rel="stylesheet" href="<?=base_url()?>assets/Leaflet.Coordinates-0.1.5.css"/>

	<script type="text/javascript" src="<?=base_url()?>assets/leaflet.legend.js"></script>
	<link rel="stylesheet" href="<?=base_url()?>assets/leaflet.legend.css" />
</head>
<body>
<div id="map" style="width: 100%; height: 530px; color:black;"></div>

<script>
	var prov = new L.LayerGroup();
	var sungai = new L.LayerGroup();
	var provin = new L.LayerGroup();
	var kuliner = new L.LayerGroup();

	var map = L.map('map', {
		// center: [-1.7912604466772375, 116.42311966554416],
		center: [-6.89, 113.75 ],
		zoom: 15,
		zoomControl: false,
		layers: []
	});

	var GoogleSatelliteHybrid = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
		maxZoom: 22,
		attribution: 'Latihan Web GIS'
	}).addTo(map);

	var Esri_NatGeoWorldMap = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}', {
		attribution: 'Tiles &copy; Esri &mdash; National Geographic, Esri, DeLorme,NAVTEQ, UNEP-WCMC, USGS, NASA, ESA, METI, NRCAN, GEBCO, NOAA, iPC',
		maxZoom: 16
	});

	var GoogleMaps = new
	L.TileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
		opacity: 1.0,
		attribution: 'Latihan Web GIS'
	});

	var GoogleRoads = new
	L.TileLayer('https://mt1.google.com/vt/lyrs=h&x={x}&y={y}&z={z}', {
		opacity: 1.0,
		attribution: 'Latihan Web GIS'
	});

	var baseLayers = {
		'Google Satellite Hybrid': GoogleSatelliteHybrid,
		'Esri_NatGeoWorldMap': Esri_NatGeoWorldMap,
		'GoogleMaps': GoogleMaps,
		'GoogleRoads': GoogleRoads
	};

	var groupedOverlays = {
		"Peta Dasar": {
			'Ibu Kota Provinsi': prov,
			"Jaringan Sungai": sungai,
			"Provinsi": provin
		},
		"Peta Khusus": {
			"Kuliner": kuliner 
		}
	};

	L.control.groupedLayers(baseLayers, groupedOverlays).addTo(map);



	var osmUrl = 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}';
	var osmAttrib = 'Map data &copy; OpenStreetMap contributors';
	var osm2 = new L.TileLayer(osmUrl, {
		minZoom: 0,
		maxZoom: 13,
		attribution: osmAttrib
	});
	var rect1 = {
		color: "#ff1100",
		weight: 3
	};
	var rect2 = {
		color: "#0000AA",
		weight: 1,
		opacity: 0,
		fillOpacity: 0
	};
	var miniMap = new L.Control.MiniMap(osm2, {
		toggleDisplay: true,
		position: "bottomright",
		aimingRectOptions: rect1,
		shadowRectOptions: rect2
	}).addTo(map);

	L.Control.geocoder({
		position: "topleft",
		collapsed: true
	}).addTo(map);

	/* GPS enabled geolocation control set to follow the user's location */
	var locateControl = L.control.locate({
		position: "topleft",
		drawCircle: true,
		follow: true,
		setView: true,
		keepCurrentZoomLevel: true,
		markerStyle: {
			weight: 1,
			opacity: 0.8,
			fillOpacity: 0.8
		},
		circleStyle: {
			weight: 1,
			clickable: false
		},
		icon: "fa fa-location-arrow",
		metric: false,
		strings: {
			title: "My location",
			popup: "You are within {distance} {unit} from this point",
			outsideMapBoundsMsg: "You seem located outside the boundaries of the map"
		},
		locateOptions: {
			maxZoom: 18,
			watch: true,
			enableHighAccuracy: true,
			maximumAge: 10000,
			timeout: 10000
		}
	}).addTo(map);

	var zoom_bar = new L.Control.ZoomBar({
		position: 'topleft'
	}).addTo(map);

	L.control.coordinates({
		position: "bottomleft",
		decimals: 2,
		decimalSeperator: ",",
		labelTemplateLat: "Latitude: {y}",
		labelTemplateLng: "Longitude: {x}"
	}).addTo(map);

	/* scala */
	L.control.scale({
		metric: true,
		position: "bottomleft"
	}).addTo(map);

	var north = L.control({
		position: "bottomleft"
	});
	north.onAdd = function(map) {
		var div = L.DomUtil.create("div", "info legend");
		div.innerHTML = '<img src="<?= base_url() ?>assets/mata-angin.png"style=width:200px;>';
		return div;
	}
	north.addTo(map);

	$.getJSON("<?= base_url() ?>assets/provinsi.geojson", function(data) {
		var ratIcon = L.icon({
			iconUrl: '<?= base_url() ?>assets/marker-1.png',
			iconSize: [12, 15]
		});
		L.geoJson(data, {
			pointToLayer: function(feature, latlng) {
				var marker = L.marker(latlng, {
					icon: ratIcon
				});
				marker.bindPopup(feature.properties.CITY_NAME);
				return marker;
			}
		}).addTo(prov);
	});

	

	$.getJSON("<?= base_url() ?>/assets/sungai.geojson", function(kode) {
		L.geoJson(kode, {
			style: function(feature) {
				var color, kode = feature.properties.kode;
				if (kode < 2) color = "#f2051d";
				else if (kode > 0) color = "#f2051d";
				else color = "#f2051d"; // no data
				return {
					color: "#999",
					weight: 5,
					color: color,
					fillOpacity: .8
				};
			},
			onEachFeature: function(feature, layer) {
				layer.bindPopup()
			}
		}).addTo(sungai);
	});

	$.getJSON("<?= base_url() ?>/assets/provinsi_poligon.geojson", function(kode) {
		L.geoJson(kode, {
			style: function(feature) {
				var fillColor, kode = feature.properties.kode;
				if (kode > 21) fillColor = "#006837";
				else if (kode > 20) fillColor = "#fec44f"
				else if (kode > 19) fillColor = "#c2e699"
				else if (kode > 18) fillColor = "#fee0d2"
				else if (kode > 17) fillColor = "#756bb1"
				else if (kode > 16) fillColor = "#8c510a"
				else if (kode > 15) fillColor = "#01665e"
				else if (kode > 14) fillColor = "#e41a1c"
				else if (kode > 13) fillColor = "#636363"
				else if (kode > 12) fillColor = "#762a83"
				else if (kode > 11) fillColor = "#1b7837"
				else if (kode > 10) fillColor = "#d53e4f"
				else if (kode > 9) fillColor = "#67001f"
				else if (kode > 8) fillColor = "#c994c7"
				else if (kode > 7) fillColor = "#fdbb84"
				else if (kode > 6) fillColor = "#dd1c77"
				else if (kode > 5) fillColor = "#3182bd"
				else if (kode > 4) fillColor = "#f03b20"
				else if (kode > 3) fillColor = "#31a354";
				else if (kode > 2) fillColor = "#78c679";
				else if (kode > 1) fillColor = "#c2e699";
				else if (kode > 0) fillColor = "#ffffcc";
				else fillColor = "#f7f7f7"; // no data
				return {
					color: "#999",
					weight: 1,
					fillColor: fillColor,
					fillOpacity: .6
				};
			},
			onEachFeature: function(feature, layer) {
				layer.bindPopup(feature.properties.PROV)
			}
		}).addTo(provin);
	});

	$.getJSON("<?= base_url() ?>assets/kuliner_amb.geojson", function(data) {
		var ratIcon = L.icon({
			iconUrl: '<?= base_url() ?>assets/marker-kuliner.png',
			iconSize: [25, 30]
		});
		L.geoJson(data, {
			pointToLayer: function(feature, latlng) {
				var marker = L.marker(latlng, {
					icon: ratIcon
				});
				let popupinfo = `
					<p style="margin-bottom:0;margin-top:0;">Nama : ${feature.properties.NAMA}</p>
					<p style="margin-bottom:0;margin-top:0;">Jenis : ${feature.properties.jenis_jualan} </p>
					<p style="margin-bottom:0;margin-top:0;">Harga : Rp. ${feature.properties.harga} </p>
					`
				marker.bindPopup(popupinfo);
				return marker;
			}
		}).addTo(kuliner);
	});

	const legend = L.control.Legend({
			position: "bottomright",
			title: "Keterangan",
			collapsed: true,
			symbolWidth: 24,
			opacity: 1,
			column: 1,
			legends: [{
				label: "Ibu Kota Provinsi",
				type: "image",
				url: "<?= base_url() ?>/assets/marker-1.png",
			}, {
				label: "Jaringan Sungai",
				type: "polyline",
				color: "#f2051d",
				fillColor: "#f2051d",
				weight: 2
			}, {

				title: "Jaringan Sungai"

			}, {
				label: "Polygon Provinsi",
				font: 29,
				type: "polygon",
				sides: 4,
				color: "#FF0000",
				fillColor: "#FF0000",
				weight: 2
			}]
		})
		.addTo(map);
</script>	
</body>
</html>


