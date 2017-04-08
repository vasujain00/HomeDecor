<?php
require_once('inc/connect.php');
session_start();
		if(isset($_POST['email']) && isset($_POST['password'])){
			$db=new Database();
			$db->dbConnect();
			$email=mysql_real_escape_string($_POST['email']);
			$password=mysql_real_escape_string($_POST['password']);
			$query="SELECT `Email`,`Password` FROM `customer` WHERE `Email`=\"".$email."\" AND `Password`=\"".$password."\"";
			$result=mysql_query($query);
			$num=mysql_num_rows($result);
			if($num==1){
				$_SESSION['customeremail']=$email;
				header('Location:index.php?error=0');
			}
			else{
				header('Location:index.php?error=1');
			}
		}

?>