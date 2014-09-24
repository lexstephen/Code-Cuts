<!doctype html>
<html lang="en-us">
<head>
	<title>Prelab 4 Ex 2</title>
	<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,800' rel='stylesheet' type='text/css'>
	<meta name="author" content="Alexis Dicks-Stephen">
	<meta name="keywords" content="HTML 5, CSS, JavaScript">
	<meta name="description" content="Prelab 4 Ex 2 completed by Alexis Dicks-Stephen">
	<meta charset="UTF-8">
	<style>
			body {
			background-color: #FFFF99;
			color: #00000;
			font-family: Arial, Verdana, "sans serif";
		}
		h1 {
			font-family: 'Alegreya Sans SC', sans-serif;
			color: #ff0000;
			font-size: 600%;
			margin: -50px;	
			margin-left: -20px;	
		}
		p {
			font-family: 'Alegreya Sans SC', sans-serif;
			color: #ff0000;
			font-size: 200%;
			text-align: center;
			margin: 0;	
		}
		.highlightMode {background-color: #ff0000; color: #fff; font-weight: bold; padding: 3px;}
		#div01, #div02, #div03 {
			background-color: #fff;
			width: 750px; 
			border: 10px #000 solid; 
			padding: 20px;
			font-size: 100%;
			margin: 20px;
			text-align: left;
			display: block;
		}
		#div01a, #div02a, #divvA01, #divvA02, #divvA03 {
			background-color: #fff;
			width: 150px; 
			border: 10px #000 solid; 
			padding: 20px;
			font-size: 70%;
			margin: 20px;
			text-align: left;
			float: left;
		}
		#div01a h1, #div02a h1 {
		font-size: 200%;
		margin: 0;
		text-decoration: underline;
		color: #00ace0;
		}
		.clear {
			clear: left; 
			padding: 10px;
		}
		ul {
			margin: 0px; 
			padding: 2px;
		}
		li {
			list-style-type: circle;
		}
		.heading {
			list-style-type: disc; 
			font-weight: bold; 
			border-bottom: 1px #000 solid; 
			margin-bottom: 5px;
		}
	</style>
</head>

<body>

<h1>Bookshelf</h1>

<div id="divA01"></div>

<script type="text/javascript">
	// set up variable referencing page element
	var divA01 = document.getElementById("divA01");
	
	// set up the print variable
	var printShelf1 = "";

	// initialize a multidimensional array called bookShelf
	var bookShelf = [
						// bookShelf[0][0]
						["Fiction",		
										// bookShelf[0][1][0], [0][1][1], [0][1][2]
										// bookShelf[0][2][0], [0][2][1], [0][2][2]
										// bookShelf[0][3][0], [0][3][1], [0][3][2]
										// bookShelf[0][4][0], [0][4][1], [0][4][2]
										["the Amazing Adventures of Kavalier & Clay","Chabon, Michael",639],
										["The Wars","Findley, Timothy",198], 
										["Catcher in the Rye","Salinger, JD",214], 
										["Breakfast of Champions","Vonnegut, Kurt",303]], 
										
						// bookShelf[1][0]
						["Non-Fiction",	
										// bookShelf[1][1][0], [1][1][1], [1][1][2]
										// bookShelf[1][2][0], [1][2][1], [1][2][2]
										// bookShelf[1][3][0], [1][3][1], [1][3][2]
										// bookShelf[1][4][0], [1][4][1], [1][4][2]
										["My Years As Prime Minister","Chrétien",435],
										["Citizen of the World: The Life of Pierre Elliott Trudeau","English, John",567],
										["Bossypants","Fey, Tina",277],
										["Speaking Out Louder","Layton, Jack",448]], 
										
						// bookShelf[2][0]	
						["Poetry",	
										// bookShelf[2][1][0], [2][1][1], [2][1][2]
										// bookShelf[2][2][0], [2][2][1], [2][2][2]
										// bookShelf[2][3][0], [2][3][1], [2][3][2]
										// bookShelf[2][4][0], [2][4][1], [2][4][2]
										["100 Selected Poems","cummings, ee",121],
										["Selected Poems","Ginsberg, alan",837],
										["AnOther E. E. Cummings","Kostelanetz, Richard",310],
										["The Complete Poems and Lyrics","Mitchell, Joni",341]]
					]; 
	
	// set up the print types in a loop	
	for (var row = 0; row < bookShelf.length; row++) {
				printShelf1 += "<b>Shelf:</b> " + bookShelf[row][0];
			for (var col = 1; col < bookShelf[row].length; col++) {
					printShelf1 += "<br><u>" + bookShelf[row][col][0]+ "</u>;  " + bookShelf[row][col][1] + "; Pages: " + bookShelf[row][col][2];
			} 
			printShelf1 += "<br><br>";
	}

	// write the lists
	divA01.innerHTML = printShelf1;
</script>

<h2>List of Random Numbers</h2>

<div id="divvA01"></div>
<div id="divvA02"></div>
<div id="divvA03"></div>

