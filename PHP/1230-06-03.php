<!DOCTYPE html>
<html>
<head>
	<title>Week 6: Download a PHP file</title>
</head>
<style>
	body 			{background-color: <?php echo $color; ?>; color: #000; text-align: left; font-family: Verdana, sans-serif; font-size: 16pt;}
	input, select	{font-size: 42pt; text-transform: lowercase; border-radius: 50%; width: 300px; height: 300px; padding: 100px;}
	.wk5			{color: #F62817; font-size: 14pt; text-transform: lowercase;}
	hr				{color: #FBB917; background-color: navy; height: 11px;}
</style>
<body>
<?php 

header('Content-type: application/pdf');

// does not change page URL; browser downloads file without any page load
// header('Content-Disposition: attachment; filename="downloaded.pdf"');

// displays file in browser window
readfile('LabManualWeek11.pdf');

?>
</body>
</html>