<?php 
include ('inc/connect.php');

$query=  mysql_query("SELECT * FROM product") or die(mysql_error());
$num=  mysql_num_rows($query);
 if($num>0){
 	$i=0;
 	while($i<$num)
 	{
 		$name=mysql_result($query,$i,"pname");
        $price=mysql_result($query,$i,"price");
        $description=mysql_result($query,$i,"description");
        $discount=mysql_result($query,$i,"dicount");
 	}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0,user-scalable=no">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Home Decor</title>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-sm-3" style="background-color:lavender;">.col-sm-4</div>
    <div class="col-sm-3" style="background-color:lavenderblush;"></div>
    <div class="col-sm-3" style="background-color:lavender;"></div>
  </div>
</div>



</body>
</html>