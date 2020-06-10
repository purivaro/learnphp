<?php

class Dietary extends Healthy {
	public $nickname;
	private $age;
	public $gender;

	public function setAge($age) {
		if($age <= 0){
			throw new Exception("กรุณาใส่อายุที่มากกว่า 0");
		}
		$this->age = $age;
	}

	public function showHeight() {
		return $this->getHeight();
	}

	public function getAge() {
		return $this->age;
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