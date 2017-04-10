<?php
session_start();
if(isset($_POST['submit'])){


        $Address= urlencode($_POST['address']);
           $State=$_POST['state'];
        $url = "http://maps.google.com/maps/api/geocode/json?address=$Address&city=&sensor=false&region=$State";
            $response = file_get_contents($url);
            $response = json_decode($response, true);
             $lat = $response['results'][0]['geometry']['location']['lat'];
            $long = $response['results'][0]['geometry']['location']['lng'];

             $olati = substr($lat,0,2);
             $olongi = substr($long,0,2);
       $_SESSION["srla"] = $olati;

     }
     ?>




<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
  <link rel="stylesheet" href="map.css">
  <link rel="stylesheet" href="styles.css">
    <title>Imagine World | Search</title>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeDd20xoroHw_XdTvSG2hAahsn8-s7bY4&callback=myMap"></script>
  <script>
// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.

function initialize() {

  var markers = [];
  var map = new google.maps.Map(document.getElementById('map-canvas'), {
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var defaultBounds = new google.maps.LatLngBounds(
      new google.maps.LatLng(29.6516,82.3248),
      new google.maps.LatLng(-33.8474, 151.2631));
  map.fitBounds(defaultBounds);

  // Create the search box and link it to the UI element.
  var input = /** @type {HTMLInputElement} */(
      document.getElementById('pac-input'));
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  var searchBox = new google.maps.places.SearchBox(
    /** @type {HTMLInputElement} */(input));

  // [START region_getplaces]
  // Listen for the event fired when the user selects an item from the
  // pick list. Retrieve the matching places for that item.
  google.maps.event.addListener(searchBox, 'places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }
    for (var i = 0, marker; marker = markers[i]; i++) {
      marker.setMap(null);
    }

    // For each place, get the icon, place name, and location.
    markers = [];
    var bounds = new google.maps.LatLngBounds();
    for (var i = 0, place; place = places[i]; i++) {
      var image = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      var marker = new google.maps.Marker({
        map: map,
        icon: image,
        title: place.name,
        position: place.geometry.location
      });

      markers.push(marker);

      bounds.extend(place.geometry.location);
    }

    map.fitBounds(bounds);
  });
  // [END region_getplaces]

  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
   <div  class="heading">
<h1><span>HOME </span>DECOR</h1>
</div>
<div id='dropdown'>
<ul>
   <li class='active'><a href='home1.php'><span>Home</span></a></li>
   <li class='has-sub'><a href='servicedetail.html'><span>Furniture</span></a>
      <ul class="sub-menu">
         <li><a href='servicedetail.html'><span>BED ROOM FURNITURE</span></a></li>
     <li><a href='servicedetail.html'><span>LIVING ROOM FURNITURE</span></a></li>
     <li><a href='servicedetail.html'><span>OUT DOOR FURNITURE</span></a></li>
     <li><a href='servicedetail.html'><span>KITCHEN FURNITURE</span></a></li>
     <li><a href='servicedetail.html'><span>HALL & ENTRY FURNITURE</span></a></li>
     <li><a href='servicedetail.html'><span>KIDS FURNITURE</span></a></li>
     <li><a href='servicedetail.html'><span>GAME ROOM FURNITURE</span></a></li>
     <li><a href='servicedetail.html'><span>BAR FURNITURE</span></a></li>
     <li><a href='servicedetail.html'><span>BATHROOM FURNITURE</span></a></li>
     <li><a href='servicedetail.html'><span>OFFICE FURNITURE</span></a></li>
     <li><a href='servicedetail.html'><span>ACCENT FURNITURE</span></a></li>
      </ul>
   </li>
   <li class='active'><a href='aboutus.html'><span>About US</span></a></li>
   <li class='has-sub'><a href='#'><span>SIGNUP</span></a>
      <ul class="sub-menu">
         <li><a href='cussignup.php'><span>CUSTOMER SIGNUP</span></a></li>
     <li class="last"><a href='sellsignup.php'><span>SELLER SIGNUP</span></a></li>
     </ul>
     </li>
    <li class='has-sub'><a href='#'><span>LOGIN</span></a>
      <ul class="sub-menu">
         <li><a href='clogin.php'><span>CUSTOMER LOGIN</span></a></li>
     <li><a href='slogin.php'><span>SELLER LOGIN</span></a></li>
     <li class='last'><a href='adminlogin.php'><span>ADMIN LOGIN</span></a></li>
     </ul>
     </li>
    

   <li class='active'><a href='map.html'><span>Show furniture near me</span></a></li>   
   <li class='last'><a href='contact.html'><span>Contact</span></a></li>
   <li class="has-sub right"><a href="" title=""><?php if(isset($email)){ echo $email; }else{ echo "WELCOME";} ?></a>
      <?php if(isset($email)){
              echo "<ul class=\"sub-menu\">
                <li><a href=\"logout.php\">logout</a>
              </ul>";
            }
      ?>
   </li>
</ul>
</div>
    <input id="pac-input" class="controls" type="text" placeholder="Search Box">
    <div id="map-canvas"></div>
  </body>
</html>