<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GET & POST</title>
	<link rel="stylesheet" href="/learnphp/theme/css/bootstrap-theme.css">
</head>
<body class="font-mali">
	<div class="container">
		<div class="row mt-5">
			<div class="col">
				<div class="card">
					<h4 class="card-header bg-danger text-white">Client Side (USER)</h4>
					<div class="card-body">
						<div class="mb-4"><a href="12_serverside.php?nickname=แป้ง&age=23" class="btn btn-primary">กดตรงนี้</a></div>
						<h4>Form POST</h4>
						<form action="12_serverside.php" method="POST">
							<div class="form-group">
								<label for="">ชื่อเล่น</label>
								<input type="text" name="nickname" class="form-control">
							</div>
							<div class="form-group">
								<label for="">อายุ</label>
								<input type="text" name="age" class="form-control">
							</div>
							<div class="form-group">
								<label for="">ส่วนสูง</label>
								<input type="text" name="height" class="form-control">
							</div>
							<button class="btn btn-success" type="submit">บันทึก</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<h4 class="card-header bg-da text-white">Server Side</h4>
					<div class="card-body">
						<?php
							// $_GET = ['nickname'=>'ไก่', 'age'=>'25'];
							print_r($_REQUEST);
							echo "<h4>{$_REQUEST['nickname']}</h4>";
							echo "<h4>{$_REQUEST['age']}</h4>";
							echo "<h4>{$_REQUEST['height']}</h4>";
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>