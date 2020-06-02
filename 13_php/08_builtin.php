<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Built-in Functions</title>
	<link rel="stylesheet" href="/learnphp/theme/css/bootstrap-theme.css">
</head>
<body class="font-mali">
	<div class="container">
		<div class="row mt-5">
			<div class="col">
				<h1>รวม Function ที่น่าสนใจ ใช้บ่อย</h1>
				<div class="card mt-4">
					<h4 class="card-header bg-primary text-white">Include / Require</h4>
					<div class="card-body">
						<?php
							// ##################
							// Include / Require
							// ##################
							// https://www.w3schools.com/php/php_includes.asp


							// include คือ การเอา code ทั้งหน้าของไฟล์ที่ต้องการ มาแปะในหน้านี้ตรงที่นี่
							// require คล้าย include ต่างกันตรงที่ถ้าไม่มีไฟล์ที่ระบุ จะ error เลย
							// include 'filename';

							// relative path
							include 'inc/text/sentence1.php';

							// absolute path
							// include '/learnphp/13_php/inc/sentence2.php'; // แบบนี้ไม่ได้ เพราะ root ของ php ไม่ได้อยู่ที่ htdocs
							include $_SERVER['DOCUMENT_ROOT'].'/learnphp/13_php/inc/text/sentence2.php';

						?>
					</div>
				</div>

				<div class="card mt-4">
					<h4 class="card-header bg-primary text-white">Arrays Functions</h4>
					<div class="card-body">
						<?php include $_SERVER['DOCUMENT_ROOT'].'/learnphp/13_php/inc/functions/arrays.php'; ?>
					</div>
				</div>

				<div class="card mt-4">
					<h4 class="card-header bg-primary text-white">Date Functions</h4>
					<div class="card-body">
						<?php include $_SERVER['DOCUMENT_ROOT'].'/learnphp/13_php/inc/functions/date.php'; ?>
					</div>
				</div>

				<div class="card mt-4">
					<h4 class="card-header bg-primary text-white">String Functions</h4>
					<div class="card-body">
						<?php include $_SERVER['DOCUMENT_ROOT'].'/learnphp/13_php/inc/functions/string.php'; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>