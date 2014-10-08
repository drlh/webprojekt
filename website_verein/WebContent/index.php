
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">

<title>Fixed Top Navbar Example for Bootstrap</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet">




</head>

<body>

	<!-- Fixed navbar -->

	<?php include 'pages/navigation.php';?>
	
	<div class="container">

		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h1>Navbar example</h1>
			<p>This example is a quick exercise to illustrate how the default,
				static and fixed to top navbar work. It includes the responsive CSS
				and HTML, so it also adapts to your viewport and device.</p>
			<p>To see the difference between static and fixed top navbars, just
				scroll.</p>
			<p>
				<a class="btn btn-lg btn-primary" href="../../components/#navbar"
					role="button">View navbar docs &raquo;</a>
			</p>
		</div>

	</div>
	<?php include 'pages/footer.php';?>
</body>
</html>
