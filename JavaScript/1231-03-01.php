<!doctype html>
<html lang="en-us">
<head>
	<title>Prelab3 Ex2</title>
	<style>
		body {
			background-color: #eee;
			color: #00000;
			font-family: Arial, Verdana, "sans serif";
		}
		h1 {
			color: #ff0000;
		}
		#div01, #div02, #div03 {
			background-color: #fff;
			width: 250px; 
			border: 1px #000 solid; 
			padding: 2px;
			margin: 10px;
			text-align: left;
			float: left;
		}
		.clear {
			clear: both; 
			padding: 40px;
		}
		ul {
			margin: 0px; 
			padding: 2px;
		}
		li {
			list-style-type: circle;
		}
		#facts li {
			list-style-type: none;
		}
		.heading {
			list-style-type: disc; 
			font-weight: bold; 
			border-bottom: 1px #000 solid; 
			margin-bottom: 5px;
		}
	</style>
	
	<meta name="author" content="Alexis Dicks-Stephen">
	<meta name="keywords" content="HTML 5, CSS, JavaScript">
	<meta name="description" content="Prelab 3 Ex2 completed by Alexis Dicks-Stephen">
	<meta charset="UTF-8">
</head>

<body>

<h1>Prelab 3 Ex2</h1>

<div id="div01"></div>
<div id="div02"></div>

<script type="text/javascript">
	//initialize an array called theNumbers
	var iterationCount = prompt("How many elements would you like in this array?");
	var theNumbers = new Array(); 
	
	//set up variables referencing page elements
	var div01 = document.getElementById("div01");
	var div02 = document.getElementById("div02");
			
	//set up the two columns as variables
	var allVariables = "<ul><li class=\"heading\">All Numbers</li>";
	var variableFacts = "<ul id=\"facts\"><li class=\"heading\">Number Statistics</li>";
	
	//set up variables for all the number facts
	var max = 0;
	var min = iterationCount*100; 
	var sumAll = 0;
	var sumEven = 0;
	var sumOdd = 0;
	
	//count up to find the largest value
	for (i = 0; i < iterationCount; i++) {
	
		//pick a number to store in array slot i
			theNumbers[i] = parseInt(Math.random() * 100);
		
		//print number & link styling to allVariables list
			allVariables += "<li>" + theNumbers[i] + "</li>";

		//a. The smallest number in the array
		if (min > theNumbers[i]) {
			min = theNumbers[i];
		}
		
		//b. The largest number in the array
		if (max < theNumbers[i]) {
			max = theNumbers[i];
		}
		
		//c. The sum of all the values in the array
		sumAll += theNumbers[i];
		
		//d. The sum of all the odd values in the array
		if (theNumbers[i]%2 != 0) {
			sumOdd += theNumbers[i];
		}
		
		//e. The sum of all the even values 
		else if (theNumbers[i]%2 === 0) {
			sumEven += theNumbers[i];
		}
	}
	
	variableFacts += "<li>The largest number is " 
						+ max 
						+ ".</li><li>The smallest number is " 
						+ min 
						+ ".</li><li>Sum of all numbers is " 
						+ sumAll 
						+ ".</li><li>Sum of all odd numbers is " 
						+ sumOdd 
						+ ".</li><li>Sum of all even numbers is " 
						+ sumEven 
						+ ".</li>";
			
	//close the lists
	allVariables += "</ul>";
	variableFacts += "</ul>";

	//write to the columns
	div01.innerHTML = allVariables;
	div02.innerHTML = variableFacts;
</script>

<div class="clear"></div>
</body>
</html>