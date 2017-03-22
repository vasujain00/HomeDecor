<?php
require_once('inc/connect.php');
session_start();
		if(isset($_POST['email']) && isset($_POST['password'])){
			$db=new Database();
			$db->dbConnect();
			$email=mysql_real_escape_string($_POST['email']);
			$password=mysql_real_escape_string($_POST['password']);
			$query="SELECT `Email`,`Passwd` FROM `seller` WHERE `Email`=\"".$email."\" AND `Password`=\"".$password."\"";
			$result=mysql_query($query);
			$num=mysql_num_rows($result);
			if($num==1){
				$_SESSION['selleremail']=$email;
					header('Location:index.php');
					exit();
			}
			else{
				echo mysql_error();
				exit();
			}
		}

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<title>HomeDecor | Login</title>
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
			<form class="form-horizontal" action="clogin.php" method="POST">
				<div class="form-group">
					Email:<br>
					<input class="form-control" type="text" name="email" value="" placeholder="abcd@pqr.xyz">
				</div>
				<div class="form-group">
					PassWord:<br>
					<input class="form-control" type="password" name="password" value="" ><br>
				</div>
				<div class="form-group">
					<input type="submit" name="Login" class="btn btn-default">
				</div>
			</form>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
	
</body>
</html>