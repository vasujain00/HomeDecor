<?php 
require("phpsqlajax_dbinfo.php");
 $connection=mysql_connect ('localhost','root','anurag');
if (!$connection) {  die('Not connected : ' . mysql_error());}

// Set the active MySQL database

$db_selected = mysql_select_db('homedecor', $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

 $query= "SELECT a.Prod_ID , p.Pname ,count(c.Cust_ID) from product p , cart c ,(SELECT Prod_ID from cart group by (Prod_ID) order by count(Prod_ID) DESC limit 5) a where p.Prod_ID = c.Prod_ID AND c.Cust_ID= p.Cust_ID group by (c.Prod_ID)
";

 $result = mysql_query($query);


if (!$result) {
  die('Invalid query: ' . mysql_error());
}

  $jsonArray = array();

while ($row = @mysql_fetch_assoc($result)){
  
        $jsonArrayItem = array();
        $jsonArrayItem['label'] = $row['Pname'];
        $jsonArrayItem['value'] = $row['count(c.Cust_ID)'];
        //append the above created object into the main array.
        array_push($jsonArray, $jsonArrayItem);
      }
    
header('Content-type: application/json');
    //output the return value of json encode using the echo function. 
    echo json_encode($jsonArray);

?>
