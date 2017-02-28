 <?php 
include ('inc/connect.php');

     $fetch = "SELECT Cat_name FROM Category";
     $result = mysqli_query($link,$fetch);
     if ($result->num_rows > 0) {
     	 while($row = $result->fetch_assoc()) {
     	
          echo  $row['Cat_name']."<br>";
}

     }


    ?>