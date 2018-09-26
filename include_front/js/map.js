jQuery(function($){
 
	var longitude = -7.4251926;
	var latitude = 109.2484801;
	var canvas = "map";

	
	function randing_map(canvas, lan, lat){			
			var myLatlng = new google.maps.LatLng(lan,lat);
			var myOptions = {
						zoom: 18,
						center: myLatlng,
						mapTypeId: google.maps.MapTypeId.ROADMAP,
						maxZoom   : 20,
    					disableDefaultUI: true
					}			
			var map = new google.maps.Map( document.getElementById(canvas), myOptions );
			var marker = new google.maps.Marker({
			    position : myLatlng,
			    map      : map,
			    icon     : "../../include_front/img/point.png"
			});
			var styles = [
			  {
			    featureType: "all",
			    stylers: [
			      { saturation: -80 }
			    ]
			  },{
			    featureType: "road.arterial",
			    elementType: "geometry",
			    stylers: [
			      { hue: "#00ffee" },
			      { saturation: 50 }
			    ]
			  },{
			    featureType: "poi.business",
			    elementType: "labels",
			    stylers: [
			      { visibility: "off" }
			    ]
			  }
			];	
			var infowindow = new google.maps.InfoWindow({
				content:"<div class='map_adresse'><img style='padding-bottom:10px' src='../../include_front/img/test.png' /><div class='map_address'><span class='address'>Alamat : </span>Jalan Brigjend. Katamso No 69 Purwokerto</div> <div class='map_tel'><span class='tel'>Telepon : </span>081328156789 | 081327109696</div><div class='map_tel'><span class='tel'>BBM : </span>5197BE75 | 216E2FF2</div></div>"
			});	
			
			map.setOptions({styles: styles});

			/* google.maps.event.addListener(marker, 'click', function() {
			  infowindow.open(map,marker);
			}); */
			infowindow.open(map,marker);
			
	}
	randing_map(canvas, longitude, latitude);

});