<script type="text/javascript">
	//initialize an array called theNumbers
	var theNumbers = new Array(); 
	
	//set up variables referencing page elements
	var divvA01 = document.getElementById("divvA01");
	var divvA02 = document.getElementById("divvA02");
	var divvA03 = document.getElementById("divvA03");
			
	//set up the three lists
	var allVariables = "<ul><li class=\"heading\">All Numbers</li>";
	var evenVariables = "<ul><li class=\"heading\">Even Numbers</li>";
	var oddVariables = "<ul><li class=\"heading\">Odd Numbers</li>";
	
	//50 iterations determining which variable to assign the number to
	for (i = 0; i < 50; i++) {
		//pick a number to store in array slot i
			theNumbers[i] = parseInt(Math.random() * 100);
		
		//print number & link styling to allVariables
			allVariables += "<li>" + theNumbers[i] + "</li>";
			
		//determine if the number is even
		if (theNumbers[i]%2 === 0) {
			evenVariables += "<li>" + theNumbers[i] + "</li>";
		}
		
		//determine if the number is odd
		else if (theNumbers[i]%2 != 0) {
			oddVariables += "<li>" + theNumbers[i] + "</li>";}
		}
		
		//close the lists
			allVariables += "</ul>";
			evenVariables += "</ul>";
			oddVariables += "</ul>";
			
		//write the lists
			divvA01.innerHTML = allVariables;
			divvA02.innerHTML = evenVariables;
			divvA03.innerHTML = oddVariables;
</script>

<h2 style="clear: both;">Median, Mode and Mean of an Array</h2>

<div id="divB01a"></div>
<div id="divB02a"></div>

<script type="text/javascript">
	// set up variable referencing page element & associated print variables
	var divB01 = document.getElementById("divB01a");
	var divB02 = document.getElementById("divB02a");
	var print1 = "";
	var print2 = "";
	
	// set up prompt and arrays
	var iterationCount = prompt("How many elements would you like in this array?");
	var randomValues = new Array(); 
	var modeCounter = new Array();
	var modeTie = new Array();
	
	// calculation variables
	var meanIteration = 0;
	var medianIteration = 0;
	var modeValue = 0;
	var modeValue = 0;
	var repeatingNumber = 0;
	
	// check that the prompt received valid input
	if (isNaN(iterationCount) || iterationCount < 0) {
		print1 += "You did not enter a valid number; there will be 100 iterations.<br><br>";
		iterationCount = 100;
	}
	
	// assign values from 1-20 to iterationCount indexes
	// build the cumulative total for the mean
	for (i = 0; i < iterationCount; i++) {
		//pick a number to store in array slot i
		randomValues[i] = parseInt(Math.random() * 20);
		meanIteration += randomValues[i];
	}
	
	// MEDIAN
	// divide the iteration count by half
	// subtract one to keep it from rounding up in the case of an odd number
	medianIteration = Math.round(iterationCount/2)-1;
	
	// MODE	
	// make a counter with two array elements
	// [number from 0-20] [number of times that value repeats]
	for (i = 0; i < 21; i++) {
		modeCounter[i] = new Array(2);
		modeCounter[i][0] = i;
		modeCounter[i][1] = 0;
	}
	
	// loop through randomValues 21 times to get 0-20 to match against each possible number
	// loop through iterationCount as many times as the user entered to catch every entry
	// compare the value of randomValues[j] to modeCounter[i][0] to see if the number matches
	// if there is a match increase modeCounter[i][1] by 1
	for (i = 0; i < 21; i++) {
		for (j = 0; j < iterationCount; j++) {
			if (modeCounter[i][0] == randomValues[j]) 
				modeCounter[i][1]++;
		}
	}
	
	// loop through randomValues 21 times to get 0-20 to match against each possible number
	// compare modeCounter to repeatingNumber
	// if modeCounter[i][1] is higher, overwrite repeatingNumber
	// store the mode number in the modeValue variable for easy reference	
	for (i = 0; i < 21; i++) {
			if (modeCounter[i][1] > repeatingNumber) {
				repeatingNumber = modeCounter[i][1];
				modeValue = i;
			}
	}
	
	// print the array, unsorted, in left col
	print1 += "<b>Unsorted</b> list: ";
	
	for (i = 0; i < iterationCount; i++) {
		if (randomValues[i] == modeCounter[modeValue][0]) {
			print1 += "<span class='highlightMode'>" + randomValues[i] + "</span> ";
		}
		else {
			print1 +=  randomValues[i] + " ";
		}
	}
	
	print1 += "<br><br>";
		
	// print the array, sorted, in left col
	print1 += "<b>Sorted</b> list: " + randomValues.sort(function(a,b){return a-b}).join(", ") + "<br><br>";
	
	// print the Median in the right col
	print2 += "<b>Median</b> value is " + randomValues[medianIteration] + "<br>";	
	
	// print the Mean in the right col
	print2 += "<b>Mean</b> value is " + Math.round(meanIteration/iterationCount) + " (" + meanIteration/iterationCount + ")<br>";
	
	// print the Mode in the right col
	print2 += "<b>Mode</b> is " + modeCounter[modeValue][0];
	
	// write the lists
	divB01.innerHTML = print1;
	divB02.innerHTML = print2;
</script>
</body>
</html>