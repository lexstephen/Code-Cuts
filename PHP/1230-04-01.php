<!DOCTYPE html>
<html>
<head>
	<title>Lab Manual 3</title>
</head>
<link href='http://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>
<style>
	body 		{background-color: #FFF380;
					color: #000;
					text-align: center;
					font-family: 'Signika', sans-serif;
					font-size: 12pt;}
	.wk5			{color: #F62817; font-size: 14pt; text-transform: lowercase;}
	hr				{color: #FBB917; background-color: #FBB917; height: 3px;}
</style>
<body>

<?php
	print "<h1 class=\"wk5\">If Statement - Odd or Even</h1>";
	
	$number = 2323;
	if($number%2 == 0)
		echo "$number is an even number<br>";
	else
		echo "$number is an odd number<br>";
		
	echo "<hr>";
	
	print "<h1 class=\"wk5\">Ternary Operator - Odd or Even</h1>";
	
	echo ($number%2 == 0)?"$number is still an even number<br>":"$number is still an odd number<br>";
	
	echo "<hr>";
	
	print "<h1 class=\"wk5\">If Statement - Which Grade?</h1>";
	
	$mark = 77;
	if ($mark >= 90)
		$letterGrade = 'an A+';
	else if ($mark >= 80)
		$letterGrade = 'an A';
	else if ($mark >= 70)
		$letterGrade = 'a B';
	else if ($mark >= 60)
		$letterGrade = 'a C';
	else if ($mark >= 50)
		$letterGrade = 'a D';
	else
		$letterGrade = 'another trip';
	
	echo "Your mark, $mark, earned you $letterGrade.<br>";
	
	echo "<hr>";
	print "<h1 class=\"wk5\">Switch Statement - Which Grade?</h1>";
	
	switch($mark) {
		case $mark >= 90:
			$letterGrade = 'an A+';
			break;
		case $mark >= 80:
			$letterGrade = 'an A';
			break;
		case $mark >= 70:
			$letterGrade = 'a B';
			break;
		case $mark >= 60:
			$letterGrade = 'a C';
			break;
		case $mark >= 50:
			$letterGrade = 'a D';
			break;
		default:
			$letterGrade = 'another trip';
			break;
	}
	
	echo "Your mark, $mark, still earned you $letterGrade.";
	
	echo "<hr>";
	print "<h1 class=\"wk5\">While Loop - Start and End variables</h1>";
	
	$x = 11;
	$y = 14;
	
	// ensure y is the higher of the two variables
		if ($y < $x) {
			$temp = $x;
			$x = $y;
			$y = $temp;
		}
		
	print "$y is bigger than $x<br>";
	
	
	while ($x <= $y) {
		print "\n$x <br>";
		$x++;
	}
	
	echo "<hr>";
	print "<h1 class=\"wk5\">Do While Loop - Start and End variables</h1>";
	
	$x = 1;
	$y = 7;
	
	do {
		print "\n$x <br>";
		$x++;
		}
	while ($x <= $y);
	
	echo "<hr>";
	print "<h1 class=\"wk5\">For Loop - Start and End variables</h1>";
		
	$x = 7;
	$y = 12;
	
	for ($x; $x <= $y; $x++) {
		print "\n$x <br>";
	}
	
	echo "<hr>";
	print "<h1 class=\"wk5\">\$_GET Form manipulation</h1>";
	
	print "<form>
			<input type=\"text\" name=\"n1\" placeholder=\"Number 1\">
			<select name=\"doWhat\">
				<option value=\"+\">+</option>
				<option value=\"-\">-</option>
				<option value=\"x\">x</option>
				<option value=\"/\">/</option>
			</select>
			<input type=\"text\" name=\"n2\" placeholder=\"Number 2\">
			<input type=\"submit\">
		</form>";
		
	if($_GET) {
		if(isset($_GET['n1'])) {
			$n1 = $_GET['n1'];
			$n2 = $_GET['n2'];
			$doWhat = $_GET['doWhat'];
			
			if ($doWhat == "+")
				$answer = $n1 + $n2;
			else if ($doWhat == "-")
				$answer = $n1 - $n2;
			else if ($doWhat == "x")
				$answer = $n1 * $n2;
			else if ($doWhat == "/")
				$answer = $n1 / $n2;
				
			print "<br>$n1 $doWhat $n2 is $answer";
		}
	}
?>

</body>
</html>