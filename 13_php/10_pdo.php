<?php require $_SERVER["DOCUMENT_ROOT"]."/learnphp/13_php/inc/autoload.php";?>
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
						<ol>
							<?php
								use Model\Person;
								$personObj = new Person();
								$persons = $personObj->getPersons();
								foreach($persons as $person) {
									echo "<li>{$person['firstname']} {$person['lastname']}</li>";
								}
							?>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>