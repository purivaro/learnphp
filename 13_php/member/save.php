<?php require $_SERVER['DOCUMENT_ROOT']."/learnphp/vendor/autoload.php";?>
<?php
// $_GET , $_REQUEST
use App\Model\Person;
$personObj = new Person;

if($_REQUEST['action']=='delete'){
	$personObj->deletePerson($_REQUEST['id']);
}
elseif($_REQUEST['action']=='edit'){
	$person = $_REQUEST;
	unset($person['action']);
	$personObj->updatePerson($person);
}
elseif($_REQUEST['action']=='add'){
	$person = $_REQUEST;
	unset($person['action']);
	unset($person['id']);
	$personObj->addPerson($person);
}


header("location: index.php");
?>