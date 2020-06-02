<?php
// ##################
// String Functions
// ##################
// https://www.w3schools.com/php/php_ref_string.asp


// strlen() คือ นับความยาวตัวอักษร
// strlen(string)
echo "<p>1. Count String \"Hello\" : ";
echo strlen("Hello");
echo "</p>";


// substr() คือ ตัดข้อความที่ต้องการออกมา
// substr(string,start,length)
// ถ้าค่าติดลบ จะเริ่มจากท้าย
echo "<p>2. substr Hello world: <br>";
echo ",1) :".substr("Hello world",1)."<br>";
echo ",7) :".substr("Hello world",7)."<br>";

echo ",-4) :".substr("Hello world",-4)."<br>";

echo ",0,4) :".substr("Hello world",0,4)."<br>";
echo ",1,8) :".substr("Hello world",1,8)."<br>";

echo ",-5,-2) :".substr("Hello world",-5,-2)."<br>";
echo ",0,-6) :".substr("Hello world",0,-6)."<br>";
echo "</p>";


// strtolower() คือ แปลงตัวอักษรเป็นตัวเล็ก
// strtolower(string)
echo "<p>3. Hello WORLD. : ";
echo strtolower("Hello WORLD.");
echo "</p>";


// str_pad() คือ เติมตัวอักษรทางด้านขวา ให้มีจำนวนอักษรครบตามที่ต้องการ
// str_pad(string,length,pad_string,pad_type)
	// pad_type	Optional. Specifies what side to pad the string.
		// Possible values:

		// STR_PAD_BOTH - Pad to both sides of the string. If not an even number, the right side gets the extra padding
		// STR_PAD_LEFT - Pad to the left side of the string
		// STR_PAD_RIGHT - Pad to the right side of the string. This is default
echo "<p>4. เดิม 15 เติม 0 ให้นับรวมครบ 6 ตัว : ";
echo str_pad("15", 6, "x");
echo "</p>";


// str_replace() คือ แทนที่ข้อความที่ต้องการ
// str_replace(find,replace,string,count)
	// count	Optional. A variable that counts the number of replacements	
echo "<p>5. เปลี่ยนจาก world เป็น Peter : ";
echo str_replace("world","Peter","Hello world!");
echo "</p>";


// nl2br() คือ เปลี่ยนจาก \n เป็น <br>
// nl2br(string)
echo "<p>6. One line.\\nAnother line. : <br>";
echo nl2br("One line.\nAnother line.");
echo "</p>";


// number_format() คือ แปลงเป็นตัวเลขที่มีลูกน้ำคั่นหลักพัน และอาจใส่ทศนิยมก็ได้
// number_format(number,decimals,decimalpoint,separator)
echo "<p>7. 1000000 : <br>";
echo number_format(1000000)."<br>";
echo number_format(1000000,2)."<br>";
echo number_format(1000000,2,",",".")."<br>";
echo "</p>";


// trim() คือ ตัด เว้นวรรค ด้านหน้า ด้านหลังออก
// trim(string)
echo "<p>8. Hello World ! : <br>";
echo "-"." Hello World "."!<br>";
echo "-".trim(" Hello World ")."!<br>";
echo "</p>";


// define() คือ สร้าง constant (ค่าคงที่)
// define(name,value)
define("GREETING","Hello you! How are you today?");
echo "<p>9. GREETING constant : <br>";
echo GREETING;
echo "</p>";


// htmlspecialchars() คือ แปลงจาก tag html เป็นตัวอักษรที่ไม่แสดงผลเป็น html
// htmlspecialchars(string)
echo "<p>10. This is <h1>heading1</h1> text. : <br>";
echo htmlspecialchars("This is <h1>heading1</h1> text.");
echo "</p>";


// htmlspecialchars_decode() คือ แปลงกลับจากตัวอักษรที่ไม่แสดงผล เป็น html tag 
// htmlspecialchars_decode(string,flags)
echo "<p>11. This is &lt;h1&gt;heading1&lt;/h1&gt; text. : <br>";
echo htmlspecialchars_decode("This is &lt;h1&gt;heading1&lt;/h1&gt; text.", ENT_QUOTES);
echo "</p>";


// addslashes() คือ เติม \ ไปหน้า " หรือ ' เพื่อไม่ให้เกิดปัญหาในการเก็บคำนี้ในฐานข้อมูล 
// addslashes(string)
echo "<p>12. What does 'yolo' mean? : ";
echo addslashes("What does 'yolo' mean?");
echo "</p>";


// stripslashes() คือ เอา \ ที่อยู่หน้า " หรือ ' ออก เวลานำคำนี้จากในฐานข้อมูล ออกมาแสดงผล
// stripslashes(string)
echo "<p>13. Who\'s Peter Griffin? : ";
echo stripslashes("Who\'s Peter Griffin?");
echo "</p>";


// md5() คือ เอาข้อความมาเข้ารหัสแบบ MD5
// md5(string)
echo "<p>14. md5(Hello) : ";
echo md5("Hello")."<br>";
echo md5("Hello". time());
echo "</p>";


// password_hash() คือ เอาข้อความมาเข้ารหัสเพื่อสร้างรหัสผ่านอย่างปลอดภัย
// password_hash(string, algo)
		// algo : PASSWORD_DEFAULT, PASSWORD_BCRYPT,..
// https://www.php.net/manual/en/function.password-hash.php
echo "<p>15. mypassword : ";
$hash = password_hash("mypassword123", PASSWORD_DEFAULT);
echo $hash;
echo "</p>";


// password_verify() คือ เอารหัสผ่านมาเช็คว่าตรงกันไหม คำตอบจะเป็น true/false
// password_verify(password, hash)
// https://www.php.net/manual/en/function.password-verify.php
echo "<p>16. mypassword : ";
echo password_verify("mypassword123", $hash) ? "ถูกต้อง" : "ไม่ถูกต้อง";
echo "</p>";
echo "</p>";


// uniqid() คือ สร้างรหัส id ที่ไม่ซ้ำใคร โดยเอาจาก microtime (วันเวลาปัจจุบันแบบ microsecond)
// uniqid(prefix,more_entropy)
	// prefix	Optional. Specifies a prefix to the unique ID (useful if two scripts generate ids at exactly the same microsecond)
	// more_entropy	Optional. Specifies more entropy at the end of the return value. This will make the result more unique. When set to TRUE, the return string will be 23 characters. Default is FALSE, and the return string will be 13 characters long
echo "<p>17. uniqid : ";
echo uniqid()."<br>";
echo uniqid("img_", true);
echo "</p>";


?>