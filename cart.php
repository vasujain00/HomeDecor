<?php
include ('inc/connect.php'); 
include ('inc/products.php'); 
 session_start();
if(isset($_GET['error'])){
	$er=$_GET['error'];
}
else{
	$er=0;
}
 if(isset($_SESSION['customeremail'])){
 	$user="customer";
  $email=$_SESSION['customeremail'];
 }
 else if(isset($_SESSION['selleremail'])){
 	$user="seller";
  $email=$_SESSION['selleremail'];
 }


 ?>

<!doctype html>
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
   <style>
.slide-img{
   width: 100%;
  height: 470px;
}
.slider {
  position: relative;
  width: 100%;
  height: 470px;
  border-bottom: 1px solid #ddd;
}
.slide {
  background: transparent  center center no-repeat;
  background-size: cover;
  display: none;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.active-slide {
    display: block;
}
.slider-nav {
  text-align: center;
  margin-top: 20px;
}

.arrow-prev {
  margin-right: 45px;
  display: inline-block;
  vertical-align: top;
  margin-top: 9px;
}

.arrow-next {
  margin-left: 45px;
  display: inline-block;
  vertical-align: top;
  margin-top: 9px;
}

.slider-dots {
  list-style: none;
  display: inline-block;
  padding-left: 0;
  margin-bottom: 0;
}

.slider-dots li {
  color: #bbbcbc;
  display: inline;
  font-size: 30px;
  margin-right: 5px;
}

.slider-dots li.active-dot {
  color: #363636;
}
.navimg{
	position: absolute;
	margin-top: 180px;
	z-index: 1;
	
}
#left{
float: left;
}
#right{
	right: 0;
	float:right;
}
div.hscroll{
  overflow:auto;
}
.img_size{
	width:200px;
	height:200px; 
}
</style>
</head>
<body>
<!-- Modal: Login form -->
    <div class="modal fade" id="clogin-form" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center">Customer Login </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form class="col-md-12" action="clogin.php" method="POST">
                            <p>Welcome</p>
                            <br>
                            <div class="input-field">
                                
                                <input id="username" type="text" name="email" class="validate" placeholder="user-email">
                                
                            </div>
                            
                            <div class="input-field">
                                
                                <input id="password" type="password" name="password" class="validate" placeholder="password">
                                
                            </div>
                            
                        
                        <div class="text-center">
                            <button type="submit" id="loginbuttn" class="btn btn-primary waves-effect waves-light" onclick="login_fun()">Login</button>
                        </div>
                        </form>
                        <hr>
                        <div class="col-md-12">
                            <div class="call">
                                <p>LogIn With <span class="cf-phone"><i class="fa fa-phone"> </i></span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">X</button>
                </div>
            </div>

        </div>
    </div>
    <!--/.Modal: Contact form-->



    <!-- Modal: Login form -->
    <div class="modal fade" id="slogin-form" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center">Seller Login </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form class="col-md-12" action="slogin.php" method="POST">
                            <p>Welcome</p>
                            <br>
                            <div class="input-field">
                                
                                <input id="username" type="text" name="email" class="validate" placeholder="user-email">
                                
                            </div>
                            
                            <div class="input-field">
                                
                                <input id="password" type="password" name="password" class="validate" placeholder="password">
                                
                            </div>
                            
                        
                        <div class="text-center">
                            <button type="submit" id="loginbuttn" class="btn btn-primary waves-effect waves-light" onclick="login_fun()">Login</button>
                        </div>
                        </form>
                        <hr>
                        <div class="col-md-12">
                            <div class="call">
                                <p>LogIn With <span class="cf-phone"><i class="fa fa-phone"> </i></span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">X</button>
                </div>
            </div>

        </div>
    </div>
    <!--/.Modal: Contact form-->


<div  class="heading">
<h1><span>HOME </span>DECOR</h1>
</div>
<div id='dropdown'>
<ul>
   <li class='active'><a href='home1.php'><span>Home</span></a></li>
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



<div class="container" style="box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">

<div class="row"  style="margin-top:-1%;">
    <div class="col-md-10 col-md-offset-1">
        <?php 
         $db=new Database();
       $db->dbConnect();
        $link=$db->getConn();
        $query=  mysql_query("SELECT * FROM cart WHERE Cust_ID=2") or die(mysql_error());
        $num=  mysql_num_rows($query);
        if($num>0){
        ?>
         <table class="table table-striped table-bordered">
            <caption><h3 class="text-info" style="text-align:center">Dear Vasu, You Selected Following Services</h3></caption>
            <thead>
                <tr class="info ">
                <th>Sr. No.</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Delete from cart</th>
                </tr>
            </thead>
            <tbody>

                   <?php 
                $i=1;
                while ($row = mysql_fetch_array($query)) {
                        $ProductId=$row['Prod_ID'];
                        $query1=  mysql_query("SELECT * FROM product WHERE Prod_ID='$ProductId'") or die(mysql_error());
                        $row1=  mysql_fetch_array($query1);
                        $ProName=$row1['Pname'];
                        $ProImg=$row1['Image'];
                        $ProCost=$row1['Price'];
                        ?>
                        <tr>
                <td><?php echo $i++;?></td>
                <td><img src="products/<?php echo $ProImg;?>" class="img-responsive img-thumbnail" width="100px" height="50px"></td>
                <td><?php echo $ProName?></td>
                <td><?php echo $ProCost?></td>
                <td>
                 <a href="remove.php?cstm=<?php echo $CustomerId;?>&& prod=<?php echo $ProductId;?>" class="btn btn-info btn-md" role="button">
                     Remove
                    </a>
                </td>
                </tr>
                <?php
                }                   
                ?>
            </tbody>
        </table>
            <?php 
        $i=$i-1;
       $_SESSION['cart'] = $i ;
       
    
        // echo $_SESSION['cart'];
         ?>
        </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 ">
            <a href="order.php" title="You Have To Order Atleast Two Services" class="btn btn-info btn-md btn-block" role="button" style="font-size:20px;">
            Order The All Above Services ->>
            </a>
        </div>
    </div>
        <?php }  else {
                ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 alert alert-info "><center><a class="alert-link" href="customer.php">Opp's ! Your Cart is Empty . Add Service </a></center></div>
    </div>
    <?php
            }?>
</div>
       




































     
<div>
<footer id="footer">
    <div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright. All rights reserved.</p>
				</div>
			</div>
    </div>
</footer>
</div>


<script type="text/javascript">
              var main=function(){
          /* IMAGE SLIDER */
            $('.arrow-next').click(function(){
              var currentSlide=$('.active-slide');
              var nextSlide=currentSlide.next();

             
              

              if(nextSlide.length === 0){
                nextSlide=$('.slide').first();
                
              }

              currentSlide.fadeOut(600).removeClass('active-slide');
              nextSlide.fadeIn(600).addClass('active-slide');

              //currentDot.removeClass('active-dot');
              //nextDot.addClass('active-dot');
            });

            $('.arrow-prev').click(function(){
              var currentSlide =$('.active-slide');
              var prevSlide=currentSlide.prev();

              

              if(prevSlide.length === 0){
                prevSlide=$('.slide').last();
              
              }

              currentSlide.fadeOut(600).removeClass('active-slide');
              prevSlide.fadeIn(600).addClass('active-slide');

            }); 
          }
          $(document).ready(main);

          </script>
</body>
<html>