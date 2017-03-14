 <?php 
include_once('inc/connect.php');

class Fetch{


public function fetch_cat(){
	$db=new Database();
	$db->dbConnect();

	$link=$db->getConn();

     $fetch = "SELECT DISTINCT Cat_name FROM Category";
     $result = mysql_query($fetch);
     if (mysql_num_rows($result) > 0) {
     	 while($row = mysql_fetch_assoc($result) ){
          	echo  "<span><li class=\"btn btn-primary\">".$row['Cat_name']."</li></span><br>";
			}
     }
}
}

    ?>