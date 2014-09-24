<!doctype html>
<html lang="en-us">
<head>
	<title>Lab Test 1</title>
	
	<meta name="author" content="Alexis Dicks-Stephen">
	<meta name="keywords" content="HTML 5, CSS, JavaScript">
	<meta name="description" content="Lab Test 1 completed by Alexis Dicks-Stephen">
	<meta charset="UTF-8">
	
</head>

<body id="example">
	<h1>Median Madness!</h1>

	<div id="inputSection"></div>
	
	<script type="text/javascript">
	// receive variables
		var firstNumber = prompt("Please enter the first number:");
		var secondNumber = prompt("Please enter the second number:");
		var thirdNumber = prompt("Please enter the third number:");
	
	// determine which number is the median
	
	if(firstNumber == secondNumber && secondNumber == thirdNumber) {
		document.write("Thought you could trick me by entering the same number three times, didn't you?  The median is " + firstNumber + ".");
	} else if (firstNumber <= secondNumber && secondNumber <= thirdNumber) {
		document.write("The second value inputted, " + secondNumber + ", is the median.");
	} else if (secondNumber <= firstNumber && firstNumber <= thirdNumber) {
		document.write("The first value inputted, " + firstNumber + ", is the median.");
	} else if (thirdNumber <= firstNumber && firstNumber <= secondNumber) {
		document.write("The first value inputted, " + firstNumber + ", is the median.");
	} else if (firstNumber <= thirdNumber && thirdNumber <= secondNumber) {
		document.write("The third value inputted, " + thirdNumber + ", is the median.");
	} else if (secondNumber <= thirdNumber && thirdNumber <= firstNumber) {
		document.write("The third value inputted, " + thirdNumber + ", is the median.");
	} else if (thirdNumber <= secondNumber && secondNumber <= firstNumber) {
		document.write("The second value inputted, " + secondNumber + ", is the median.");
	} 
	</script>
</body>
</html>
