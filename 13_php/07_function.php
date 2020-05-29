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
							$l = 10;
							$a = cal_area($w, $l);
							show_area($w, $l, $a);

							$w = 8;
							$l = 20;
							$a = cal_area($w, $l);
							show_area($w, $l, $a);

							$w = 9;
							$l = 11;
							$a = cal_area($w, $l);
							show_area($w, $l, $a);

							$weight = 75;
							$height = 173;
							$bmi = cal_bmi($weight, $height);
							$result = cal_fat($bmi);
							show_fat($weight, $height, $bmi, $result);


							$weight = 60;
							$height = 178;
							$bmi = cal_bmi($weight, $height);
							$result = cal_fat($bmi);
							show_fat($weight, $height, $bmi, $result);
						?>

						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>ชื่อ</th>
									<th>น้ำหนัก</th>
									<th>สูง</th>
									<th>BMI</th>
									<th>ผลลัพท์</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$members = [
										["name"=>"วุฒิ", "weight"=>70, "height"=>170],
										["name"=>"ไก่", "weight"=>62, "height"=>168],
										["name"=>"มิน", "weight"=>60, "height"=>156],
										["name"=>"กาน", "weight"=>55, "height"=>160],
									];
									$n = 0;
									foreach($members as $member) {
										$n++;
										$bmi = cal_bmi($member['weight'], $member['height']);
										$result = cal_fat($bmi);
										echo "
											<tr>
												<td>{$n}</td>
												<td>{$member['name']}</td>
												<td>{$member['weight']}</td>
												<td>{$member['height']}</td>
												<td>{$bmi}</td>
												<td>{$result}</td>
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

	function show_area($width, $length, $area) {
		echo "<h2>กว้าง {$width} วา ยาว {$length} วา</h2>";
		echo "<h1 class='mb-5'>เท่ากับพื้นที่ {$area} ตารางวา</h1>";
	}

	function cal_bmi($weight, $height) {
		$height = $height/100;
		$bmi = $weight/($height*$height);
		return $bmi;
	}

	function cal_fat($bmi) {
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

	function show_fat($weight, $height, $bmi, $result) {
		echo "<h2 class='mb-2'>น้ำหนัก {$weight} กก. สูง {$height} ซม. ได้ค่า BMI เป็น {$bmi}</h2>";
		echo "<h1 class='mb-5'>คุณ{$result}</h1>";
	}
?>