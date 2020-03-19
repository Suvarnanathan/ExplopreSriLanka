<?php 
		
	
		include 'config.php';
		$id=0;
		$update=false;
		$id=" ";
		$place=" ";
		$pltosee=" ";
		$accfee=" ";
		$foodfee=" ";
		$busfee=" ";
		$trainfee=" ";
		$days=" ";
		$image=" ";

		if(isset($_POST['save'])){
			$id=$_POST['id'];
			$place=$_POST['plname'];
			$pltosee=$_POST['pltosee'];
			$accfee=$_POST['accfee'];
			$foodfee=$_POST['ffee'];
			$busfee=$_POST['bfee'];
			$trainfee=$_POST['tfee'];
			$days=$_POST['days'];
			$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
		

			$sq="INSERT INTO pac(PLACE,PlacesToSee,AccommadationFee,FoodFee,BussFee,TrainFee,NumberOfDays,pic)VALUES
			('".$_POST["plname"]."','".$_POST["pltosee"]."','".$_POST["accfee"]."','".$_POST["ffee"]."','".$_POST["bfee"]."','".$_POST["tfee"]."','".$_POST["days"]."','$image')" ;
			if(mysqli_query($conn,$sq)){
				header("location:view_details.php");
				
			}
			else{
				echo "no";
			}
		}

		if(isset($_GET['delete'])){
			$id=$_GET['delete'];
			
			$sql=("delete from pac where ID=$id");
			if(mysqli_query($conn,$sql)){
				header("location:view_details.php");
			}

		}
		
		if(isset($_GET['edit'])){
			$id=$_GET['edit'];
			$update=true;
			$result=$conn->query("select PLACE,PlacesToSee,AccommadationFee,FoodFee,BussFee,NumberOfDays from pac where ID=$id ") or die($conn->error());
			if(count($result)==1){
				$row=$result->fetch_array();
				$place=$row['PLACE'];
				$pltosee=$row['PlacesToSee'];
				$accfee=$row['AccommadationFee'];
				$foodfee=$row['FoodFee'];
				$busfee=$row['BussFee'];
				$days=$row['NumberOfDays'];
			
			}
		}
		if(isset($_POST['update'])){
			$id=$_POST['id'];
			$place=$_POST['plname'];
			$pltosee=$_POST['pltosee'];
			$accfee=$_POST['accfee'];
			$foodfee=$_POST['ffee'];
			$busfee=$_POST['bfee'];
			$days=$_POST['days'];
				



			$conn->query("update pac set PLACE='{$place}', PlacesToSee='{$pltosee}',AccommadationFee={$accfee},FoodFee={$foodfee},BussFee={$busfee},NumberOfDays={$days} where ID={$id}") or die("err");
			header("location:view_details.php");

		}
	?>