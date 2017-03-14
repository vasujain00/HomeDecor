<?php 
include_once('inc/connect.php');

class Brand{


public function fetch_brand(){
	$db=new Database();
	$db->dbConnect();

	$link=$db->getConn();

     $fetch = "SELECT DISTINCT Name FROM brand";
     $result = mysql_query($fetch);
     if (mysql_num_rows($result) > 0) {
     	 while($row = mysql_fetch_assoc($result) ){
     	
          	echo  "<span><li class=\"btn btn-primary btn-custm\">".$row['Name']."</li></span><br>";
			}
     }
}
}

$brd=new Brand();
$brd->fetch_brand();

    ?>