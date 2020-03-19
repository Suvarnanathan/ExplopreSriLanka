
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body  x>
	<div class="header">
		<h2>packageDetails</h2>
	</div>
<form method="post" enctype="multipart/form-data" action="adddata.php">
		<div class="input-group">
			<label>Place</label>
			<input type="text" name="place" required autofocus>
		</div>
		<div class="input-group">
			<label>ThingsToDo</label>
			<textarea cols="46" rows="5" name="things_to_do" ></textarea>
		</div>
		<div class="input-group">
			<label>StayFee</label>
			<input type="number" name="StayFee" required >
		</div>
		<div class="input-group">
			<label>FoodFee</label>
			<input type="number" name="FoodFee" required>
		</div>
		<div class="input-group">
			<label>Transport</label>
			<input type="text" name="BusFee" required>
		</div>
		<div class="input-group">
			<label>NumberOfDays</label>
			<input type="number" name="NumberOfDays" required>
		</div>
		<input type="hidden" name="size" value="1000000">
		<div class="input-group">
			<label>Image</label>
			<input type="file" name="image" required > 
		</div>
	
		<button type="submit" class="btn btn-primary btn-lg btn-block" name="add">ADD</button>
	</form>
	</body>
</html>