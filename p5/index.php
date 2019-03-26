<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	-->
	<link rel="stylesheet" href="./css/p5.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<title>Project 5</title>
	<script type="text/javascript" src="script/validation.min.js"></script>
	<script type="text/javascript" src="script/ajax.js"></script>
</head>

<body class="">	
	<div class="bg-dark navbar-dark text-white">
		<div class="container">
			<nav class="navbar px-0 navbar-expand-lg navbar-dark">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
					aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a href="index.php" class="pl-md-0 p-3 text-light">Currency Converter</a>
					</div>
				</div>
			</nav>
		</div>
	</div>

	<div class="container" style="min-height:500px;">
		<div class=''>
		</div>
		<div class="container">
			<br/> <br/>
			<h1>Currency Converter</h1>
			<br/>

			<form method="post" id="currency-form" class="form-inline"> 		
				<div class="form-group">
				<label class="sr-only" for="inlineFormInputGroup">From</label>
					<select class="custom-select" name="from_currency">
						<option value="INR">Indian Rupee</option>
						<option value="USD" selected="1">US Dollar</option>
						<option value="AUD">Australian Dollar</option>
						<option value="EUR">Euro</option>
						<option value="EGP">Egyptian Pound</option>
						<option value="CNY">Chinese Yuan</option>
					</select>	
					&nbsp;&nbsp;
					<label class="sr-only" for="inlineFormInputGroup">Amount</label>
					<div class="input-group mb-2 mr-sm-2 mb-sm-0">
						<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Currency" name="amount" id="amount" />
					</div>
					<label class="sr-only" for="inlineFormInputGroup">To</label>
					<select class="custom-select" name="to_currency">
						<option value="INR">Indian Rupee</option>
						<option value="USD">US Dollar</option>
						<option value="AUD">Australian Dollar</option>
						<option value="EUR" selected="1">Euro</option>
						<option value="EGP">Egyptian Pound</option>
						<option value="CNY">Chinese Yuan</option>
					</select>			
					&nbsp;&nbsp;
					<button type="submit" name="convert" id="convert" class="btn btn-primary">Convert</button>	
				</div>			
			</form>	
			<br/> <br/>
			<div class="form-group" id="converted_rate"></div>	
			<div id="converted_amount"></div>		
		</div>
	</div>
</body>
</html>


