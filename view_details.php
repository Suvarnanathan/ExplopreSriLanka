<html>
<head><link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<form method="post" action="view1pac.php">
	<input type="text" name="enter" placeholder="Enter place name">
	<input type="submit" value="search">
	</form>
	<table border='2' style=" height:150px; width:90%;margin-left: auto;margin-right: auto;margin-top: 50px">
		<tr>
		<th>place</th>
			<th>PlacesToSee</th>
			<th>AccommadationFee</th>
			<th>FoodFee</th>
			<th>BusFee</th>
			<th>NumberOfDays</th>
			<th>Image</th>
			<th colspan="2">Action</th> 
		</tr>
		<?php 
	
		include 'config.php';
		include 'addde.php';
		$sql="SELECT * from pac";
		$query_run=mysqli_query($conn,$sql);
		
		while($row=mysqli_fetch_array($query_run)){
			?>
			<tr>
				<td align="center" width="50"><?php echo $row['PLACE'];?> </td>
			<td align="center" width="150"> <?php echo $row['PlacesToSee']; ?></td>
			<td align="center" width="50"> <?php echo $row['AccommadationFee'];?></td>
			<td align="center" width="50"><?php echo $row['FoodFee'];?></td>
			<td align="center" width="50"><?php echo $row['BussFee'];?></td>
			<td align="center" width="20"><?php echo $row['NumberOfDays'];?></td>
			<td width="150px"><?php echo '<img src="data:image/jpg;base64,'.base64_encode($row['pic']).'" width="200" height="100">';?></td>
			<td><a href="view_details.php?edit=<?php echo $row['ID'];?>"
				class="btn btn-info">Edit</a>
				<a href="view_details.php?delete=<?php echo $row['ID'];?>"
				class="btn btn-danger">Delete</a>
			</td>
			</tr>
			<?php 
		}
	
		?>
		</table>
		<form method="post" enctype="multipart/form-data" action="addde.php">
	
	<div class="input-group">
			<label>ID</label>
			<input type="text" name="id" value="<?php echo $id;?>" >
		</div>
		<div class="input-group">
			<label>Place</label>
			<input type="text" name="plname" value="<?php echo $place;?>" >
		</div>
		<div class="input-group">
			<label>ToSee</label>
			<TEXTAREA rows="3" cols="40"name="pltosee" value="<?php echo $pltosee;?>"></TEXTAREA> 
		</div>
		<div class="input-group">
			<label>AccomadationFee</label>
			<input type="text" name="accfee" value="<?php echo $accfee;?>">
		</div>
		<div class="input-group">
			<label>FoodFee</label>
			<input type="text" name="ffee" value="<?php echo $foodfee;?>" >
		</div>
		<div class="input-group">
			<label>BusFee</label>
			<input type="text" name="bfee" value="<?php echo $busfee;?>">
		</div>
		<div class="input-group">
			<label>Days</label>
			<input type="text" name="days" value="<?php echo $days;?>">
		</div>
		<input type="hidden" name="size" value="1000000">
		<div class="input-group">
			<label>Image</label>
			<input type="file" name="image"  > 
		</div>
	
		<div class="input-group">
			<?php if($update == true):
				?>
				<button type="submit" class="btn btn-info" name="update">Update</button>
				<?php else: ?>
				<button type="submit" class="btn btn-primary" name="save">save</button>	
			
		<?php endif;?>
		</div>
	</form>

		
</body>
</html>