
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<body>
<?php 
include 'view_userdetails.php';?>
<div class="container">
<?php
$mysqli=new mysqli("localhost","root","","online_travels_agency");
$result=$mysqli->query("SELECT userID,username,Email,mobileNO,Gender,DOB,Country from login_details ") or die ("eror");
	//pre_r($sql);
	//pre_r($result->fetch_assoc());

?>
<div class="row justify-center-center">
<table border="2"class="table"style=" height:150px; width:90%;margin-left: auto;margin-right: auto;margin-top: 50px">
		<tr>
		<th>id</th>
			<th>name</th>
			<th>email</th>
			<th>mobile</th>
			<th>gender</th>
			<th>dob</th>
			<th>country</th>
			<th>Action</th>
			
		</tr>
		<?php



		while($row=$result->fetch_assoc()):
			?>
			<tr>
			<td style="width:60px;"><?php echo $row['userID'];?> </td>
			<td> <?php echo $row['username']; ?></td>
			<td> <?php echo $row['Email'];?></td>
			<td><?php echo $row['mobileNO'];?></td>
			<td><?php echo $row['Gender'];?></td>
			<td><?php echo $row['DOB'];?></td>
			<td><?php echo $row['Country'];?></td>
			<td>
				<a href="view_userdetails.php?delete=<?php echo $row['userID'];?>"
				class="btn btn-danger">Delete</a>
			</td>
			</tr>
				<?php endwhile;?>


	
		
		
		</table>
		</div>
	


<!--form method="post" enctype="multipart/form-data" action="view_userdetails.php">
	<input type="hidden" name="uid" value="<?php //echo $id;?>" >

		<div class="input-group">
			<label>userID</label>
			<input type="text" name="uid" value="<?php //echo $id;?>" >
		</div>
		<div class="input-group">
			<label>username</label>
			<input type="text" name="uname" value="<?php //echo $name;?>">
		</div>
		<div class="input-group">
			<label>password</label>
			<input type="password" name="pw">
		</div>
		<div class="input-group">
			<label>userType</label>
			<input type="text" name="utype" >
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php //echo $mail;?>">
		</div>
		<div class="input-group">
			<label>MobileNO</label>
			<input type="text" name="phone" value="<?php //echo $mobile;?>">
		</div>
		<div class="input-group">
			<label>Gender</label>
			<input type="text" name="gender" value="<?php //echo $gender;?>">
		</div>
		<div class="input-group">
			<label>DOB</label>
			<input type="date" name="dob" value="<?php //echo $dob;?>">
		</div>
		
		<div class="input-group">
			<label>Country</label>
			<input type="text" name="country" value="<?php //echo $country;?>" > 
		</div>
	
		<div class="input-group">
				<button type="submit" class="btn btn-primary" name="save">save</button>	
			
		
		</div>
	</form-->
</div>
	</body>
</html>