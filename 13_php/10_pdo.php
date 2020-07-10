<?php require $_SERVER["DOCUMENT_ROOT"]."/learnphp/vendor/autoload.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PDO Basic</title>
	<link rel="stylesheet" href="/learnphp/theme/css/bootstrap-theme.css">
</head>
<body class="font-mali">
	<div class="container">
		<div class="row mt-5">
			<div class="col">
				<div class="card mb-3">
					<h4 class="card-header bg-primary text-white">PHP PDO</h4>
					<div class="card-body">
							<?php
								use App\Model\Person;
								$personObj = new Person();

								echo "<h2>Get All Persons</h2>";
								$persons = $personObj->getAllPersons();
								foreach($persons as $person) {
									echo "<p>{$person['id']} {$person['firstname']} {$person['nickname']}</p>";
								}
							?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>