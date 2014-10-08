<?php
	session_start();
	
	// include 'functions.inc.php';
	// -----------functions.inc.php
	// generic function to return a parameter from get/post
	function getParam($name)
	{
		if(isset($_REQUEST[$name]))
			return $_REQUEST[$name];
		return '';
	}

	// check if a user is allowed to see a particular page
	function auth()
	{
		if(isset($_SESSION['can_login']) && $_SESSION['can_login'])
		{
			return true;
		}
		return false;
	}
	// -----------functions.inc.php ends
	
	// include 'styleprefs.inc.php';
	// -----------styleprefs.inc.php
	if (getParam('color')) 
	{
		$color = getParam('color');
		setcookie ('color', $color, strtotime('+1 year'), '/');
	}
	
	else
	{
		if (isset($_COOKIE['color']))
			$color = $_COOKIE['color'];
		else
			$color = '#00ace0';
	}
	
	// -----------styleprefs.inc.php ends
	
	// if they didn't get can_login set in the auth function, send them back to login.php with an error message
	if(!auth())
	{
		$_SESSION['error'] = 'Please log in.';
		header('location: 1230-06-04.php');
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<style>
	body 			{background-color: <?php echo $color; ?>; color: #000; text-align: left; font-family: Verdana, sans-serif; font-size: 16pt;}
	.wk5			{color: #000; font-size: 14pt; text-transform: lowercase; border-bottom: 1px #000 solid;}
</style>
<body>

<h2 class="wk5">Dashboard</h2>
<p></p>

</body>
</html>