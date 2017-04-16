<?php

session_start();
if(isset($_SESSION['selleremail'])){
	$email=$_SESSION['selleremail'];
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
   <title>Home Decor | Seller Page</title>
 
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


<div class="fluid-container">
	<div class="row">
		<div class="col-md-2">
			<ul>
				<li><button class="btn btn-primary my_button" type="button">add items</button></li>
				<li><button class="btn btn-primary my_button" type="button">review sales</button></li>
				<li><button class="btn btn-primary my_button" type="button">view products</button></li>
				<li><button class="btn btn-primary my_button" type="button">graphs</button></li>
			</ul>
			<!--ul>
				<li><a class="btn btn-primary" href="seller_add.php" target="_blank" title="add items">Add Items</a></li>
				<li><a class="btn btn-primary" href="" target="_blank" title="review the product sales">Review sales</a></li>
				<li><a class="btn btn-primary" href="" target="_blank" title="view all products">View Products</a></li>
				<li><a class="btn btn-primary" href="" target="_blank" title="staticstical analysis">Graphs</a></li>

			</ul-->
		</div>
		<div class="col-md-9">
			<div class="btn-output">

			</div>
		</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.my_button').click(function() {
            var process=$(this).html();
            if(process.includes("add items")){
            	$('.btn-output').load('seller_add.php');
            }
            else if( process.includes("sales")){
            	alert('reviewing sales');
            }
            else if(process.includes("view products")){
            	$('.btn-output').load('showproducts.php');
            }
            else if(process.includes("graphs")){
            	alert('show graphs');
            }
        });
    });
</script>
 </body>

