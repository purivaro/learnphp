<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GET & POST</title>
	<link rel="stylesheet" href="/learnphp/theme/css/bootstrap-theme.css">
</head>
<body class="font-mali">
	<div class="container">
		<div class="row mt-5">
			<div class="col">
				<div class="card">
					<h4 class="card-header bg-da text-white">Server Side</h4>
					<div class="card-body">
						<?php
							// $_GET = ['nickname'=>'ไก่', 'age'=>'25'];
							print_r($_REQUEST);
							echo "<h4>{$_REQUEST['nickname']}</h4>";
							echo "<h4>{$_REQUEST['age']}</h4>";
							echo "<h4>{$_REQUEST['height']}</h4>";
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>