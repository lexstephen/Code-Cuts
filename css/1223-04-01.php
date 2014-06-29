
<!doctype html>
<html lang="en-us">
<head>
<title>Lab 4</title>

<meta name="author" content="Alexis Dicks-Stephen">
<meta name="description" content="COMP 1223 Lab 4">
<meta name="keywords" content="">
<meta charset="UTF-8">

<style>
	#wrapper	{width: 90%;
				background: -webkit-linear-gradient(left, red , orange); 
				background: -o-linear-gradient(right, red , orange); 
				background: -moz-linear-gradient(right, red , orange); 
				background: linear-gradient(to right, red , orange);
				padding: 10px;}
	#sction		{background-color: red;
				padding: 2px;
				width: 50%;
				min-height: 40px;
				margin-left: 25%;}
	#left		{background-color: yellow;
				padding: 2px;
				float: left;
				width: 20%;
				min-height: 40px;}
	#right		{background-color: yellow;
				padding: 2px;
				float: right;
				width: 20%;
				min-height: 40px;}
	#ftr 		{clear: both;}
</style>
</head>

<body>
<div id="wrapper">
	<header>Header</header>
	
	<aside id="left">
		<h2>Sidebar A</h2>
	</aside>
	<aside id="right">
		<h2>Sidebar B</h2>
	</aside>
	<section id="sction">
		<h1>Main</h1>
	</section>
	
	<footer id="ftr">footer content here</footer>

</div>
</body>
</html>