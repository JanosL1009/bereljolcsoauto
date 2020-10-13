@extends('layouts.app')

@section('head-seo')
    <title>Bérelj olcsón autót - kapcsolat</title>
    <meta name="description" content="Olcsó autóbérlés, autókölcsönzés Budapesten! Bérelhető autóink között találhat Mercedest, Fordot, Opelt, Peugeot, Suzukit és sok más márkát, valamint kategóriát!"/>
    <meta name="keywords" content="autóbérlés budapest,autókölcsönzés,autókölcsönzés Budapeset,bérautó,bérautó Budapest"/>

    <meta name="author" content="Berelj olcsó Autót 2020">
    <meta name="robots" content="index,follow" />
    <link rel="canonical" href=”https://www.bereljolcsoautot.hu/” />
    <meta name="og:site_name" content="www.bereljolcsoautot.hu"/>
    <meta name="og:type" content="Autóbérlés, bérautó, olcsó autókölcsönzés Budapest"/>

    <style>
        hr{
            color: #fff; background-color: #fff;
        }
        .ar{
            font-size: 24px;
    font-weight: 700;
    margin-bottom: 10px;
    color: black;
        }
        .berauto{width: inherit;} ul {color:#000;}
        .card-xtra{width: 98% !important;}
    </style>

@endsection

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div id="contact-map" style="width:100%;height: 300px; "></div>
    </div>
</div>

@endsection

@section('ga-map')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSUAatxHhsYFT3zwUBS4xXxiz0LevotgQ&v=3.exp"></script>

<script type="text/javascript">
var geocoder = new google.maps.Geocoder();
var address = "1116 Budapest, Fehérvári út 108-112"; //Add your address here, all on one line.
var latitude;
var longitude;
var color = "#ffffff"; //Set your tint color. Needs to be a hex value.

function getGeocode() {
	geocoder.geocode( { 'address': address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			latitude = results[0].geometry.location.lat();
			longitude = results[0].geometry.location.lng();
			initGoogleMap();
		}
	});
}

function initGoogleMap() {
	var styles = [
	{
		stylers: [
		{ saturation: -100 }
		]
	}
	];

	var options = {
		mapTypeControlOptions: {
			mapTypeIds: ['Styled']
		},
		center: new google.maps.LatLng(latitude, longitude),
		zoom: 13,
		scrollwheel: true,
		navigationControl: true,
		mapTypeControl: false,
		zoomControl: true,
		disableDefaultUI: true,
		mapTypeId: 'Styled'
	};
	var div = document.getElementById('contact-map');
	var map = new google.maps.Map(div, options);
	marker = new google.maps.Marker({
		map:map,
		draggable:false,
		animation: google.maps.Animation.DROP,
		position: new google.maps.LatLng(latitude,longitude)
	});
	var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
	map.mapTypes.set('Styled', styledMapType);

	var infowindow = new google.maps.InfoWindow({
		content: "<div class='iwContent'>"+address+"</div>"
	});
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map,marker);
	});


	bounds = new google.maps.LatLngBounds(
		new google.maps.LatLng(-84.999999, -179.999999),
		new google.maps.LatLng(84.999999, 179.999999));

	rect = new google.maps.Rectangle({
		bounds: bounds,
		fillColor: color,
		fillOpacity: 0.2,
		strokeWeight: 0,
		map: map
	});
}
google.maps.event.addDomListener(window, 'load', getGeocode);
</script>
@endsection
