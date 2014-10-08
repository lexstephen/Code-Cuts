<!DOCTYPE html>
<html>
<head>
	<title>Fun with Functions</title>
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

<h1 id="wk5">Build A Table Function</h1>

<?php 

	function this_builds_the_table($rows, $cols) {			// this is the function signature
		$table = '<table id="tb">';
		
		for ($x = 0; $x < $rows; $x++) {
			$table .= '<tr>';
			
			for ($y = 0; $y < $cols; $y++) {
				$table .= '<td> row #' . $x . '</td>';
			}
			
			$table .= '</tr>';
		}
		
		return $table .= '</table>';
	}

	for ($i = 1; $i <= 5; $i++) 
		echo this_builds_the_table($i+2,$i+4);				// parameters can be modified by the variable
	
?>

</body>
</html>