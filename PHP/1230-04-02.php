<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<style>
	body 		{background-color: #fff;
					color: #000;
					text-align: left;
					font-size: 12pt;}
	#wk5			{color: red;}
	#tb td:nth-child(odd) {background-color: #eee;}
</style>
<body>

<h1 id="wk5">Arrays</h1>

<?php 
/*
Rilo Kiley (1999, also known as The Initial Friend EP)
Take Offs and Landings (2001)
The Execution of All Things (2002)
More Adventurous (2004)
Under the Blacklight (2007)
Rkives (2013)
*/

	$riloKiley = array('The Initial Friend EP', 'Take Offs and Landings', 'The Execution of All Things', 'More Adventurous', 'Under the Blacklight', 'Rkives');
	
	print "<h1 class=\"wk5\">Foreach in Array</h1>";
	
	foreach ($riloKiley as $x) {
		echo $x.'<br>';
	}
	
	echo "<hr>";
	
	print "<h1 class=\"wk5\">Add a value to the end</h1>";

	$riloKiley[] = "Jenny Lewis and the Watson Twins";
	foreach ($riloKiley as $x) {
		echo $x.'<br>';
	}
	echo "<hr>";
	
	print "<h1 class=\"wk5\">Set a value at a specific index</h1>";
	
	$riloKiley[0] = "Rilo Kiley, also known as the Initial Friend EP";
	foreach ($riloKiley as $x) {
		echo $x.'<br>';
	}
	echo "<hr>";
	
	print "<h1 class=\"wk5\">Get values from an array</h1>";
	$jennyLewis = $riloKiley[6];
	echo $jennyLewis;
	echo "<hr>";
	
	print "<h1 class=\"wk5\">Delete values from an array</h1>";
	unset($riloKiley[4]);
	var_dump($riloKiley);
	
	echo "<br><i>Note [4] is missing</i><br><hr>";
	
	print "<h1 class=\"wk5\">Remove elements that contain NULL values and reindex array</h1>";
	
	$riloKiley = array_values($riloKiley);
	
	var_dump($riloKiley);
	echo "<br><i>[5] has become [4] and so on</i>";
	
	print "<hr><h1 class=\"wk5\">Use array elements with variable substitution</h1>";
	
	echo "First album: $riloKiley[0]";
	echo "<br>Second album: {$riloKiley[1]}";
	
	print "<hr><h1 class=\"wk5\">Count Elements</h1>";
	print count($riloKiley);
	
	print "<hr><h1 class=\"wk5\">Find End of Array</h1>";
	print end($riloKiley);
	
	print "<hr><h1 class=\"wk5\">Return index of array element that the cursor is on</h1>";
	print key($riloKiley);
	
	print "<hr><h1 class=\"wk5\">Check if an index is set</h1>";
	print isset($riloKiley[3]);
	
	print "<hr><h1 class=\"wk5\">Store 10 random numbers in an array</h1>";
	
	$numbers = array();
	for ($i = 0; $i < 10; $i++) {
		$numbers[] = mt_rand(1,100);
		print $numbers[$i].'<br>';
	}
	
	print "<hr><h1 class=\"wk5\">Compute sum and average of an array of prices</h1>";
	$prices = array(141.95, 212.95, 411, 10.95);
	$sum = 0;
	for ($i = 0; $i < count($prices); $i++) {
		$sum += $prices[$i];
	}
	$average = $sum / count($prices);
	print "Sum: ".$sum."\t Average: ".$average;
	
	print "<hr><h1 class=\"wk5\">Skip gaps in an array</h1>";
	$leNumbers = array(1,2,3,4,5,6,7,8,9,10);
	unset($leNumbers[2], $leNumbers[6]);
	end($leNumbers);
	$last = key($leNumbers);
	$numbers_string = '';
	for ($i = 0; $i < $last; $i++) {
		if(isset($leNumbers[$i])) {
			$numbers_string .= $leNumbers[$i]. ' ';
		}
	}
	echo $numbers_string;
	
	print "<hr><h1 class=\"wk5\">Set up an array with a range</h1>
	
	<p><b>range(\$lo, \$high [, \$step])</b><br>Returns an array filled with values from \$lo to \$high with \$step added to get the next value, if ommitted, step is 1</p>";
	
	print '<b>Range of values from 1-4</b><br>';
	$moreNumbers = range(1,4);
	var_dump($moreNumbers);
	
	print '<br><b>Range of values from 10-22 incremented by 4</b><br>';
	$moreNumbers2 = range(10,22,4);
	var_dump($moreNumbers2);
	
	print "<hr><h1 class=\"wk5\">Fill Array</h1>
	
	<p><b>array_fill(\$start, \$count, \$value)</b><br>Returns an array filled with \$count \$values starting at index \$start</p>";
	print '<b>Fill slots 0 to 5 with 1s</b><br>';
	$moreNumbers3 = array_fill(0,5,1);
	var_dump($moreNumbers3);
	
	print "<hr><h1 class=\"wk5\">Pad Array</h1>
	
	<p><b>array_pad(\$array, \$size, \$value)</b><br>Returns an array with \$value added to the end of \$array until it contains \$size elements.  If \$size is negative, the value is added to the start of the array.</p>";
	print '<b>Add 0s to array until it contains 10 indices</b><br>';
	$moreNumbers3 = array_pad($moreNumbers3, 10, 0);
	var_dump($moreNumbers3);
	
	print "<hr><h1 class=\"wk5\">Merge Arrays</h1>
	
	<p><b>array_merge(\$array1, \$array2, ...)</b><br>Returns an array with the elements of two or more arrays in one array.  String keys in \$array2 overwrite string keys in \$array1 but numerical keys are appended.</p>";
	$moreNumbers4 = array_merge($moreNumbers2, $moreNumbers3);
	var_dump($moreNumbers4);
	
	print "<hr><h1 class=\"wk5\">Slice an Array</h1>
	
	<p><b>array_slice(\$array, \$index [, \$len [, \$keys]]))</b><br>Returns part of an array starting from \$index and containing \$len elements.  If \$len is ommitted, it returns the elements to the end of the array.  If \$keys is TRUE, the original keys are used.  Otherwise, the slice is reindexed starting at 0.</p>";
	$employees = array('Lex', 'Batul', 'Jordan', 'Jeremy', 'Chris', 'Jon');
	$new_hires = array_slice($employees, 2);
	echo implode(', ', $new_hires);
	echo '<br>';
	$this_week = array_slice($employees, 2, 2);
	echo implode(', ', $this_week);
	
	print "<hr><h1 class=\"wk5\">Splice two Arrays together</h1>
	
	<p><b>array_splice(\$array, \$index [, \$len [, \$new]]))</b><br>Modifies \$array by replacing its elements with the elements in \$new starting at \$index and replacing \$len elements.  The array is reindexed.  Note that this function doesn't return an array, it modifies the elements in the \$array parameter.</p>";
	$employees2 = array('Lex', 'Batul', 'Jordan', 'Jeremy', 'Chris', 'Jon');
	$new_hires2 = array('Isaac', 'Brock');
	array_splice($employees2, 1, 2, $new_hires2);
	echo implode(', ', $employees2);
	
	print "<hr><h1 class=\"wk5\">How to work with a stack</h1>
	
	<p><b>array_push(\$array, \$value)</b><br>Adds \$value to the end of \$array</p>
	<p><b>array_pop(\$array)</b><br>Removes and returns the last value in \$array</p>";
	$names = array('Mike', 'Joel', 'Anne');
	echo implode(', ', $names);
	array_push($names, 'Ray');
	echo '<br>';
	echo implode(', ', $names);
	$next = array_pop($names);
	echo '<br>';
	echo $next;
	
	print "<hr><h1 class=\"wk5\">How to work with a queue</h1>
	
	<p><b>array_unshift(\$array, \$value)</b><br>Adds \$value to the start of \$array</p>
	<p><b>array_shift(\$array)</b><br>Removes and returns the first value in \$array</p>";
	$names2 = array('Mike', 'Joel', 'Anne');
	echo implode(', ', $names2);
	array_push($names2, 'Ray');
	echo '<br>';
	echo implode(', ', $names2);
	echo '<br>';
	array_unshift($names2, 'Billy');
	echo implode(', ', $names2);
	$next = array_shift($names2);
	echo '<br>';
	echo $next;
	
	echo '<p>A <b>stack</b> is a special type of array that implements a last-in first-out (LIFO) collection of values.  Array_push and _pop are used to add/remove elements in a stack.</p>
	
	<p>A <b>queue</b> is a special type of array that implements a first-in, first-out (FIFO) collection of values.  You can use array__push and array_shift to add and remove elemts in a queue.</p>
	
	<p>The functions in this figure modify the array passed to the function.  In other words, they do not return a new array.</p>';
	
?>

</body>
</html>