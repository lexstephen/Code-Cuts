<?php 
	interface Shape {
		public function moveTo($x,$y);
		public function bounceThat($x);
		public function draw();
	}

	class Circle implements Shape {
		protected $x, $y;
		
		public function moveTo($x,$y) {
				$this->x = $x;
				$this->y = $y;	
		}
		
		// all functions in an interface must be defined
		// comment out bounceThat to see it yell at you
		public function bounceThat($x) {
			$this->x = $x;
			$bigX = $x * 2;
			echo 'Now big x is ' . $bigX . nl2br(PHP_EOL);
		}

		public function draw() {
				echo sprintf("I am a Circle and my x is %s and my y is %s",$this->x,$this->y);
		
		}
	}

		$c = new Circle();
		$c->moveTo(66,99);
		$c->bounceThat(66);
		$c->draw();
	