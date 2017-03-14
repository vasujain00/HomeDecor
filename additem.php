<?php
include_once ('inc/connect.php');
if(isset($_POST['btn-upload']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$songname = $_POST["name"];
	$artistname = $_POST["artist"];
	$folder="products/";
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
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO product(pname,price,description,color,quantity,discount,material,conditions,image) VALUES('$PName','$Price','$Description','$Color', '$Quantity','$Discount','$Material','$Condition','$final_file')";
		mysqli_query($link,$sql);
       
		?>
		<script>
		alert('successfully uploaded');
        
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
       
        </script>
		<?php
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
</head>
<body>
	

	
</body>
</html>