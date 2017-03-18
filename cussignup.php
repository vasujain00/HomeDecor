<?php
require_once('inc/connect.php');

if(isset($_SESSION['customeremail'])){
	header('Location:customer.php');
	exit();
}
else if(isset($_SESSION['selleremail'])){
	header('Location: seller.php');
	exit();
}
else{


		if(isset($_POST['fname']) && isset($_POST['lname'])&& isset($_POST['email'])&& isset($_POST['password'])){
			$db=new Database();
			$db->dbConnect();
			$fname=mysql_real_escape_string($_POST['fname']);
			$lname=mysql_real_escape_string($_POST['lname']);
			$email=mysql_real_escape_string($_POST['email']);
			$password=mysql_real_escape_string($_POST['password']);
			$query1="SELECT * FROM `customer` WHERE `Email`=\"".$email."\"";
			$res=mysql_query($query1);
			if($res==false){
				echo "user already exists";
				//exit();
			}
			else{
				$query="INSERT INTO `customer` (`Fname`,`Lname`,`Password`,`Email`) values(\"".$fname."\",\"".$lname."\",\"".$password."\",\"".$email."\")";
				echo $query;
				$result=mysql_query($query);
				$num=mysql_affected_rows();
				if($num==1){
					echo "user created";
					session_start();
					$_SESSION['customeremail']=$email;
					echo "session started";
						header('Location:customer.php');
						exit();
				}
				else{
					echo "Unable to new user. ".mysql_error();
				}
			}
			
		}
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<title>HomeDecor | SignUp</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row" style="margin-top:100px;">
			<div class="col-md-3"></div>
			<div class="col-md-6">
			<form class="form-horizontal" action="signup.php" method="POST">
				<div class="form-group">
					Fname:<br>
					<input class="form-control" type="text" name="fname" value="" placeholder="Vin">
				</div>
				<div class="form-group">
					Lname:<br>
					<input class="form-control" type="text" name="lname" value="" placeholder="Diesel">
				</div>
				<div class="form-group">
					Email:<br>
					<input class="form-control" type="text" name="email" value="" placeholder="abcd@pqr.xyz">
				</div>
				<div class="form-group">
					PassWord:<br>
					<input class="form-control" type="password" name="password" value="" ><br>
				</div>
				<div class="form-group">
					<input type="submit" name="Register" class="btn btn-default">
				</div>
			</form>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
	
</body>
</html>