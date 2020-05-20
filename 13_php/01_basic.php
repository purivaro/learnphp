<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Basic PHP</title>
	<link rel="stylesheet" href="/learnphp/theme/css/bootstrap-theme.css">
</head>
<?php 
	$name = "จินตนา";
	$x = 1;
?>
<body class="font-<?php echo "mali";?>">
	<div class="container">
		<div class="row mt-5"<?php echo ">"; ?> 
			<<?php echo "d"; ?>iv class="col">
				<h1>สวัสดีครับ ผมชื่อ<?php echo "โทนี่"; ?></h1>
				<h1>สวัสดีค่ะ หนูชื่อ<?php echo $name; ?></h1>
				<h<?php echo $x; ?>>พวกเราคือ <?php echo "โทนี่ และ".$name;?></h<?php echo $x; ?>>
				<h<?php echo $x; ?>>พวกเราคือ <?php echo "โทนี่ และ{$name}";?></h<?php echo $x; ?>>
				<h1>
					<?php 
						$a = "เจน";
						$b = "นุ่น";
						$c = "โบว์";
						echo "หนูชื่อ{$a} มากับ{$b} แล้วก็มากับ{$c}";
					?>
				</h1>
			</div>
		</div>
	</div>
</body>
</html>