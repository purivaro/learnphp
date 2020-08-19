<?php require $_SERVER['DOCUMENT_ROOT']."/learnphp/13_php/auth/auth.php";?>
<?php require $_SERVER['DOCUMENT_ROOT']."/learnphp/vendor/autoload.php";?>
<?php
// $_GET , $_REQUEST
use App\Model\Person;
$personObj = new Person;

// var_dump($_FILES);
// echo $_FILES['upload']['tmp_name'];

// 
if($_FILES['upload']['tmp_name']) {
	$ext = end(explode(".", $_FILES['upload']['name'])); 
	$avatar = "/learnphp/13_php/member/avatars/" . md5(uniqid()) . ".{$ext}";
	move_uploaded_file($_FILES['upload']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$avatar);
}

// exit;

if($_REQUEST['action']=='delete'){
	
	// เช็คว่ามีรูปไหม?
	$person = $personObj->getPersonById($_REQUEST['id']);
	if($person['avatar']) {
		// ถ้ามีก็ ลบรูปเก่า ด้วย
		unlink($_SERVER['DOCUMENT_ROOT'].$person['avatar']);
	}
	// ลบข้อมูลคนนี้โดยส่ง id ไป
	$personObj->deletePerson($_REQUEST['id']);
}
elseif($_REQUEST['action']=='edit'){
	$person = $_REQUEST;
	unset($person['action']);

	// เช็คว่าถ้ามีการ upload รูปใหม่มาไหม ถ้ามีก็ให้ใช้ $avatar ที่ได้จากข้างบน แต่ถ้าไม่ก็ใช้ข้อมูลเดิม
	if($_FILES['upload']['tmp_name']) {
		if($person['avatar']){
			// ลบรูปเก่า
			unlink($_SERVER['DOCUMENT_ROOT'].$person['avatar']);
		}
		$person['avatar'] = $avatar;
	}

	$personObj->updatePerson($person);
}
elseif($_REQUEST['action']=='add'){
	$person = $_REQUEST;
	unset($person['action']);
	unset($person['id']);

	$person['avatar'] = $avatar;
	$personObj->addPerson($person);
}


header("location: index.php");
?>