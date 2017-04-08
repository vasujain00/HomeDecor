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
            $prod_id=mysql_result($query,$i,"Prod_ID");
            $brand_id=mysql_result($query,$i,"Brand_ID");
            $cart_id=mysql_result($query,$i,"Cart_ID");
            $color=mysql_result($query,$i,"Color");
            $name=mysql_result($query,$i,"pname");
            $price=mysql_result($query,$i,"price");
            $image=mysql_result($query, $i,"Image");
            $description=mysql_result($query,$i,"Descri");
            $discount=mysql_result($query,$i,"Discount");
            $i=$i+1;
            $image="products/".$image;
           echo "
            <div class=\"col-md-3\">
            <div class=\"card\">
                <img class=\"img-fluid\" src=\"".$image."\" alt=\"Card image cap\">
                <div class=\"card-block\">
                    <h4 class=\"card-title\">".$name."</h4>
                    <p class=\"card-text\">".$price."<br>".$description."</p>
                    <a href=\"#\" class=\"btn btn-primary\">Button</a>
                </div>
            </div>
            </div>";
      }
    }
  }

  public function best_price(){
    $db=new Database();
    $db->dbConnect();
    $query=mysql_query("SELECT * FROM `product` WHERE `Price`<=50") or die(mysql_error());
    $num=mysql_num_rows($query);
     if($num>0){
      $i=0;
        //print_r(mysql_result($query,0));

      while($i<$num)
      {
            $prod_id=mysql_result($query,$i,"Prod_ID");
            $brand_id=mysql_result($query,$i,"Brand_ID");
            $cart_id=mysql_result($query,$i,"Cart_ID");
            $color=mysql_result($query,$i,"Color");
            $name=mysql_result($query,$i,"pname");
            $price=mysql_result($query,$i,"price");
            $image=mysql_result($query, $i,"Image");
            $description=mysql_result($query,$i,"Descri");
            $discount=mysql_result($query,$i,"Discount");
            $i=$i+1;
            $image="products/".$image;
            
            echo "
            <div class=\"col-md-3\">
            <div class=\"card\">
                <img class=\"img-fluid\" src=\"".$image."\" alt=\"Card image cap\">
                <div class=\"card-block\">
                    <h4 class=\"card-title\">".$name."</h4>
                    <p class=\"card-text\">".$price."<br>".$description."</p>
                    <a href=\"#\" class=\"btn btn-primary\">Button</a>
                </div>
            </div>
            </div>";

      } //While closed
  }  //If closed
} //best_price() closed

}//class Product closed
?>