<?php
include ('inc/products.php'); 

if(isset($_GET['id'])){
  $product_id=$_GET['id'];
}
 session_start();

 if(isset($_SESSION['customeremail'])){
  $user="customer";
  $email=$_SESSION['customeremail'];
 }
 else if(isset($_SESSION['selleremail'])){
  $user="seller";
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
   <title>Home Decor | Home</title>
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
      <div class="col-md-3" >
        <img src="products/skull_clock.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"></a>
        <br>
        <ul class="row">
          <li class="col-md-6"><a class="btn btn-primary" href="">Add to cart</a> </li>
        <li class="col-md-6"><a class="btn btn-primary" href="">Buy Now</a>   </li>
        </ul>
      </div>

      <div class="col-md-9" style="position:relative;">
          <?php
            $product=new Product();
            $data=$product->get_product_details($product_id);
            if($data==0){
              echo "No data to show";
            }
            else{
              $prod_name=$data['name'];
              $prod_price=$data['price'];
              $prod_desc=$data['desc'];
              $prod_color=$data['color'];
              $prod_image=$data['imageloc'];
              $prod_discount=$data['discount'];
            }
          ?>
          <h3><?php echo $prod_name;?></h3>
          <h4><?php echo $prod_price;?></h4>
          <p><?php echo $prod_desc;?></p>
          <h5>Color <?php echo $prod_color;?></h5>



      </div>

    </div>    
  </div>
</body>
</html>