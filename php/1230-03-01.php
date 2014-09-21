<!DOCTYPE html>
<html>
<head>
	<title>You Never Give Me My Numbers</title>
</head>
<style>
	body 		{background-color: #fff;
					color: #00ace0;
					text-align: left;
					font-size: 12pt;}
	#numbers 	{}
	#song span {float: left; font-style: italic; padding: 5px; border: 1px red solid; border-bottom: 5px red dashed; margin: 6px;}
	#song div {clear: both;}
	b {color: red;}
	td			{text-align: center;  font-size: 36pt;}
	a:link, 
	a:visited, 
	a:active, 
	a:hover 	{color: red; text-decoration: none;}
</style>
<body>
<?php
	// constant maximum number of pages
	define("MAX_PAGE", 7);
	
	// if there is a ?page chosen assign it to the currentNumber variable
	if (isset($_GET['page']))
		$currentNumber = $_GET['page'];
		

		echo '<table><tr>';
		// iterate through the numbers
		for ($i = 1; $i <= MAX_PAGE; $i++) {
			// surround the magic number in brackets
			if ((isset($currentNumber)) && ($i == $currentNumber)) 
				echo '<td>['.$i.']</td>';
			else 
			// print the regular numbers as links
				echo '<td><a href="?page='.$i.'&MAX_PAGE='.MAX_PAGE.'">'.$i.'</a></td>';
		}
		echo '</tr><tr>';
		// iterate through the numbers
		for ($i = 1; $i <= MAX_PAGE; $i++) {
			// surround the magic number in brackets
			if ((isset($currentNumber)) && ($i == $currentNumber)) 
				{		switch($i) {
					case '1': echo '<td><b>all </b></td>'; break;
					case '2': echo '<td><b>good </b></td>'; break;
					case '3': echo '<td><b>chil</b></td>'; break;
					case '4': echo '<td><b>dren </b></td>'; break;
					case '5': echo '<td><b>go </b></td>'; break;
					case '6': echo '<td><b>to </b></td>'; break;
					case '7': echo '<td><b>Heaven </b></td>'; break;}
					}
			else 
			// print the regular numbers as links
				{		switch($i) {
					case '1': echo '<td>all </td>'; break;
					case '2': echo '<td>good </td>'; break;
					case '3': echo '<td>chil</td>'; break;
					case '4': echo '<td>dren </td>'; break;
					case '5': echo '<td>go </td>'; break;
					case '6': echo '<td>to </td>'; break;
					case '7': echo '<td>Heaven </td>'; break;}
		}
		}
		echo '</tr></table>';
		
			echo '<div id="song"><span>
			out of college, money spent <br>
			see no future, pay no rent<br>
			all the money\'s gone, nowhere to go<br>
			any jobber got the sack<br>
			monday morning, turning back<br>
			yellow lorry slow nowhere to go</span><span>
			but oh that magic feeling<br>
			nowhere to go<br>
			oh that magic feeling<br>
			nowhere to go<br>
			nowhere to go</span><span>
			one sweet dream<br>
			pick up the bags<br>
			get in the limousine<br>
			soon we\'ll be away from here<br>
			step on the gas and <br>
			wipe that tear away<br>
			one sweet dream<br>
			came true<br>
			today<br>
			came true<br>
			today<br>
			came true<br> 
			today<br>
			yes it did</span><div>';
		echo '</div>';
	echo '</div>';
?>
</body>
</html>