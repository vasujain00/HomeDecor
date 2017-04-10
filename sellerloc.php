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
<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="css/w3.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <title>Home Decor | Home</title>
    <title>DEALER'S LOCATIONS</title>
    
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeDd20xoroHw_XdTvSG2hAahsn8-s7bY4&callback=load"></script>



 <script type="text/javascript">
    //<![CDATA[

    var customIcons = {
      restaurant: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png'
      },
      bar: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png'
      }
    };

    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(<?php echo $lat; ?>,<?php echo $long; ?>),
        zoom: 13,
        mapTypeId: 'roadmap'
      });
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      downloadUrl("phpsqlajax_genxml3.php", function(data) {
        var xml = data.responseText;
        console.log('data ', data);
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          //var type = markers[i].getAttribute("Dealer");
          //console.log(markers[i].getAttribute("lat"),markers[i].getAttribute("lng"));
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon
          });
          bindInfoWindow(marker, map, infoWindow);
        }
      });
    }

    function bindInfoWindow(marker, map, infoWindow) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}

    //]]>

  </script>
  <meta charset="utf-8">    
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0,
user-scalable=no">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
 <body onload="load()">
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
<div class="container" style="box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
<?php //include ('inc/cus-nav.php'); ?>
</div>
<center><form class="form-horizontal" action="sellerloc.php" method="POST" role="form">
                <div class="form-group">
                    <label for="name" class="col-md-2 control-label">Address : </label>
                    <div class="col-md-6">
                        <textarea type="text" required name="address" class="form-control" id="text"
                                  placeholder="Enter Your Address(Location+City)"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-2 control-label">State : </label>
                    <div class="col-md-6">
                        <input type="text" required name="state" class="form-control" id="text"
                                  placeholder="Enter Your State" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-md-6">
                        <button type="submit" name="submit" class="btn btn-info btn-md btn-block">Submit</button>
                    </div>
                </div>
         </form></center>

      
    <center><div id="map" style="width: 900px; height: 500px"></div></center>
  </body>
  </html>