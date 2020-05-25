<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=], initial-scale=1.0">
	<title>PHP Arrays</title>
	<link rel="stylesheet" href="/learnphp/theme/css/bootstrap-theme.css">
</head>
<body class="font-mali">
	<div class="container">
		<div class="row mt-5">
			<div class="col">
				<div class="card">
					<h3 class="card-header bg-da text-l">Arrays ก็เหมือนตู้ล๊อกเกอร์</h3>
					<div class="card-body">
						<?php
							// Basic Arrays
							$dayName = ["จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์", "อาทิตย์"]; // Indexed Array

							echo "<h3 class='mb-4'>วันนี้วัน{$dayName[5]} พรุ่งนี้วัน{$dayName[6]} ดีใจจัง จะได้ไปทำบุญที่วัด</h3>";

							// Indexed vs Associative Arrays
							$boon_indexed = ["ทาน", "ศีล", "ภาวนา"];
							$boon_assoc = ["a"=>"ทาน", "b"=>"ศีล", "c"=>"ภาวนา"];

							echo "<h3 class='mb-4'>Indexed: บุญกิริยาวัตถุ 3 คือ วิธีการทำบุญ ได้แก่ {$boon_indexed[0]} {$boon_indexed[1]} และ{$boon_indexed[2]}</h3>";

							echo "<h3 class='mb-4'>Assoc: บุญกิริยาวัตถุ 3 คือ วิธีการทำบุญ ได้แก่ {$boon_assoc['a']} {$boon_assoc['b']} และ{$boon_assoc['c']}</h3>";
							
							$success = 	["ฉันทะ", "วิริยะ", ["จิตตะ", "วิมังสา"]];

							echo "<h3 class='mb-4'>ความเอาใจใส่ในงานที่ทำ คือ {$success[2][0]}</h3>";

							$members = [ 
								["name"=>"วิชชี่", "food"=>"ข้าวมันไก่", "pet"=>"ไก่"],
								["name"=>"กาน", "food"=>"พิซซ่า", "pet"=>"แมว"],
								["name"=>"แป้ง", "food"=>"ขนม", "pet"=>"นก"]
							];

							echo "<h3 class='mb-4'>{$members[0]['name']} ผู้รัก{$members[0]['pet']} อยากกิน{$members[0]['food']}</h3>";

							echo "<h3 class='mb-4'>{$members[1]['name']} ผู้รัก{$members[1]['pet']} อยากกิน{$members[1]['food']}</h3>";

							echo "<h3 class='mb-4'>{$members[2]['name']} ผู้รัก{$members[2]['pet']} อยากกิน{$members[2]['food']}</h3>";

							echo "<h2>ลองใช้ For ดูนะครับ</h2>";

							for($i=0; $i<=2; $i++) {
								echo "<h3 class='mb-4'>{$members[$i]['name']} ผู้รัก{$members[$i]['pet']} อยากกิน{$members[$i]['food']}</h3>";
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
