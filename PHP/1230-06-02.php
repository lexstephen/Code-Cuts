<!DOCTYPE html>
<html>
<head>
	<title>Prelab 2</title>
</head>
<link href='http://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>
<style>
	body 			{background-color: #FFF380; color: #000; text-align: left; font-family: 'Signika', sans-serif; 		font-size: 16pt;}
	input, select	{font-size: 42pt; text-transform: lowercase; border-radius: 50%; width: 300px; height: 300px; padding: 100px;}
	.wk5			{color: #F62817; font-size: 14pt; text-transform: lowercase;}
	hr				{color: #FBB917; background-color: navy; height: 11px;}
</style>
<body>

<?php

	// checks if a number is even
	function isEven($val) {
		return ($val % 2 == 0);
	}
	
	// adds an array of numbers up
	// parameters can be even, odd or all
	// build an option in the future to start and stop at specific indexes
	function totalWhat($numbers,$what) {
		$result = 0;
		foreach ($numbers as $num) {
			switch ($what) {
				case 'even': 
					(isEven($num))?$result += $num:"";
					break;
				case 'odd': 
					!(isEven($num))?$result += $num:"";
					break;
				case 'all': 
					$result += $num;
					break;
				default:
					break;
			}
		}
		return "$what numbers total: $result";
	}
	
	// copy all even numbers into a new array 
	function copyEven($array) {
		$tempArray = array();
		
		for ($x = 0; $x < count($array); $x++) 
			if (isEven($array[$x]))
				$tempArray[] = $array[$x];
		
		return $tempArray;
	}
	
	// create a list of 10 random numbers from 1-100
	function this_builds_the_list() {
		$vals = array();
		
		for ($i = 0; $i < 10; $i++) {
			$vals[] = rand(1,100);
		}
		
		return $vals;
	}
	
	// print the array of random numbers
	function this_prints_the_list($built) {
		for ($j = 0; $j < count($built); $j++) {
				echo $built[$j] . ' ';
		}
	}
	
	
	// store the random numbers in a variable to send to the other functions
	$theList = this_builds_the_list();
	
	// store the even numbers in a variable to send to the other functions
	$evenList = copyEven($theList);
	
	// print all random numbers
	echo 'Array of random numbers: ';
	echo this_prints_the_list($theList) . '<br>';
	
	// print the even numbers
	echo 'Array of even numbers: ';
	echo this_prints_the_list($evenList) . '<br>';
			
	// total even, odd, then all numbers
	echo totalWhat($theList,'even') . '<br>';
	echo totalWhat($theList,'odd') . '<br>';
	echo totalWhat($theList,'all') . '<br>';
?>

</body>
</html>