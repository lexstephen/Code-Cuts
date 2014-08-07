<!doctype html>
<html lang="en-us">
<head>
	<meta name="author" content="<?php echo $metaAuthor; ?>">
	<meta name="description" content="<?php echo $metaTitle; ?>">
	<meta name="keywords" content="<?php echo $metaKeywords; ?>">
	<meta charset="UTF-8">
	
	<title><?php echo $siteTitle; ?> | <?php echo $metaTitle; ?></title>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo $useStylesheet; ?>">
	  <script>
  $(function() {
    $( "#sidebar" ).accordion();
  });
  </script>
</head>

<body>
	<header id="mainHeader" role="banner">
		<h1><a href="index.php"><?php echo $siteTitle; ?></a></h1>
	</header>
