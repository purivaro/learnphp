<?php require $_SERVER['DOCUMENT_ROOT']."/learnphp/vendor/autoload.php";?>
<?php
use App\Model\User;

$user_obj = new User;

$result = $user_obj->checkUser($_POST);

if($result){
	header("location: /learnphp/13_php/member/index.php");
} else {
	header("location: login.php?msg=error");
}
?>