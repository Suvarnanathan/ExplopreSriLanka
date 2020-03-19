<html>
<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<?php
	include 'config.php';
	if(isset($_POST['save'])){
			$name=$_POST['uname'];
			$pw=$_POST['pw'];
			$type=$_POST['type'];
			$mail=$_POST['email'];
			$mobile=$_POST['phone'];
			$dob=$_POST['dob'];
			$country=$_POST['country'];
		

			$sq="INSERT INTO login_details(username,password,user_type,Email,mobileNO,DOB,Country)VALUES('$name','$pw','$type','$mail','$mobile','$dob','$country')";

			if(mysqli_query($conn,$sq)){
				header("location:login.php");
			}
			else{
				echo "no";
			}
		}
	?>
	<div class="header">
		<h2>Register</h2>
	</div>
<form method="post" enctype="multipart/form-data">
	
<input type="hidden" name="uid"  >

		<div class="input-group">
			<label>username</label>
			<input type="text" name="uname" required>
		</div>
		<div class="input-group">
			<label>password</label>
			<input type="password" name="pw" required minlength="8">
		</div>
		<select name="type"required>
        <option selected disabled value="">Type</option>
        <option>user</option>
        <option>admin</option>
      </select>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" required >
		</div>
		<div class="input-group">
			<label>MobileNO</label>
			<input type="tel" name="phone" required>
		</div>
		
		<div class="input-group">
			<label>DOB</label>
			<input type="date" name="dob" max="05/03/2020"required >
		</div>
		
		<select name="country"required>
        <option selected disabled value="">Country</option>
        <option>UK</option>
        <option>USA</option>
        <option>US</option>
      </select>
	
		<div class="input-group">
			<button type="submit" class="btn btn-primary" name="save">save</button>	
		</div>
	</form>
	</div>
	</body>
</html>