<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Loops</title>
	<link rel="stylesheet" href="/learnphp/theme/css/bootstrap-theme.css">
</head>
<body class="font-mali">
	<div class="container">
		<div class="row mt-5">
			<div class="col">
				<h1>วันเกิด</h1>
				<div class="fs-24">
					<label>วันที่</label>
					<select name="day">
						<?php
							for($i=1; $i<=31; $i++) {
								echo "<option value='{$i}'>{$i}</option>";
							}
						?>
					</select>
					<label>เดือน</label>
					<select name="month">
						<?php
							$months = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
							$n = 0;
							foreach($months as $key=>$month) {
								$n++;
								echo "<option value='{$n}'>{$month}</option>";
							}
						?>
					</select>
					<label>ปี</label> 
					<select name="year">
						<?php
							for($i=2563; $i>=2500; $i--) {
								echo "<option value='{$i}'>{$i}</option>";
							}
						?>
					</select>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col">
				<?php
					$members = [ 
						[ "name"=>"วิชชี่",  "food"=>"ไก่ทอด", "color"=>"danger"],  
						[ "name"=>"กาน",  "food"=>"พิซซ่า", "color"=>"warning"],  
						[ "name"=>"แป้ง",  "food"=>"ขนม", "color"=>"success"]
					];		
					foreach($members as $key=>$member) {
						echo "<h1 class='text-{$member['color']}'>{$member['name']} ชอบกิน {$member['food']}</h1>";
					}			
				?>
			</div>
		</div>
	</div>
</body>
</html>