<?php 
	require('inc/connect.php');
  if(isset($_GET['searchtxt'])){ 
			$db=new Database();
			$db->dbConnect();
	  		$name=$_GET['searchtxt'];
	  		$query=mysql_query("SELECT ID,Image from product WHERE Pname LIKE '%".$name."%' OR Descri LIKE '%".$name."%'");
	  		$num=mysql_num_rows($query);
	  		if($num>0){
	  			$i=0;
	  			while($i<$num){
	  				$pr_id=mysql_result($query, $i,"ID");
	  				$image=mysql_result($query, $i,"Image");
	  				echo $pr_id." ".$image."<hr>";
	  				$i=$i+1;
	  				
	  			}
	  		}
	 } 
	 else{ 
	  echo  "<p>Please enter a search query</p>"; 
	 } 
	
?> 
<html>
<body>
<form
</body>
</html>