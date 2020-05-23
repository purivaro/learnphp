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
						<option value="1">มกราคม</option>
						<option value="2">กุมภาพันธ์</option>
						<option value="3">มีนาคม</option>
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
	</div>
</body>
</html>