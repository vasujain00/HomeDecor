<?php 
	require('inc/connect.php');
  if(isset($_GET['searchtxt'])){ 
			$db=new Database();
			$db->dbConnect();
	  		$name=$_GET['searchtxt'];
	  		$query=mysql_query("SELECT ID,Image from product WHERE Pname LIKE '%".$name."%' OR Descri LIKE '%".$name."%'");
	  		$num=mysql_num_rows($query);
	  		
	 } 
	 else{ 
	  echo  "<p>Please enter a search query</p>"; 
	 } 
	
?> 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset='utf-8'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="styles.css">
    <link href="css/mdb.css" rel="stylesheet">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <title>Home Decor | search by</title>
</head>
<body>
<div  class="heading">
<h1><span>HOME </span>DECOR</h1>
</div>
<div id='dropdown'>
<ul>
   <li class='active'><a href='index.php'><span>Home</span></a></li>
   <li class='has-sub'><a href='servicedetail.html'><span>Furniture</span></a>
      <ul class="sub-menu">
         <li><a href='bed.php'><span>BED ROOM FURNITURE</span></a></li>
		 <li><a href='living.php'><span>LIVING ROOM FURNITURE</span></a></li>
		 <li><a href='outdoor.php'><span>OUT DOOR FURNITURE</span></a></li>
		 <li><a href='kitchen.php'><span>KITCHEN FURNITURE</span></a></li>
		 <li><a href='hall.php'><span>HALL & ENTRY FURNITURE</span></a></li>
		 <li><a href='kids.php'><span>KIDS FURNITURE</span></a></li>
		 <li><a href='game.php'><span>GAME ROOM FURNITURE</span></a></li>
		 <li><a href='bar.php'><span>BAR FURNITURE</span></a></li>
		 <li><a href='bathroom.php'><span>BATHROOM FURNITURE</span></a></li>
		 <li><a href='office.php'><span>OFFICE FURNITURE</span></a></li>
		 <li><a href='accent.php'><span>ACCENT FURNITURE</span></a></li>
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
         <li><a href="#" class="waves-effect waves-light" data-toggle="modal" data-target="#clogin-form"><span>CUSTOMER LOGIN</span></a></li>
         <li><a href="#" class="waves-effect waves-light" data-toggle="modal" data-target="#slogin-form"><span>seller LOGIN</span></a></li>
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
  <div class="container">
    <div class="row" style="padding:50px 10px 10px 10px;">
      	<?php
      		if($num>0){
	  			$i=0;
	  			while($i<$num){
	  				$pr_id=mysql_result($query, $i,"ID");
	  				$image=mysql_result($query, $i,"Image");
	  				//echo $pr_id." ".$image."<hr>";
	  				echo "<div class=\"col-md-4\" style=\"padding:10px 10px 10px 10px;\">
	                  <a href=\"show.php?id=".$pr_id."\"><img src=\"products/skull_clock.jpg\" class=\"img-thumbnail\" alt=\"Cinque Terre\" width=\"304\" height=\"236\"></a>     
	                </div>";
	  				$i=$i+1;
	  				
	  			}
	  		}
	  		else{
	  			echo "no data found";
	  		}
      	?>
    </div>    
  </div>
</body>
</html>