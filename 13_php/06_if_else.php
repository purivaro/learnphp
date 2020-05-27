<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>If Else</title>
	<link rel="stylesheet" href="/learnphp/theme/css/bootstrap-theme.css">
</head>
<body>
	<div class="container">
		<div class="row mt-3">
			<div class="col">
				<div class="card">
					<h4 class="card-header bg-primary text-white">If Else Example</h4>
					<div class="card-body">
						<?php
							$score = 90;
							$homework = false;
							$feedback = $homework ? "ทำการบ้าน" : "ไม่ได้ทำการบ้าน";

							if($score >= 80 && $homework) {
								$grade = "A";
							}else if($score >= 70) {
								$grade = "B";
							}else if($score >= 60 || $homework) {
								$grade = "C";
							}else if($score >= 50) {
								$grade = "D";
							}else{
								$grade = "F";
							}

							echo "<h2>คะแนนของฉัน คือ {$score}</h2>";
							echo "<h2>ฉัน{$feedback}</h2>";
							echo "<h1>เกรดที่ได้ คือ {$grade}</h1>";
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>