<?php
	$api_url = 'https://api.darksky.net/forecast/474e3fb7765689e5907dca1d445e7038/41.8398958,-88.3499143'

	$forecast = json_decode(file_get_contents($api_url));

	echo '<pre>';
	print_r($forecast);
	echo '</pre>';
?>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Forecast</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<main class="container">
			<h1 class="display-1" align="center">Forecast</h1>
			<div class="card p-4" style="margin: 0 auto; max-width: 320px;">
				<h2 align="center">Current Forecast</h2>
				<h3 class="display-2" align="center">75&deg;</h3>
			</div>
		</main>
	</body>
</html>