<?php
// ##################
// Array Functions
// ##################
// https://www.w3schools.com/php/php_ref_array.asp

// print_r() คือ เขียนข้อมูลสมาชิกใน array ทั้งหมดออกมา
// print_r(array)
$colors = ["red", "green"];
echo "<p>1. ";
print_r($colors);
echo "</p>";


// array_push() คือ เติมข้อมูลเข้าไปใน array
// array_push(array, value1, value2, ...)
array_push($colors, "blue");
echo "<p>2. ";
print_r($colors);
echo "</p>";


// การเติมข้อมูลเข้าไปใน array เขียนได้อีกแบบ โดยเอา array นั้นมาเติมกุญแจ แต่ไม่ไข แล้วให้เท่ากับข้อมูลที่จะเติมไป จะมีผลแบบเดียวกับ array_push
$colors[] = "yellow";
echo "<p>3. ";
print_r($colors);
echo "</p>";


// isset() คือ เช็คว่ามีการตั้งค่าให้ตัวแปรไหม? แม้เป็น 0 ก็ถือว่าตั้งค่า (ถ้าไม่ตั้งค่าจะเป็น null) โดยจะได้คำตอบเป็น true / false
echo isset($colors)? "<p>4. Set Colors</p>": "<p>4. Not set colors</p>";
$x = 0;
echo ($x) ? "<p>5. (0) true</p>" : "<p>5. (0) false</p>";
echo isset($x) ? "<p>6. isset(0) true</p>" : "<p>6. isset(0) false</p>";
echo isset($y) ? "<p>7. isset(null) true</p>" : "<p>7. isset(null) false</p>";


// in_array() คือ เช็คว่ามี ค่านี้ ใน arrays นี้ไหม? โดยจะได้คำตอบเป็น true / false
// in_array(search, array)
echo in_array("red", $colors) ? "<p>8. red is in colors</p>": "<p>8. red is not in colors</p>";


// count() คือ นับจำนวนสมาชิกใน arrays
// count(array, mode)
	// mode	Optional. Specifies the mode. Possible values:
	// 	0 - Default. Does not count all elements of multidimensional arrays
	// 	1 - Counts the array recursively (counts all the elements of multidimensional arrays)
echo "<p>9. Count Colors : ";
echo count($colors);
echo "</p>";


// end() คือ ดึงค่าของสมาชิกตัวสุดท้ายใน arrays ออกมา
// end(array)
echo "<p>10. Last Colors : ";
echo end($colors);
echo "</p>";


// implode() คือ เอา Arrays มาทำเป็นข้อความ(String) โดยใช้ตัวคั่นที่กำหนด
// implode(separator,array)
echo "<p>11. Colors : ";
echo implode(",",$colors);
echo "</p>";


// explode() (ตรงข้ามกับ implode) คือ เอาข้อความ(String) Arrays มาทำเป็น โดยดูจากตัวคั่นที่กำหนด
// explode(separator,string,limit)
$text = "ข้าวผัด,หมูปิ้ง,ปลาทู"; 
$foods = explode(",", $text);
echo "<p>12. Foods : ";
print_r($foods);
echo "</p>";


// array_column() คือ ดึงข้อมูลจาก column(key) ที่ต้องการจาก multidimensional array มาสร้างเป็น array 
// array_column(array, column_key, index_key)
$members = [
	["name"=>"วุฒิ", "weight"=>70, "height"=>170],
	["name"=>"ไก่", "weight"=>62, "height"=>168],
	["name"=>"มิน", "weight"=>60, "height"=>156],
	["name"=>"กาน", "weight"=>55, "height"=>160],
];

$weights = array_column($members, "weight"); // [70, 62, 60, 55]
echo "<p>13. Array of weight : ";
print_r($weights);
echo "</p>";

$heights = array_column($members, "height", "name"); // ["วุฒิ"=>70, "ไก่"=>62, "มิน"=>60, "กาน"=>55]
echo "<p>13. Array of height with name : ";
print_r($heights);
echo "</p>";


// array_sum() คือ เอาสมาชิกทั้งหมดใน array มาบวกกัน
// array_sum(array)
echo "<p>14. Sum of weight : ";
echo array_sum($weights);
echo "</p>";
// เขียนรวมได้เป็น 
// echo array_sum(array_column($members, "weight"));


// array_diff() คือ เอาสมาชิกใน array มาลบออกจากกัน
// array_diff(array1, array2, array3, ...)
	// array1	Required. The array to compare from ตัวตั้งต้น
	// array2	Required. An array to compare against ตัวหักออก
	// array3,...	Optional. More arrays to compare against ตัวหักออก (เสริม)
$a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2=["e"=>"red","f"=>"green","g"=>"blue"];

$result=array_diff($a1,$a2);
echo "<p>15. Diff : ";
print_r($result);
echo "</p>";


// array_combine() คือ เอาสมาชิกใน array 2 อัน มาทำเป็น key value กัน แล้วกลายเป็น array ใหม่
// array_combine(keys, values)
	// keys	Required. Array of keys
	// values	Required. Array of values
$fname=["Peter","Ben","Joe"];
$age=["35","37","43"];
$c=array_combine($fname, $age);
echo "<p>16. Combine : ";
print_r($c);
echo "</p>";

// array_unique คือ ตัดสมาชิกที่มีค่าซ้ำออก
// array_unique(array, sorttype)
	// sorttype	Optional. Specifies how to compare the array elements/items. Possible values:
		// 	SORT_STRING - Default. Compare items as strings
		// 	SORT_REGULAR - Compare items normally (don't change types)
		// 	SORT_NUMERIC - Compare items numerically
		// 	SORT_LOCALE_STRING - Compare items as strings, based on current locale	
$a=["a"=>"red","b"=>"green","c"=>"red"];
echo "<p>17. Unique : ";
print_r(array_unique($a));
echo "</p>";




// var_dump คือ แสดงค่าทั้งหมดของตัวแปรออกมาอย่างละเอียด
$a=["a"=>"red","b"=>"green","c"=>"red"];
echo "<p>18. var_dump : ";
var_dump($a);
echo "</p>";


// json_encode คือ แปลงจาก array เป็น json
// json_encode(array)
$a=["a"=>"red","b"=>"green","c"=>"red"];
echo "<p>19. json_encode : ";
echo json_encode($a);
echo "</p>";


// json_decode คือ แปลงจาก json เป็น array
echo "<p>20. json_decode : ";
$data = json_decode('{"a":"red","b":"green","c":"red"}', true);
print_r($data);
echo "</p>";


// http_build_query() คือ เอา array มาสร้างเป็น query string
// http_build_query(array)
echo "<p>21. http_build_query : ";
echo http_build_query($a);
echo "</p>";

?>