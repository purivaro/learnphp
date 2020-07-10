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
						<form action="">
							<div class="form-group">
								<label for="">ค้นหา</label>
								<input type="text" name=":search" class="form-control" value="<?php echo $_REQUEST[':search'];?>">
							</div>
							<button type="submit" class="btn btn-primary">Search</button>
						</form>
							<?php
								use App\Model\Person;
								$personObj = new Person();

								echo "<h2>Get All Persons</h2>";
								$persons = $personObj->getAllPersons();
								foreach($persons as $person) {
									echo "<p>{$person['id']} {$person['firstname']} {$person['nickname']}</p>";
								}

								echo "<h2>Update Person</h2>";
								$personObj->updatePerson([":firstname"=>"มินตรา", ":nickname"=>"BlackPink", ":dob"=>"208-04-22
								",":gender_id"=>"2", ":id"=>"16"]);

								// echo "<h2>Add New Person</h2>";
								// $person3_id = $personObj->addPerson([":firstname"=>"มินตรา", ":nickname"=>"BlackPink", ":dob"=>"2008-06-16"]);
								// echo "<h3>New Person Id : {$person3_id}</h3>";

								echo "<h2>Filtered Persons</h2>";
								$persons2 = $personObj->getPersons($_REQUEST);
								foreach($persons2 as $person) {
									echo "<p>{$person['id']} {$person['firstname']} {$person['nickname']} {$person['dob']}</p>";
								}
								
								echo "<h2>Delete Person</h2>";
								$personObj->deletePerson(15);
							?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>