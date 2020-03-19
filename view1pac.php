<html>
<body>
	<form action="view_details.php">
		<input type="submit" value="Back">
	</form>
	<table border='1' height="100px">
		<tr>
		<th>place</th>
			<th>PlacesToSee</th>
			<th>AccommadationFee</th>
			<th>FoodFee</th>
			<th>BusFee</th>
			<th>NumberOfDays</th>
			<th>Image</th> 
		</tr>
		<?php 
	
		include 'config.php';
		

		
		$set=$_POST['enter'];
		if($set){
		$sql="SELECT * from pac where PLACE='$set'";
		$query_run=mysqli_query($conn,$sql);
		
		while($row=mysqli_fetch_array($query_run)){
			?>
			<tr>
			<td align="center" width="200"><?php echo $row['PLACE'];?> </td>
			<td align="center" width="200"> <?php echo $row['PlacesToSee']; ?></td>
			<td align="center" width="200"> <?php echo $row['AccommadationFee'];?></td>
			<td align="center" width="200"><?php echo $row['FoodFee'];?></td>
			<td align="center" width="200"><?php echo $row['BussFee'];?></td>
			<td align="center" width="200"><?php echo $row['NumberOfDays'];?></td>
			<td width="200"><?php echo '<img src="data:image/jpg;base64,'.base64_encode($row['pic']).'" width="200" height="100">';?></td>
			
			</tr>
			<?php 
		}
	}
		?>
		</table>
	

	</body>
	</html>