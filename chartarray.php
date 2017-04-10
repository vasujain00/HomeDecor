<?php 
require("phpsqlajax_dbinfo.php");
 $connection=mysql_connect ('localhost','root','anurag');
if (!$connection) {  die('Not connected : ' . mysql_error());}

// Set the active MySQL database

$db_selected = mysql_select_db('homedecor', $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}


 $query= "SELECT Pname,Discount FROM ( SELECT * FROM product ORDER BY Discount DESC LIMIT 3 ) AS T ";

 $result = mysql_query($query);


if (!$result) {
  die('Invalid query: ' . mysql_error());
}

  $jsonArray = array();

while ($row = @mysql_fetch_assoc($result)){
  
        $jsonArrayItem = array();
        $jsonArrayItem['label'] = $row['Pname'];
        $jsonArrayItem['value'] = $row['Discount'];
        //append the above created object into the main array.
        array_push($jsonArray, $jsonArrayItem);
      }
    
header('Content-type: application/json');
    //output the return value of json encode using the echo function. 
    echo json_encode($jsonArray);

?>


