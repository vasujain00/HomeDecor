<!DOCTYPE html>
<?php 
include_once ('inc/connect.php');

class Product{

  public function show_product(){
    $db=new Database();
    $db->dbConnect();
    $link=$db->getConn();
    $query=  mysql_query("SELECT * FROM product") or die(mysql_error());
    $num=  mysql_num_rows($query);
     if($num>0){
      $i=0;
        //print_r(mysql_result($query,0));

      while($i<$num)
      {
           $name=mysql_result($query,$i,"pname");
            $price=mysql_result($query,$i,"price");
            $description=mysql_result($query,$i,"Descri");
            $discount=mysql_result($query,$i,"Discount");
            $i=$i+1;
            echo "

              <a class=\"row\" href=\"#\">
              <div class=\"col-sm-3\" style=\"background-color:lavender;\">".$name."</div>
              <div class=\"col-sm-3\" style=\"background-color:lavenderblush;\">".$description."</div>
              <div class=\"col-sm-3\" style=\"background-color:lavender;\">".$price."</div>
              <div class=\"col-sm-3\" style=\"background-color:lavenderblush;\">".$discount."</div></a>
            ";

      }
    }
  }
}

?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0,user-scalable=no">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/first.css">
	<title>Home Decor</title>
</head>
<body>
<div id="myNav" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

          <div class="overlay-content">
            <a class="arkhip" href="index.php">HomeDecor</a>
            <a href="Seller_Add.html">Add Sellers</a>
            <a href="showproducts.php">Show Products</a>
            <a href="additem.php">Add Items</a>
            <a href="#">Fetch Category</a>
          </div>
    </div>
    <nav class="nav navbar navbar-fixed-top">
        <font color="red"><span style="font-size:30px;cursor:pointer;margin-left:20px;" onclick="openNav()">&#9776;</span></font>  
    </nav>
        <script>
        function openNav() {
            document.getElementById("myNav").style.height = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.height = "0%";
        }

        
        </script>
<div class="container-fluid">
  <div class="bgvid">
                <video muted class="video-fluid" autoplay loop>
                    <source src="#" type="video/mp4" />
                    <source src="#" type="video/webm">
                </video>       
      </div>
</div>
<div class="container">
<div class="row">
    <div class="col-sm-3" style="background-color:lavender;">Name</div>
    <div class="col-sm-3" style="background-color:lavenderblush;">Description</div>
    <div class="col-sm-3" style="background-color:lavender;">Price</div>
    <div class="col-sm-3" style="background-color:lavenderblush;">Discount</div><hr>
</div>

  
<?php
  $pr=new Product();
  $pr->show_product();

?>
  

</div>
</body>
</html>
=======
include ('inc/connect.php');

$query=  mysqli_query($link,"SELECT * FROM product") or die(mysqli_error($link));
$num=  mysqli_num_rows($query);


 if($num>0){
 
        while ($row = mysqli_fetch_array($query)) {

            $ProName=$row['Pname'];
             echo $ProName;
        } 
      }


        ?>
      




    
>>>>>>> d56807c05fa18ecb11cd6f876a8af3abb7403725
