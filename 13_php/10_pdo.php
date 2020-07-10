<?php require $_SERVER['DOCUMENT_ROOT']."/learnphp/vendor/autoload.php";?>
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
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Firstname</th>
									<th>Nickname</th>
									<th>DOB</th>
									<th>Gender</th>
									<th>Club</th>
									<th>Salary</th>
								</tr>
							</thead>
							<tbody>
								<?php
									use App\Model\Person;

									$personObj = new Person();
									$persons = $personObj->getAllPersons();
									$n=0;
									foreach($persons as $person) {
										$n++;
										echo "
											<tr>
												<td>{$n}</td>
												<td>{$person['firstname']}</td>
												<td>{$person['nickname']}</td>
												<td>{$person['dob']}</td>
												<td>{$person['gender']}</td>
												<td>{$person['club']}</td>
												<td>{$person['salary']}</td>
											</tr>
										";
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>