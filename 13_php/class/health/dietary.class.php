<?php
namespace Health;

// trait คือ Class เสริม แบบที่สามารถเรียกเข้ามาเติมบ้านได้เลยทันที ซึ่งจะมีกี่อันก็ได้ โดยใช้คำสั่ง use 
trait Quote {

	public static function cheers() {
		echo "<h2>ขยันมากๆเลย พยายามเข้านะ</h2>";
	}									

	public function bye() {
		echo "<h2>แล้วเจอกันคลิปหน้า อย่าลืมกดไลค์ กดแชร์ กดติดตาม(Subscribe) นะ</h2>";
	}									
	
}

// เช็คค่า bmr , tdee
class Dietary extends Healthy {

	use Quote;

	public $nickname;
	private $age;
	public $gender;

	function __construct($h, $w, $nickname=null, $age=null, $gender="m") {
		$this->nickname = $nickname;
		$this->age = $age;
		$this->gender = $gender;
		parent::__construct($h, $w);
	}

	public function setAge($age) {
		if($age <= 0){
			throw new Exception("กรุณาใส่อายุที่มากกว่า 0");
		}
		$this->age = $age;
	}

	public function getAge() {
		return $this->age;
	}

	public function getWeight() {
		return $this->weight;
	}

	public function bmr() {
		if($this->gender == "m") {
			$bmr = 66 + (13.7*$this->weight)+(5*$this->height)-(6.8*$this->age);
		} else {
			$bmr = 655 + (9.6*$this->weight)+(1.8*$this->height)-(4.7*$this->age);
		}
		return $bmr;
	}							

	public function tdee($exerise) {
		/*
		Case
			1 นั่งทำงานอยู่กับที่ และไม่ได้ออกกำลังกายเลย = BMR x 1.2
			2 ออกกำลังกายหรือเล่นกีฬาเล็กน้อย ประมาณอาทิตย์ละ 1-3 วัน = BMR x 1.375
			3 ออกกำลังกายหรือเล่นกีฬาปานกลาง ประมาณอาทิตย์ละ 3-5 วัน = BMR x 1.55
			4 ออกกำลังกายหรือเล่นกีฬาอย่างหนัก ประมาณอาทิตย์ละ 6-7 วัน = BMR x 1.725
			5 ออกกำลังกายหรือเล่นกีฬาอย่างหนักทุกวันเช้าเย็น = BMR x 1.9
		*/
		switch ($exerise) {
			case 1:
				$tdee = $this->bmr()*1.2;
			break;
			case 2:
				$tdee = $this->bmr()*1.375;
			break;
			case 3:
				$tdee = $this->bmr()*1.55;
			break;
			case 4:
				$tdee = $this->bmr()*1.725;
			break;
			case 5:
				$tdee = $this->bmr()*1.9;
			break;
		}
		
		return $tdee;
	}

}
?>