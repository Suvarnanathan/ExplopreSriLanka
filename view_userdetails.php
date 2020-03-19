<html>
<body>
	<h1 style="margin-left: 500px">User Details</h1>
	
		<?php 
		
	
		include 'config.php';
		$id=0;
		$update=false;
		$id=" ";
		$name=" ";
		$mail=" ";
		$mobile=" ";
		$gender=" ";
		$dob=" ";
		$country="";
	

		if(isset($_POST['save'])){
			$id=$_POST['uid'];
			$name=$_POST['uname'];
			$pw=$_POST['pw'];
			$type=$_POST['utype'];
			$mail=$_POST['email'];
			$mobile=$_POST['phone'];
			$gender=$_POST['gender'];
			$dob=$_POST['dob'];
			$country=$_POST['country'];
		

			$sq="INSERT INTO login_details(userID,username,password,user_type,Email,mobileNO,Gender,DOB,Country)VALUES
			('".$_POST["uid"]."','".$_POST["uname"]."','".$_POST["pw"]."','".$_POST["utype"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["gender"]."','".$_POST["dob"]."','".$_POST["country"]."')" ;
			if(mysqli_query($conn,$sq)){
				header("location:signup.php");
				//header("location:signup.php");
			}
			else{
				echo "no";
			}
		}





		if(isset($_GET['delete'])){
			$id=$_GET['delete'];
			
			$sql=("delete from login_details where userID=$id");
			if(mysqli_query($conn,$sql)){
				"<script> alert('user who is no longer available deleted')</script>";
				header("location:signup.php");
			}

		}
		
		if(isset($_GET['edit'])){
			$id=$_GET['edit'];
			$update=true;
			$result=$conn->query("select userID,username,Email,mobileNO,Gender,DOB,Country from login_details where userID=$id ") or die($conn->error());
			if(count($result)==1){
				$row=$result->fetch_array();
				$id=$row['userID'];
				$name=$row['username'];
				$mail=$row['Email'];
				$mobile=$row['mobileNO'];
				$gender=$row['Gender'];
				$dob=$row['DOB'];
				$country=$row['Country'];
			}
		} 
		if(isset($_POST['update'])){
			$id=$_POST['uid'];
			$name=$_POST['uname'];
			$mail=$_POST['email'];
			$mobile=$_POST['phone'];
			$gender=$_POST['gender'];
			$dob=$_POST['dob'];
			$country=$_POST['country'];

			$conn->query("update login_details set username='$name', Email='$mail',mobileNO='$mobile',Gender='$gender',DOB='$dob', country='$country' where userID=$id") or die("error");
			header("location:signup.php");

		}
		?>
</body>
</html>