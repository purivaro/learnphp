<?php
// ##################
// Date Functions
// ##################
// https://www.w3schools.com/php/php_ref_date.asp

// set Timezone
// date_default_timezone_set('Europe/Berlin');
date_default_timezone_set('Asia/Bangkok');

// timestamp เป็นค่าตัวเลขที่นับจำนวนเป็นวินาทีตั้งแต่วันที่ 1 มกราคม 1970

// mktime() คือ สร้าง timestamp จากวันเวลาที่ต้องการ หรือถ้าไม่ใส่ก็จะเป็นวันเวลาปัจจุบัน
// mktime(hour, minute, second, month, day, year, is_dst)
echo "<p>1. Present Timestamp : ";
$timestamp_now = mktime();
echo $timestamp_now;
echo "</p>";

echo "<p>2. mktime(9, 15, 30, 4, 22, 2010) Timestamp : ";
$timestamp_22apr = mktime(9, 15, 30, 4, 22, 2010);
echo $timestamp_22apr;
echo "</p>";


// strtotime() คือ สร้าง timestamp จากวันเวลาที่ต้องการ เขียนเป็นภาษามนุษย์ได้เลย
// https://www.php.net/manual/en/datetime.formats.relative.php
// https://www.ninenik.com/content.php?arti_id=800

// strtotime(time, now); 
	// time	Required. Specifies a date/time string
	// now	Optional. timestamp ของวันเวลาตั้งต้น (ถ้าไม่ใส่จะเป็นวันเวลาปัจจุบัน)

echo "<p>3. strtotime : <br>";
echo("now : ".strtotime("now") . "<br>");
echo("3 October 2005 : ".strtotime("3 October 2005") . "<br>");
$oct3_addweek = strtotime("+1 week", strtotime("3 October 2005"));
$oct3_addweek2 = strtotime("3 October 2005 +1 week");
echo("3 October 2005 +1 week : ". $oct3_addweek . "<br>");
echo("+5 hours : ".strtotime("+5 hours") . "<br>");
echo("+1 week : ".strtotime("+1 week") . "<br>");
echo("-2 week : ".strtotime("-2 week") . "<br>");
echo("+1 week 3 days 7 hours 5 seconds : ".strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");
echo("next Monday : ".strtotime("next Monday") . "<br>");
echo("last Sunday : ".strtotime("last Sunday"));
echo "</p>";

// date() คือ วันเวลาปัจจุบัน หรือวันเวลาตาม timestamp ที่กำหนด
// date(format, timestamp)
// https://www.w3schools.com/php/func_date_date.asp
echo "<p>4. Now : ";
echo date("Y/m/d H:i:s");
echo "</p>";

echo "<p>5. Date 22 Apr : ";
echo date("Y-m-d H:i:s", mktime(9, 15, 30, 4, 22, 2010));
echo "</p>";

echo "<p>6. 5 March 2020 : ";
echo date("d F Y", strtotime("5 March 2020") );
echo "</p>";

echo "<p>7. 5 March 2020 +1 week : ";
echo date("d F Y", strtotime("5 March 2020 +1 week") );
echo "</p>";

echo "<p>8. now +1 week : ";
echo date("d F Y", strtotime("+1 week"));
echo "</p>";

echo "<p>9. yesterday : ";
echo date("Y-m-d", strtotime("yesterday"));
echo "</p>";

echo "<p>10. last day of next month : ";
echo date("Y-m-d", strtotime("last day of next month"));
echo "</p>";

echo "<p>11. 2 days ago : ";
echo date("Y-m-d", strtotime("2 days ago"));
echo "</p>";

echo "<p>12. Now : ";
echo date("Y-m-d H:i:s", strtotime("now"));
echo "</p>";

echo "<p>13. Today : ";
echo date("Y-m-d H:i:s", strtotime("today"));
echo "</p>";


// date_create() คือ สร้าง Datetime object จากวันที่กำหนด
// date_create(time, timezone)
$date1=date_create("2013-03-15", timezone_open("Asia/Bangkok")); 
$date2=date_create("2013-04-12");
// date_diff() หาความต่างระหว่าง 2 วัน ที่เป็น Datetime object
$diff=date_diff($date1,$date2);
echo "<p>14. Date diff : ";
echo $diff->format("%R%a days");
?>