<?php
session_start();
/*if(isset($_POST['submit'])){


        $Address= urlencode($_POST['address']);
           $State=$_POST['state'];
        $url = "http://maps.google.com/maps/api/geocode/json?address=$Address&city=&sensor=false&region=$State";
            $response = file_get_contents($url);
            $response = json_decode($response, true);
             $lat = $response['results'][0]['geometry']['location']['lat'];
            $long = $response['results'][0]['geometry']['location']['lng'];

             $olati = substr($lat,0,2);
             $olongi = substr($long,0,2); */

            // echo $olati;
             //echo $olongi;
   $la = $_SESSION["srla"];
 



 require("phpsqlajax_dbinfo.php");
//require("simple.php"); 
//echo $olati;
// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Opens a connection to a MySQL server

$connection=mysql_connect ('localhost','root','anurag');
if (!$connection) {  die('Not connected : ' . mysql_error());}

// Set the active MySQL database

$db_selected = mysql_select_db('homedecor', $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Select all the rows in the markers table
$query = "SELECT * FROM seller WHERE lati like '$la%'";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = @mysql_fetch_assoc($result)){
  // ADD TO XML DOCUMENT NODE
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("lat", $row['lati']);
  $newnode->setAttribute("lng", $row['longi']);
  //$newnode->setAttribute("Dealer",$row['Sell_ID']);
}

echo $dom->saveXML();



 ?>
 

