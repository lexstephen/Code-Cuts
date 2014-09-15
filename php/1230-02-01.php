<?php
	#      TEST                  #
	#  Alexis Dicks-Stephen  #
	#  #100563954            #
	#                        #

	if (isset($_GET['genderFemale']))
		$genderFemale = true;
	else
		$genderFemale = false;
 
	if (isset($_GET['whichSemester'])) {
		$whichSemester = $_GET['whichSemester'];
		$gpa = $_GET['gpa'];
		$yourName = $_GET['yourName'];
		$color = $_GET['color'];
	}
	else {
		$whichSemester = 1;
		$gpa = 2.95;
		$yourName = "Sweet Jane";
		$genderFemale = true;
		$color = "#888";
	}
	
	$honourRoll = $gpa > 3.5;
?>
		<!DOCTYPE html>
<html>
<head>
	<title>Week 2</title>
	<style>
		#answer	{font-family: Verdana; background-color: #fff; color: #000; width: 300px; height: 200px; 
				margin: 20px; margin-top: -205px; padding: 20px; padding-left: 50px; text-transform: lowercase; font-size: 90%; float: right;
				border: 1px <?php echo $color; ?> solid;
				background-image: -moz-radial-gradient(45px 45px 45deg, circle cover, #fff 0%, <?php echo $color; ?> 100%, red 95%);
				background-image: -webkit-radial-gradient(45px 45px, circle cover, #fff, <?php echo $color; ?>);
				background-image: radial-gradient(45px 45px 45deg, circle cover, #fff 0%, <?php echo $color; ?> 100%, red 95%);}
		h1		{font-size: 600%; color: <?php echo $color; ?>; margin-top: -10px;}
		label	{display: block; float: left; width: 150px; text-transform: lowercase; text-align: left;}
		form	{width: 350px;}
		#gpaForm input	{border: 1px <?php echo $color; ?> solid; margin: 5px; padding: 5px;}
		#gpaForm input[type="submit"]	{margin: 20px; clear: all; border: 0; height: 25px; width: 25px; float: left; margin: 2px; border-radius: 50%;}
        #gpaForm .color1	{background-color: red; color: red;}
        #gpaForm .color2	{background-color: orange; color: orange;}
        #gpaForm .color3	{background-color: yellow; color: yellow;}
        #gpaForm .color4	{background-color: green; color: green;}
        #gpaForm .color5	{background-color: blue; color: blue;}
        #gpaForm .color6	{background-color: indigo; color: indigo;}
        #gpaForm .color7	{background-color: violet; color: violet;}
	</style>
</head>

<body>

<h1>GPA Calculator</h1>

<form id="gpaForm" method="get" target="_self">
	<label for="yourName">Your Name</label> 
		<input type="text" name="yourName" id="nameCheck" value="<?php echo $yourName; ?>"><br>

	<label for="whichSemester">Which Semester</label> 
		<input type="text" name="whichSemester" id="semCheck" value="<?php echo $whichSemester; ?>"><br>

	<label for="gpa">GPA</label> 
		<input type="text" name="gpa" id="gpaCheck" value="<?php echo $gpa; ?>"><br>
		
	<label for="genderFemale">Are you female?</label> 
		<input type="checkbox" name="genderFemale" id="genCheck" <?php if ($genderFemale)	echo " checked"; ?>><br>
	
	<input type="hidden" name="color" value="<?php echo $color; ?>">

		<input class="color1" type="submit" name="color" value="red" onclick="return checkNumber('semCheck'); return checkNumber('gpaCheck'); ">
		<input class="color2" type="submit" name="color" value="orange" onclick="return checkNumber('semCheck'); return checkNumber('gpaCheck'); ">
		<input class="color3" type="submit" name="color" value="yellow" onclick="return checkNumber('semCheck'); return checkNumber('gpaCheck'); ">
		<input class="color4" type="submit" name="color" value="green" onclick="return checkNumber('semCheck'); return checkNumber('gpaCheck'); ">
		<input class="color5" type="submit" name="color" value="blue" onclick="return checkNumber('semCheck'); return checkNumber('gpaCheck'); ">
		<input class="color6" type="submit" name="color" value="indigo" onclick="return checkNumber('semCheck'); return checkNumber('gpaCheck'); ">
		<input class="color7" type="submit" name="color" value="violet" onclick="return checkNumber('semCheck'); return checkNumber('gpaCheck'); ">
</form>
<?php 
	if ((is_numeric($whichSemester)) && (is_numeric($gpa))) {
		$pronoun = ($genderFemale)?"She":"He";
		
		echo "<div id=\"answer\">$yourName is in semester $whichSemester and is averaging a $gpa GPA. ";

		if ($honourRoll)
			echo "$pronoun is on the honour roll.</div>";
		else
			echo "$pronoun is not on the honour roll.</div>";
	}
?>
<script type="text/javascript">
function checkNumber(x) {
	if (isNaN(document.getElementById(x).value)) {	
			alert("Please enter your semester and gpa as a number.");
			document.getElementById('nameCheck').value = "---";
			document.getElementById('semCheck').value = "---";
			document.getElementById('gpaCheck').value = "---";
			document.getElementById('genCheck').value = "---";
	}
}
</script>
</body>
</html>