<?php 
include ('inc/connect.php');
include('fetch_category.php');
$msg='';
$msg_type='';
if(isset($_POST["submit"]))
	{
            $file = rand(1000,100000)."-".$_FILES['file']['name'];
            $file_loc = $_FILES['file']['tmp_name'];
            $folder="products/";
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
  
            $final_file=str_replace(' ','-',$new_file_name);
            $PName=$_POST["pname"];
            $Price=$_POST["price"];
            $Description=$_POST["desc"];
            $Color= $_POST["color"];
            //$Condition=mysql_real_escape_string($_POST["con"]);
            $Quantity=$_POST["quant"];
            $Discount=$_POST["disc"];
            $Material=$_POST["material"];
           //$Image=mysql_real_escape_string($_POST["contact"]);
            $Condition=$_POST["con"];



                  if(move_uploaded_file($file_loc,$folder.$final_file))
                  {

                      $insert=  mysqli_query($link,"INSERT INTO product(Pname,Price,Descri,Color,Quantity,Discount,Material,Condi,Image) VALUES('$PName','$Price','$Description','$Color','$Quantity','$Discount','$Material','$Condition','$final_file')") or die(mysqli_error($link));
                    if($insert){
                      ?>
                        <script>
                        alert('successfully uploaded');
                      
                       </script>
                       <?php
                    }
                    else {
                      ?>

                        <script>
                         alert('error while uploading file');
                      
                        </script>
                        <?php
                    }

                  }

           
                   
                
	}

?>

<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0,
user-scalable=no">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
    a:link{
      text-decoration: none;
    }
  </style>
</head>
<body>
        <a href="index.php" ><font color="red"><span style="font-size:30px;cursor:pointer;margin-left:20px;">&#9776;</span></font></a>  

<center>
<div class="container">

<div class="container">
  <h2>Add a Product</h2>
  <form class="form-horizontal" action="Seller_Add.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Product Name:</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" required name="pname" id="pname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Price:</label>
      <div class="col-sm-10">          
       <input type="number" class="form-control" required name="price" id="Price">
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Color:</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" required name="color" id="color">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Product Condition:</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" required name="con" id="con">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Product Description:</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" required name="desc" id="desc">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Product Material:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" required name="material" id="material">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Product Quantity:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" required name="quant" id="quant">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Category:</label>
      <div class="col-sm-10">
       <?php
       $db=new Database();
      $db->dbConnect();
       $fetch = "SELECT DISTINCT Cat_name FROM Category";
       $result = mysql_query($fetch);

         ?>
         <select id="select1">
          <?php while($data2 = mysql_fetch_array($result)){
              $displayData2 = $data2['Cat_name'];
          ?>
          <option value="<?php echo $displayData2;?>"><?php echo $displayData2;?></option>

          <?php }?>
        </select>
  </div>
</div>
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Discount:</label>
      <div class="col-sm-10">
       <input type="number" class="form-control" required name="disc" id="disc">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Image:</label>
      <div class="col-sm-10">
       <input type="file" name="file" />
      </div>
    </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</div>
</center>
</body>
</html>