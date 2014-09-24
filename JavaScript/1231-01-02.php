<!doctype html>
<html lang="en-us">
<head>
	<title>Lab week 4 - Prelab 1 Ex2 - Letters!</title>
	<style>
		body	{background-color: #00ace0;
				color: #00000;
				font-family: Arial, Verdana, "sans serif";}
		#heading	{margin: 20px;
				font-weight: bold;}
	</style>
</head>

<body>

<div id="heading">Letters!</div>

<script type="text/javascript">
	var theGrade = prompt("Please enter your grade as a numeric value:");
	var theGrade = theGrade.toLowerCase();
	switch(theGrade) {
		case 'a': 
			document.getElementById('heading').innerText = "Excellent!";
		break;
		case 'b': 
			document.getElementById('heading').innerText = "Good!";
		break;
		case 'c': 
			document.getElementById('heading').innerText = "Adequate!";
		break;
		case 'd': 
			document.getElementById('heading').innerText = "Marginal.";
		break;
		case 'f': 
			document.getElementById('heading').innerText = "Inadequate.";
		break;
		default:
			theGrade = prompt("Please enter a valid grade: A, B, C, D, or F.");
		break;
	}
</script>

</body>
</html>