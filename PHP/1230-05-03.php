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

<h1 id="wk5">Define Constants, include Functions</h1>

<?php 

// include_once and require_once prevents you from 
// including twice and causing fatal errors
// commented out due to nature of CC's design
// include_once 'functions.php'; 

/* functions.php is: <?php  */
	function maziar () {
		echo __FUNCTION__;
	}
/* ?> */

define('TEST',14);

if (defined('TEST')) 
	echo '<b>Print a defined constant without the $</b>:<br>'; 
	echo TEST;
	
	echo '<hr><b>Built-in variable to supply path and file name</b>:<br>'; 
	
	echo __FILE__; // gives you path and filename
	
	echo '<hr><b>Call a function defined in an include</b>:<br>(Function only echoes its name)<br>'; 
	
	echo maziar();
	
	echo '<hr><b>Tell me the line number of the PHP code</b>:<br>'; 
	echo __LINE__;
	
?>

</body>
</html>