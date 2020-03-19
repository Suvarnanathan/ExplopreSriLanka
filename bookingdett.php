<html>
<head><link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<table border='2' style=" height:150px; width:90%;margin-left: auto;margin-right: auto;margin-top: 50px">
		<tr>
		<th>userID</th>
			<th>UserName</th>
			<th>palce</th>
			<th>places to see</th>
			<th>Number of days</th>
			<th>Total</th>
		</tr>
		<?php 
	
	
		include 'config.php';
		include 'addde.php';
		$sql="SELECT pac.PLACE,PlacesToSee,NumberOfDays,Total,login_details.* from pac,login_details where login_details.userID='3' AND pac.ID='1'";
		$query_run=mysqli_query($conn,$sql);
		
		while($row=mysqli_fetch_array($query_run)){
			?>
			<tr>
				<td align="center" width="50"> <?php echo $row['userID'];?></td>
			<td align="center" width="50"><?php echo $row['username'];?></td>
			<td align="center" width="50"><?php echo $row['PLACE'];?> </td>
			<td align="center" width="50"> <?php echo $row['PlacesToSee']; ?></td>
			<td align="center" width="50"><?php echo $row['NumberOfDays'];?></td>
			<td align="center" width="50"><?php echo $row['Total'];?></td>
						</tr>
			<?php 
		}
	
		?>
		
		</table>
			