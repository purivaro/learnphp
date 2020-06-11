<?php
// ฟังก์ชันนี้ทำงานทันทีเมื่อมีการเรียกใช้ class อัตโนมัติ
spl_autoload_register(function($className) {

	$className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
	include_once $_SERVER["DOCUMENT_ROOT"]."/learnphp/13_php/class/".$className . '.class.php';

});
