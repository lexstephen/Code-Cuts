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
	
	$username = getParam('username');
	$password = getParam('password');
	$saveMe = getParam('saveMe');
	
	if ((isset($_SESSION['error'])) && !empty($_SESSION['error']))
	{
		echo $_SESSION['error'];
		unset($_SESSION['error']);
	}
	
	if ($username == 'test' && $password == '1234')
	{
		if ($saveMe) {
			setcookie('username',	$username,	strtotime('+1 year'),'/');
			setcookie('password',	$password,	strtotime('+1 year'),'/');
			setcookie('saveMe',		$saveMe,	strtotime('+1 year'),'/');
		}
		$_SESSION['can_login'] = true;
		header('location: 1230-06-05.php');
		exit;
	}	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<style>
	body 				{background-color: <?php echo $color; ?>; color: #000; text-align: left; font-family: Verdana, sans-serif; font-size: 12pt;}
	label 				{clear: both; font-weight: bold; display: block; width: 200px; float: left;}
	label:after 		{content: ": " }
	input[type="text"]	{font-size: 12pt; text-transform: lowercase; width: 200px; padding: 2px;}
	input[type="submit"] {margin-top: 20px;}
	.wk5				{color: #F62817; font-size: 14pt; text-transform: lowercase;}
	hr					{color: #FBB917; background-color: navy; height: 11px;}
</style>
<body>

<form action="1230-06-04.php">
	<label for="username">Username</label> <input type="text" name="username"><br>
	<label for="password">Password</label> <input type="text" name="password"><br>
	<label for="color">Background Colour</label> <input type="color" name="color" value="<?php echo $color; ?>"><br>
	<label for="saveMe">Remember Me</label> <input type="checkbox" name="saveMe"><br>
	<input type="submit">
</form>

</body>
</html>