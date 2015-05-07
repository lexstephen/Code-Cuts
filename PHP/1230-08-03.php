<?php
	abstract class Shape {
		public $x, $y;
	
		public function moveTo($x,$y) {
			$this->x = $x;
			$this->y = $y;
		}
		
		public function bounceThat($x) {
			$this->x = $x;
			$bigX = $x * 2;
		}
		
		abstract public function draw();
	}
	
	class Circle extends Shape {
		public function draw() {
			echo sprintf("I am a Circle and my x is %s and my y is %s<br>",$this->x,$this->y);
		}
	// functions inside an abstract class do not need to be defined
	// I did not add bounceThat but it did not yell at me
	}
	
	class Rectangle extends Shape {
		public function draw() {
			echo sprintf("I am a Rectangle and my x is %s and my y is %s<br>",$this->x,$this->y);
		}
	}
	
	$c = new Circle();
	$c->moveTo(66,99);
	$c->draw();
	
	$r = new Rectangle();
	$r->moveTo(44,55);
	$r->draw();
	
	// Cannot instantiate Shape directly because it is only an abstract class
	// $a = new Shape();