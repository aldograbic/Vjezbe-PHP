<!DOCTYPE HTML>
<html>
	<head>
		<title>Izracun</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Aldo Grabic">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	</head>
<body>
		<?php
			$_a=$_POST['a'];
			$_b=$_POST['b'];
			$c=(3*$_a-$_b)/2;
			print '
			<div class="odlomak">
				<p class="vra">a='.$_a .'</p>
				<p>b='.$_b .'</p>
				<p>c=(3*'.$_a.'-'.$_b.')/2='.$c .'</p>
			</div>';
		?>
	</body>
</html>