<?php
$servername = "localhost";
$username = "root";
$password = "anurag";
$dbname = "homedecor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql  ="INSERT INTO seller (Sell_ID,Cat_name,Description,Image) VALUES ('158','Ariel','Bryant','Ari.BRYANT9023@live.com','KviRufZr0w');";
$sql = "INSERT INTO category (Cat_ID,Cat_name,Description,Image) VALUES ('1','Bedroom Furniture','Rosario','1');";
$sql .="INSERT INTO category (Cat_ID,Cat_name,Description,Image) VALUES ('2','Livingroom Furniture','Thompson','2');";
$sql .="INSERT INTO category (Cat_ID,Cat_name,Description,Image) VALUES ('3','Outdoor Furniture','Parrish','3');";
$sql .="INSERT INTO category (Cat_ID,Cat_name,Description,Image) VALUES ('4','Kitchen Furniture','Norton','4');";
$sql .="INSERT INTO category (Cat_ID,Cat_name,Description,Image) VALUES ('5','Hall Furniture','Higgins','5');";
$sql .="INSERT INTO category (Cat_ID,Cat_name,Description,Image) VALUES ('6','Gameroom Furniture','Roth','6');";
$sql .="INSERT INTO category (Cat_ID,Cat_name,Description,Image) VALUES ('7','Kids Room Furniture','Whitley','7');";
$sql .="INSERT INTO category (Cat_ID,Cat_name,Description,Image) VALUES ('8','Bathroom Furniture','Ayala','8');";
$sql .="INSERT INTO category (Cat_ID,Cat_name,Description,Image) VALUES ('9','Office Furniture','Mack','9');";
$sql .="INSERT INTO category (Cat_ID,Cat_name,Description,Image) VALUES ('10','Bar Furniture','Morin','10');";
$sql .="INSERT INTO category (Cat_ID,Cat_name,Description,Image) VALUES ('11','Accent Furniture','Nash','11');";


//$sql .="INSERT INTO seller (Sell_ID,Cat_name,Description,Image) VALUES ('16','Raiden','Poole','Raide.POOLE9165@mail2web.com','rG5QnCVaE0')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>