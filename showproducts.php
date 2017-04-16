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
<body>
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

