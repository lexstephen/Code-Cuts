<!DOCTYPE html>
<html>
<head>
	<title>Week 10</title>
</head>
<style>
	body 			{background-color: #fff; color: #000; text-align: left; font-family: Verdana, sans-serif; font-size: 12pt;}
	input, select	{font-size: 16pt; border-radius: 50%; width: 100px; padding: 4px;}
	hr				{color: #FBB917; background-color: navy; height: 2px;}
	.red 			{color: red;}
	.blue			{color: blue;}
	.grey			{color: gray;}
</style>
<body>

<?php
	class theParentClass {	
		private $a;
		 
		public function __construct($a = 3) {
			$this->a = $a;
			$this->functionOne($a); // this will call functionOne with a value of 3
		}
		
		public function getA() { return $this->a; }
		public function setA($a) {$this->a = $a; }
		
		public function functionOne($a = 12) {
		// nl2br(PHP_EOL) builds a <br> into the code
			echo 'Class is ' . __CLASS__ . '<br> Function is' . __FUNCTION__ . '<br>Value is ' . $a . nl2br(PHP_EOL);
			return $this;
		}
		
		public function functionTwo() {
			echo __CLASS__ . ' ' . __FUNCTION__ . ' ' . PHP_EOL;
			return $this;
		}
		
		public function __destruct() {
			echo "<p class=\"grey\">The destructor runs at the end of the page or when the class is set to null</p><hr>" . PHP_EOL;
		}
	}

	class theChildClass extends theParentClass {
		public function functionTwo() {
			echo "Child class: " .  __CLASS__ . ' <br>Function: ' . __FUNCTION__ . ' ' . PHP_EOL;
			return $this;
		}
	}

	// Instantiate a new theParentClass to $f
	// functionOne is called inside it so it will automatically display
	// overwriting default value of $a
	$f = new theParentClass(999);

	echo '<hr style="background-color: green;">';
	
	// call functionOne with an overridden value of 542
	// arrow always means the object's property / method
	$f->functionOne(542); 
	
	// set $f to null to launch its destructor
	echo '<p>And now I set $f to null so it self destructs</p>';
	$f = null;
	
	// Instantiate a new theChildClass to $b
	// default value of 3 is sent to the function inside the constructor
	$b = new theChildClass();
	
	echo '<hr style="background-color: green;">';
	
	// chained method call 
	// call two methods at once!
	$b->functionOne()->functionTwo(); 
	echo '<hr style="background-color: green;">';
	
	// or just call functionTwo by itself
	$b->functionTwo(); 
	
	echo '<p>I never set $b to null so it will just self-destruct at the end</p>';
?>

</body>
</html>