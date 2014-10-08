<!DOCTYPE html>
<html>
<head>
	<title>Random Numbers and Arrays</title>
</head>
<link href='http://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>
<style>
	body 		{background-color: #FFF380;
					color: #000;
					text-align: center;
					font-family: 'Signika', sans-serif;
					font-size: 22pt;}
	input, select	{font-size: 42pt; text-transform: lowercase; border-radius: 50%; width: 300px; padding: 50px;}
	.wk5			{color: #F62817; font-size: 14pt; text-transform: lowercase;}
	hr				{color: #FBB917; background-color: navy; height: 11px;}
</style>
<body>

<?php

	echo '<h2 class="wk5">Random Numbers from 1 - 100 assigned to $array[ ]</h2>';
	
	$numbers = array();
	for ($x = 0; $x < 10; $x++) {
		$numbers[] = rand(1,100);
		if ($x == 9) 
			print $numbers[$x];
		else
			print $numbers[$x].' - ';
	}
	
	echo '<br>';
	echo '<h2 class="wk5">Random Numbers from 1 - 100 using array_push</h2>';

	$numbers2 = array();
	for ($y = 0; $y < 10; $y++) {
		array_push($numbers2,rand(1,100));
		if ($y == 9) 
			print $numbers2[$y];
		else
			print $numbers2[$y].' - ';
	}
	
	echo '<br>';
	echo '<h2 class="wk5">Random Numbers from 1 - 100 using sizeof($array)</h2>';

	$numbers3 = array();
	for ($z = 0; $z < 10; $z++) {
		$numbers3[sizeof($numbers3)] = rand(1,100);
		if ($z == 9) 
			print $numbers3[$z];
		else
			print $numbers3[$z].' - ';
	}

?>

</body>
</html>