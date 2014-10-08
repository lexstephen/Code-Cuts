<!DOCTYPE html>
<html>
<head>
	<title>Fun with Functions 2: Electric Bugaloo</title>
</head>
<style>
	body 		{background-color: #fff;
					color: #000;
					text-align: left;
					font-size: 12pt;}
	#array			{color: red;}
</style>
<body>

<h1 id="array">It's a shame about Array</h1>

<script>
	var lexRay =  [12, 13, 14];
	document.write(lexRay[1]);
</script>
<?php
	
	// $thisArray = array();			declare an array this way
	$thisArray = [1,2,3,4,5];		// 	or this way

	$thisArray[count($thisArray)] = 10;		// stick a value at the end of the array
	$thisArray[] = '22';					// or this way
	
	echo '<hr> Var Dump<br>';
	
	var_dump($thisArray);					// show indexes, data types and values
	
	echo '<hr> Print_R<br>';
	
	print_r($thisArray);					// show indexes and values
	
	echo '<hr> Loop through the array<br>';
	
	for ($x = 0; $x < sizeof($thisArray); $x++) {		// size of finds you the limit
		echo $thisArray[$x] . "<br>";
	}
		echo '<br><hr>Foreach as Array<br>';

	foreach ($thisArray as $x) {
		echo $x . "<br>";
	}
	
	
	$y = 0;
		echo '<br><hr>Foreach sumup<br>';

	foreach ($thisArray as $x) {
		$y += $x;
	}
	echo $y;
	
	echo '<br><hr>Backward countdown<br>';
	
	$total = 0;
	for ($i=count($thisArray)-1; $i >= 0; $i--) {
		$total += $thisArray[$i];
		echo $thisArray[$i] . '<br>';
	}
	
	echo '<br><hr>Associative Array<br>';
	
	$newArray = array('uno' => 'the first value');
	$newArray['dos'] = 'the second value';
	
	echo $newArray['uno'] . '<br>';
	echo $newArray['dos'] . '<br>';
?>

</body>
</html>