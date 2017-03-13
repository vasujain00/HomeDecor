<?php 
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
      




    