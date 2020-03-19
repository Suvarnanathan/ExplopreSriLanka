<html>
<head>
	<link rel="stylesheet" href="style.css">

	<style>
		table td {padding: 3px;}
		#canvas_container {  
		width: 700px;  
		}
		
		.width1{
			width: 800px";
		}
	</style>
</head>

<?php
include "config.php";

$sql = "SELECT * FROM pac where ID='1'";
$result =mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($result)){
			
        $place = $row["PLACE"];
		$placeToSee = $row["PlacesToSee"];
		$accoFee = $row["AccommadationFee"];
		$foodFee = $row["FoodFee"];
		$BussFee = $row["BussFee"];
		$NumDays = $row["NumberOfDays"];
		$total=$row['Total'];
		$image='<img src="data:image/jpg;base64,'.base64_encode($row['pic']).'" width="400" height="300">';
}
		

?>


<div class="container" ng-app="myApp" ng-controller="Example">
	
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12">
				<table border="1" id="html5logo" class="table table-striped">
					
					<tbody>
						
						<tr>
							<td rowspan=9 style="width:80%,height:90%";><?php echo $image;?></td>
							<td style="width:600px;height: 40px;"><?php echo $place;?></td>
							
						</tr>
						<tr>
							<td style="width:600px;height: 40px;"><?php echo $placeToSee;?></td>
						</tr>
						<tr>
							<td style="width:600px;height: 40px;"><?php echo $accoFee;?></td>
						</tr>
						<tr>
							<td style="width:600px;height: 40px;"><?php echo $foodFee;?></td>
						</tr>
						<tr>
							<td style="width:600px;height: 40px;"><?php echo $BussFee;?></td>
						</tr>
						<tr>
							<td style="width:600px;height: 40px;"><?php echo $NumDays;?></td>
						</tr>
						<tr>
							<td style="width:600px;height: 40px;"><?php echo $total?></td>
						</tr>
					</tbody>
				</table>
			</div>
			
		</div>
		
	</div>


</div>
<div class="ii1" style="width:50%;float:right;">
			<button type="submit" class="btn btn-outline-danger" style="margin-left: 60px;margin-top: 30px;" onclick="cli()">Confirm</button>
		</div>
<script type="text/javascript">
	function cli(){
	window.location="http://localhost/explore1/bookingdet.php";
}
</script>
<div class="ii1" style="width:50%;float:right;">
			<button type="button" class="btn btn-outline-danger" style="margin-left: 460px;margin-top: 30px;" onclick="cl()">Cancel</button>
		</div>
		<script type="text/javascript">
			function cl(){
			window.location="http://localhost/explore1/index.html";
		}	
		</script>
</html>