<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Function</title>
	<link rel="stylesheet" href="/learnphp/theme/css/bootstrap-theme.css">
</head>
<body class="font-mali">
	<div class="container">
		<div class="row mt-5">
			<div class="col">
				<div class="card">
					<h4 class="card-header bg-primary text-white">Function Example</h4>
					<div class="card-body">
						<?php
							$w = 5;
							$l = 20;
							$a = cal_area($w, $l);
							
							echo "<h2>กว้าง {$w} วา ยาว {$l} วา</h2>";
							echo "<h1 class='text-info'>คิดเป็น {$a} ตารางวา</h1>";

							$w = 7;
							$l = 12;
							$a = cal_area($w, $l);
							
							echo "<h2>กว้าง {$w} วา ยาว {$l} วา</h2>";
							echo "<h1 class='text-info'>คิดเป็น {$a} ตารางวา</h1>";

							$w = 70;
							$h = 178;
							$b = cal_bmi($w, $h);
							$f = cal_fat($b);

							echo "<h2 class='mt-5'>ฉันหนัก {$w} กก. และสูง {$h} ซม.</h2>";
							echo "<h1>ค่า BMI คือ {$b}</h1>";
							echo "<h1 class='text-danger'>ฉัน{$f}</h1>";
						?>
						<table class="table mt-5">
							<thead>
								<tr>
									<th>#</th>
									<th>ชื่อ</th>
									<th>น้ำหนัก</th>
									<th>ส่วนสูง</th>
									<th>BMI</th>
									<th>ผลลัพท์</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$members = [
										["name"=>"วุฒิ", "weight"=>65, "height"=>170],
										["name"=>"ไก่", "weight"=>46, "height"=>168],
										["name"=>"มิน", "weight"=>40, "height"=>156],
										["name"=>"กาน", "weight"=>55, "height"=>160],
										["name"=>"แป้ง", "weight"=>47, "height"=>165],
									];
									$n = 0;
									foreach($members as $member) {
										$n++;
										$bmi = cal_bmi($member["weight"], $member["height"]);
										$res = cal_fat($bmi);
										echo "
											<tr>
												<td>{$n}</td>
												<td>{$member['name']}</td>
												<td>{$member['weight']}</td>
												<td>{$member['height']}</td>
												<td>{$bmi}</td>
												<td>{$res}</td>
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
<?php
	function cal_area($width, $length) {
			$area = $width*$length;
			return $area;
	}

	function cal_bmi($weight, $height) {
		$height = $height/100; // cm to m
		$bmi = $weight / ($height * $height);
		return $bmi;
	}

	function cal_fat($bmi) {
		if($bmi < 18.5) {
			$result = "น้ำหนักน้อย / ผอม";
		} else if($bmi < 23) {
			$result = "ปกติ (สุขภาพดี)";
		} else if($bmi < 25) {
			$result = "ท้วม / โรคอ้วนระดับ 1";
		} else if($bmi < 30) {
			$result = "อ้วน / โรคอ้วนระดับ 2";
		} else {
			$result = "อ้วนมาก / โรคอ้วนระดับ 3";
		}
		return $result;
	}
?>