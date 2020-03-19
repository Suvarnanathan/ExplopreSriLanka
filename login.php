<?php
session_start();

$conn=mysqli_connect("localhost","root","","online_travels_agency");
$msg="";

if(isset($_POST['Login'])){
	$username=$_POST['username'];
	$password=$_POST['Password'];
	$usertype=$_POST['usertype'];


	$sql="SELECT username,password,user_type FROM login_details WHERE username='".$_POST['username']."' AND password='".$_POST['Password']."' AND user_type='".$_POST['usertype']."'";
	$res=mysqli_query($conn,$sql);
	$user=mysqli_fetch_array($res);


	$stmt=$conn->prepare($sql);
	$stmt->bind_param("sss",$username,$password,$usertype);
	$stmt->execute();
	$result=$stmt->get_result();
	$row=$result->fetch_assoc();

	session_regenerate_id();
	$_SESSION['username']=$row['username'];
	$_SESSION['role']=$row['user_type'];
	session_write_close();

	if($result->num_rows==1 && $_SESSION['role']=="Admin"){
		if(!empty($_POST['remember']))
		{
			setcookie ("username",$_POST['username'],time()+(1*60*60));
			setcookie ("password",$_POST['Password'],time()+(1*60*60));
			
		}
		header("location:adminpage.php");
	}
	else if($result->num_rows==1 && $_SESSION['role']=="user"){
		if(!empty($_POST['remember']))
		{
			setcookie ("username",$_POST['username'],time()+(1*60*60));
			setcookie ("password",$_POST['Password'],time()+(1*60*60));
			
		}
		header("location:province.html");
		
	}
	else{
		$msg="username or password is incorrect";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>travels agency</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>





	
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" required value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];}?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="Password" name="Password" required  value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];}?>">
		</div>
		<div>
			<label>I'm a :</label>
			<input type="radio" name="usertype" value="admin" required>&nbsp; Admin
			<input type="radio" name="usertype" value="user" required>&nbsp; User
		</div>
		<div>
			<input type="checkbox" name="remember"/ >Remember me 
		</div>

		<div class="input-group">
			<button type="Submit" class="btn btn-success" name="Login">sign In</button>
		</div>
		<div>
		 <a href="fget.php">Forget Password</a>
		</div>
		<div>
			<h5>Don't have an account?</h5> <a href="register.php">sign up</a>
		</div>
		<h5><?= $msg;?></h5>
	</form>
</body>

</html>