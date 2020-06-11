<?php require $_SERVER["DOCUMENT_ROOT"]."/learnphp/13_php/inc/autoload.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OOP Basic</title>
	<link rel="stylesheet" href="/learnphp/theme/css/bootstrap-theme.css">
</head>
<body>
	<body class="font-mali">
		<div class="container">
			<div class="row mt-5">
				<div class="col">
					<div class="card mb-3">
						<h4 class="card-header bg-primary text-white">PHP OOP</h4>
						<div class="card-body">
							<?php
								use Health\Healthy;
								use Health\Dietary;
								
								$jane = new Healthy(173, 52);
								// $jane->height = 173;
								// $jane->weight = 52;
								$noon = new Healthy(165);
								// $noon->height = 165;
								// $noon->weight = 55;
								$bow = new Dietary(164, 66, "โบว์", 25, "f");
								// $bow->nickname = "โบว์";
								// $bow->setAge(5);
								// $bow->gender = "f";
			
								echo "
									<p>
										เจน มีความสูง {$jane->height} cm. 
										ค่า BMI คือ {$jane->bmi()}
										ผลลัพท์ คือ {$jane->fat()}
									</p>
								";
								echo "
									<p>
										นุ่น มีความสูง {$noon->height} cm.  
										ค่า BMI คือ {$noon->bmi()}
										ผลลัพท์ คือ {$noon->fat()}
									</p>
								";
								echo "
									<p>
										{$bow->nickname} อายุ {$bow->getAge()} ปี มีความสูง {$bow->height} cm. 
										น้ำหนัก {$bow->getWeight()}
										ค่า BMI คือ {$bow->bmi()}
										ผลลัพท์ คือ {$bow->fat()}
										BMR คือ {$bow->bmr()}
										TDEE คือ {$bow->tdee(3)}
									</p>									
								";

								echo "<h2>น้ำหนักสูงสุด ไม่เกิน ";								
								echo Healthy::MAX_WEIGHT;
								echo "</h2>";

								echo "<h2>";
								echo Healthy::$greetings;
								echo "</h2>";
								
								Dietary::cheers();
								$bow->bye();
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</body>
</html>