<!DOCTYPE html>
<html>
<head>
	<title>Back, back, forth & forth</title>
</head>
<style>
	body 		{background-color: #ff0;
					color: navy;
					text-align: center;
					font-family: verdana;
					font-size: 14pt;}
	#pretty		{margin: auto;
					margin-top: 30px;
					border: 20px navy solid;
					height: 100px;
					width: 100px;
					border-radius: 50%;
					background-color: #8fd8fd;}
	#pretty span {display: block; padding-top: 31px;}
	#pretty strong {font-size: 20pt; position: relative; top: 2px;}
	a:link, 
	a:visited, 
	a:active, 
	a:hover 	{color: navy; text-decoration: none; font-weight: bold;}
</style>
<body>
<?php
	// if there is a ?num chosen assign it to the currentNumber variable
	// if not make everything zero
	$displayNumber = (isset($_GET['num'])) ? $_GET['num'] : 0;

	// kick the number back or forth depending on the previous action
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'pre') {
			$displayNumber = $displayNumber - 1; 
		}
		else if ($_GET['action'] == 'next') {
			$displayNumber = $displayNumber + 1; 
		}
	}
	
	echo "<div id=\"pretty\"><span><a href='?action=pre&num=" . $displayNumber . "'>&lt;</a>
			<strong>" . $displayNumber . "</strong> 
			<a href='?action=next&num=" . $displayNumber . "'>&gt;</a></span></div>";
?>
</body>
</html>