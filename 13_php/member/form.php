<?php require $_SERVER['DOCUMENT_ROOT']."/learnphp/13_php/auth/auth.php";?>
<?php require $_SERVER['DOCUMENT_ROOT']."/learnphp/vendor/autoload.php";?>
<?php
use App\Model\Person;
use App\Model\Club;
use App\Model\Ref;

if($_REQUEST['action']=='edit') {
	$personObj = new Person;
	$person = $personObj->getPersonById($_REQUEST['id']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ระบบข้อมูลสมาชิก</title>
	<link rel="stylesheet" href="/learnphp/theme/css/bootstrap-theme.css">
</head>
<body class="font-mali">
	<?php require $_SERVER['DOCUMENT_ROOT']."/learnphp/13_php/inc/components/navbar.php";?>
	<div class="container">
		<div class="row mt-5">
			<div class="col">
				<div class="card mb-3">
					<div class="card-header bg-primary text-white d-flex justify-content-between">
						<h4>แบบฟอร์ม<?php echo ($_REQUEST['action']=='edit') ? "แก้ไขข้อมูลสมาชิก" : "เพิ่มสมาชิกใหม่";?></h4>
						<a href="index.php" class="btn btn-light">ย้อนกลับ</a>
					</div>
					<div class="card-body">
						<form action="save.php" method="post" enctype="multipart/form-data">
							<input type="hidden" name="action" value="<?php echo ($_REQUEST['action']=='edit') ? "edit" : "add";?>">
							<input type="hidden" name="id" value="<?php echo $person['id']; ?>">
							<div class="form-group">
								<label for="firstname">ชื่อจริง</label>
								<input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo $person['firstname']; ?>">
							</div>
							<div class="form-group">
								<label for="nickname">ชื่อเล่น</label>
								<input type="text" name="nickname" id="nickname" class="form-control" value="<?php echo $person['nickname']; ?>">
							</div>
							<div class="form-group">
								<label for="dob">วันเกิด</label>
								<input type="text" name="dob" id="dob" class="form-control" value="<?php echo $person['dob']; ?>">
							</div>
							<div class="form-group">
								<label for="gender_id">เพศ</label>
								<select name="gender_id" class="form-control">
									<option value="">เลือก</option>
									<?php
										$refObj = new Ref;
										$genders = $refObj->getRefsByGroupId(2);
										foreach($genders as $gender) {
											$selected = ($gender['id'] == $person['gender_id']) ? "selected" : "";
											echo "
												<option value='{$gender['id']}' {$selected} >{$gender['title']}</option>
											";
										}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="club_id">ชมรม</label>
								<select name="club_id" class="form-control">
									<option value="">เลือก</option>
									<?php
										$clubObj = new Club;
										$clubs = $clubObj->getAllClubs();
										foreach($clubs as $club) {
											$selected = ($club['id'] == $person['club_id']) ? "selected" : "";
											echo "
												<option value='{$club['id']}' {$selected} >{$club['title']}</option>
											";
										}
									?>
								</select>								
							</div>
							<div class="form-group">
								<label for="salary">เงินเดือน</label>
								<input type="text" name="salary" id="salary" class="form-control" value="<?php echo $person['salary']; ?>">
							</div>
							<div class="form-group">
								<label for="upload">รูปภาพ</label>
								<input type="file" name="upload" id="upload" class="form-control">
								<input type="hidden" name="avatar" id="avatar" class="form-control" value="<?php echo $person['avatar']; ?>">
							</div>
							<button class="btn btn-success" type="submit">บันทึก</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>	
</body>
</html>