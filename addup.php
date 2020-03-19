<?php
include 'config.php';
$msg="";
$userID=$_POST['uid'];
$sql="select * from login_details where id=$userID";
$result=mysqli_query($conn,$sql);
$r=mysqli_fetch_array($result);
if(isset($_POST['add'])){
$userID=$_POST['uid'];
$username=$_POST['uname'];
$passwrd=$_POST['pw'];
$usertype=$_POST['utype'];
$email=$_POST['email'];
$mobileno=$_POST['phone'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$country=$_POST['country'];





/*$sql="INSERT INTO  login_details (userID,username,password,user_type,Email,mobileNo,Gender,DOB,Country)VALUES('$userID',
'$username','$passwrd','$usertype','$email','$mobileno','$gender','$dob','$country') ";
*/





$result=mysqli_query($conn,$sql);
if(!$result){
	echo "not inserted";
}
else{
	header("location:login.php");
}


}

?>
<html>
<body>
	<form action="view_details.php"></form>
	</body>
</html>
