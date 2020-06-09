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
								class Healthy {
									public $height;
									public $weight;

									public function bmi() {
										$h = $this->height/100;
										$bmi = $this->weight/($h*$h);
										return $bmi;
									}

									public function fat() {
										$bmi = $this->bmi();
										if($bmi >= 30) {
											$result = "อ้วนมาก";
										} else if($bmi >= 25) {
											$result = "อ้วน";
										} else if($bmi >= 23) {
											$result = "น้ำหนักเกิน";
										} else if($bmi >= 18.5) {
											$result = "น้ำหนักปกติ เหมาะสม";
										} else {
											$result = "ผอมเกินไป";
										}
										return $result;
									}
								}
								$jane = new Healthy();
								$jane->height = 173;
								$jane->weight = 52;
								$noon = new Healthy();
								$noon->height = 165;
								$noon->weight = 55;
								echo "
									<p>
										เจน มีความสูง {$jane->height} cm. น้ำหนัก {$jane->weight} กก.
										ค่า BMI คือ {$jane->bmi()}
										ผลลัพท์ คือ {$jane->fat()}
									</p>
								";
								echo "
									<p>
										นุ่น มีความสูง {$noon->height} cm. น้ำหนัก {$noon->weight} กก.
										ค่า BMI คือ {$noon->bmi()}
										ผลลัพท์ คือ {$noon->fat()}
									</p>
								";
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</body>
</html>