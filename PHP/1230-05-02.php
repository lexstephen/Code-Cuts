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
	#wk5			{color: red;}
</style>
<body>

<h1 id="wk5">Store a function in a variable / Scope</h1>

<?php 

	/* 
	$num = 10;
	
	function test($num) {
		$num++;
		}
	
	test($num);
	echo $num;
	*/
	
	$dis = 'Yo mama loves to';
	
	function easy($defdis="eat pie")
	{
		global $dis; // pull an outside variable into the function's scope
		print $dis . ' ' . $defdis . '<br><br>';
	}
	
	$yo_mama = "easy"; // assign the results of the function to a variable
	
	$yo_mama();
	
	
	$test = function() {
		echo 'Hello, World!';
		};
		
	function temp($f) {
		$f();
	}
		
	temp($test);
?>

</body>
</html>