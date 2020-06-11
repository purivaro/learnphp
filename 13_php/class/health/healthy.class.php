<?php
namespace Health;

// เช็คค่า bmi , ความอ้วน
class Healthy {
	public $height;
	protected $weight;

	// const จะไม่สามารถเปลี่ยนแปลงค่าได้อีก
	const MAX_WEIGHT = 200;
	// static จะเป็นตัวแปรของ Class
	public static $greetings = "รู้ตัวไหม? คุณ";

	function __construct($h=0, $w=0) {
		$this->height = $h;
		if($w > self::MAX_WEIGHT){
			throw new Exception("กรุณาอย่าใส่น้ำหนักเกิน 200");
		}
		$this->weight = $w;
	}

	public function bmi() {
		$h = $this->height/100;
		$bmi = $this->weight/($h*$h);
		return $bmi;
	}

	public function fat() {
		$bmi = $this->bmi();
		if($bmi >= 30) {
			$result = "อ้วนมาก";
		} else if($bmi >= 25) {
			$result = "อ้วน";
		} else if($bmi >= 23) {
			$result = "น้ำหนักเกิน";
		} else if($bmi >= 18.5) {
			$result = "น้ำหนักปกติ เหมาะสม";
		} else {
			$result = "ผอมเกินไป";
		}
		return self::$greetings.$result;
	}
}
?>