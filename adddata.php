<?php
include 'config.php';

$msg="";
if(isset($_POST['add'])){
$packageID=$_POST['packid'];
$Place=$_POST['place'];
$ThingsToDo=$_POST['things_to_do'];
$StayFee=$_POST['StayFee'];
$FoodFee=$_POST['FoodFee'];
$BusFee=$_POST['BusFee'];
$NumberOfDays=$_POST['NumberOfDays'];
$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));




$sql="INSERT INTO  pac (PLACE,PlacesToSee,AccommadationFee,FoodFee,BussFee,NumberOfDays,pic)VALUES('$Place',
'$ThingsToDo','$StayFee','$FoodFee','$BusFee','$NumberOfDays','$image') ";




$result=mysqli_query($conn,$sql);
if(!$result){
	echo "not inserted";
}
else{
	echo  '<script>alert("successfully inserted") </script>';
}


}

?>
<html>
<body>
	<form action="view_details.php"></form>
	</body>
</html>
