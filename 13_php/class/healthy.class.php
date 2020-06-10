<?php

class Healthy {
	public $height;
	public $weight;

	function __construct($h=0, $w=0) {
		$this->height = $h;
		$this->weight = $w;
	}

	protected function getHeight() {
		return $this->height;
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
		return $result;
	}
}
?>