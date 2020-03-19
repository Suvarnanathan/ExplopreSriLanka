<?php
ob_start();
require "config.php";
if(isset($_POST['submit'])){
	if(!empty($_POST['user-mail'])){
		$email=trim($_POST['user-mail']);
	}
	else{
		$error="email is requiored";
	}
	if(empty($error)){
		$sql="SELECT username,Email FROM login_details WHERE Email=? "
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>forget pw </title>
</head>
<body>
	<div id ="wrapper">
		<div id="logincontainer"></div>
			<form name="frmtarget" method="post">
				<h3>forget password?</h3>
				<input type="email" name="user-mail" required>
				<input type="submit" name="submit" value="submit">
			 </form>
	</div>
</body>
</html
