
<html>
<body>
<?php
include 'config.php';
//$a="select * from pac";
$a="select * SUM(AccommadationFee+TrainFee)from pac where ID=2";
$b=mysqli_query($conn,$a);
?>
<div class="d1">
	<?php
		while($row=mysqli_fetch_array($b)){

			?>
			<div class="d11" style="float:left; margin:80px;"><?php echo '<img src="data:image/jpg;base64,'.base64_encode($row['pic']).'" width="200" height="100">'?>
				
				<div><?php echo $row['PLACE']?></div>
				<div><?php echo $row['PLACE']?></div>
			</div>
		<?php 
		}


	?>


</div>
</body>
</html>