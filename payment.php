
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
<body>
	<div class="header">
		<h2>PaymentDetails </h2>
	</div>
	<form method="post">
		<div class="div1">
			<div class="div11" style="float: left;margin-top: 18px;margin-right: 80px;">
		<b>Accept Cards</b></div>
		<div class="div22"><img src="master.jpg" style="width:30%;height:10%"></div>
	</div>
	<div class="input-group">
			<label>Card Holder'sName</label>
			<input type="text" name="cname" required>
		</div>
			<div class="input-group">
			<label>CardNumber</label>
			<input type="number" name="cnum" required>
		</div>
			<div class="input-group">
				<div class="i1" style="width:50%;float:right;">
			<label>CVC</label>
			<input type="number" name="cvc" required>
		</div>
		<div class="i2" style="width: 50%">
			<label>Expired Date</label>
			<input type="Date" name="edate" required>
		</div>
		</div>
		<div class="input-group">
				<div class="ii1" style="width:50%;float:right;">
			<button type="button" class="btn btn-outline-danger">Cancel</button>
		</div>
		<div class="ii2" style="width: 50%">
			<button type="button" class="btn btn-outline-success">Continue</button>
		</div>
		</div>
	<p style="font-size: 10px;">This payment will be billed to the card you specified.The name on the status will be company.com</p>
	</form>

</body>
</html>