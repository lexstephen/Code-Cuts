<!doctype html>
<html lang="en-us">
<head>
	<title>Lab Test 2</title>
	<style>
		body	{background-color: #eee;
				color: #00000;
				font-weight: bold;
				font-family: Arial, Verdana, "sans serif";}
		h1		{color: #ff0000;}
		td		{width: 20px; 
				height: 20px; 
				padding: 2px;
				text-align: center;}
	</style>
	
	<meta name="author" content="Alexis Dicks-Stephen">
	<meta name="keywords" content="HTML 5, CSS, JavaScript">
	<meta name="description" content="Lab Test 2 completed by Alexis Dicks-Stephen">
	<meta charset="UTF-8">
</head>

<body>

<h1>Lab Test 2</h1>

<div id="heading3"></div>

<script type="text/javascript">
	var smallerNumber = prompt("Please enter a number");
	var biggerNumber = prompt("Please enter a larger number");
	
	if (isNaN(smallerNumber) || biggerNumber <= smallerNumber || smallerNumber <= 0) {
		document.getElementById("heading3").innerHTML = "You entered " + smallerNumber + " and " + biggerNumber + ". Please enter a positive integer.<br><code>Failed: isNaN(smallerNumber) || biggerNumber <= smallerNumber || smallerNumber <= 0</code><br><a href='index.html'>Try again</a>.";
	} else if (isNaN(biggerNumber) || biggerNumber <= smallerNumber || biggerNumber <= 0) {
		document.getElementById("heading3").innerHTML = "You entered " + smallerNumber + " and " + biggerNumber + ". Please enter a positive integer.<br><code>Failed: isNaN(biggerNumber) || biggerNumber <= smallerNumber || biggerNumber <= 0</code><br><a href='index.html'>Try again</a>.";
	} else {
		var multiTable = "<table>";
		
		for (var i = biggerNumber; i >= smallerNumber; i = i - 1) {
			multiTable += "<tr>";
				for (var j = smallerNumber; j <= i; j++) {
						multiTable += "<td>";
							if(j % 2==1) {
								multiTable += "<u>" + j + "</u>";
							} else {
								multiTable += j;
							}
						multiTable += "</td>";
				}
			multiTable += "</tr>";
		} 
		var useThisDamnNumber = parseInt(smallerNumber) + 1;
		for (var k = useThisDamnNumber; k <= biggerNumber; k++) {
			multiTable += "<tr>";
				for (var l = smallerNumber; l <= k; l++) {
						multiTable += "<td>";
							if(l % 2) {
								multiTable += "<u>" + l + "</u>";
							} else {
								multiTable += l;
							}
						multiTable += "</td>";
				}
			multiTable += "</tr>";
		}

		multiTable += "</table>";
		
		document.getElementById("heading3").innerHTML = multiTable;
	}
</script>
</body>
</html>