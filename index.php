<?php
include ('inc/products.php'); 
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

<!doctype html>
<html lang="en">
<head>
   <meta charset='utf-8'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="css/w3.css">
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
	height:300px; 
}
</style>
</head>
<body>
<div  class="heading">
<h1><span>HOME </span>DECOR</h1>
</div>
<div id='dropdown'>
<ul>
   <li class='active'><a href='home1.php'><span>Home</span></a></li>
   <li class='has-sub'><a href='servicedetail.html'><span>Furniture</span></a>
      <ul class="sub-menu">
         <li><a href='servicedetail.html'><span>BED ROOM FURNITURE</span></a></li>
		 <li><a href='servicedetail.html'><span>LIVING ROOM FURNITURE</span></a></li>
		 <li><a href='servicedetail.html'><span>OUT DOOR FURNITURE</span></a></li>
		 <li><a href='servicedetail.html'><span>KITCHEN FURNITURE</span></a></li>
		 <li><a href='servicedetail.html'><span>HALL & ENTRY FURNITURE</span></a></li>
		 <li><a href='servicedetail.html'><span>KIDS FURNITURE</span></a></li>
		 <li><a href='servicedetail.html'><span>GAME ROOM FURNITURE</span></a></li>
		 <li><a href='servicedetail.html'><span>BAR FURNITURE</span></a></li>
		 <li><a href='servicedetail.html'><span>BATHROOM FURNITURE</span></a></li>
		 <li><a href='servicedetail.html'><span>OFFICE FURNITURE</span></a></li>
		 <li><a href='servicedetail.html'><span>ACCENT FURNITURE</span></a></li>
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
         <li><a href='clogin.php'><span>CUSTOMER LOGIN</span></a></li>
		 <li><a href='slogin.php'><span>SELLER LOGIN</span></a></li>
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
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="slider">
 			<span class="navimg" id="left"><a  class="arrow-prev"><img src="image/sliders/slider-left.png"></a></span>
            <span class="navimg" id="right"><a class="arrow-next"><img src="image/sliders/slider-right.png"></a></span>

              <div class="slide active-slide">
                <div class="container-fluid">
                  <div class="row">
                    <img class="slide-img" src="image/sliders/img1.jpg" >
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="container-fluid">
                  <div class="row">
                     <img class="slide-img"src="image/sliders/img2.jpg" >
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="container-fluid">
                  <div class="row">
                     <img class="slide-img" src="image/sliders/img3.jpg" >
                  </div>
                </div>
              </div>

              <div class="slide">
                <div class="container-fluid">
                  <div class="row">
                     <img class="slide-img" src="image/sliders/img4.jpg" >
                  </div>
                </div>
              </div>

              <div class="slide">
                <div class="container-fluid">
                  <div class="row">
                     <img class="slide-img" src="image/sliders/img5.jpg" >
                  </div>
                </div>
              </div>
              
          </div>
			
		</div>
	</div>
    <div class="row">
      <div class="col-md-12 w3-card-4">
          <div class="container">
            <div class="row">

              <div class="col-md-2">
                <h2>Best Price</h2>
              </div>
              <div class="col-md-12 hscroll">
                <div class="w3-cell-row ">
                  <?php
                   $pd=new Product();
                   $pd->best_price();
                  ?>
                </div>
              </div>
            </div>

            <div class="row">

              <div class="col-md-2">
                <h2>All Products</h2>
              </div>
              <div class="col-md-12 hscroll">
                <div class="w3-cell-row ">
                  <?php
                  	$pd->show_product();
                  ?>
                </div>
              </div>
            </div>

          </div>

             
      </div> 
    </div>
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