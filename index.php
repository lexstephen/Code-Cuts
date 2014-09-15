<?php  
	include 'style/config.php'; 	// the 'database' (because I didn't pay attention in SQL class)
	
	$siteTitle = "Code Cuts";
	$useStylesheet = "style/style.css";
    $fileTypePreview = "txt";
    $fileTypeCode = "txt";

	$metaAuthor = "Alexis Dicks-Stephen";
	$metaTitle = "HTML, CSS, JavaScript and PHP Tutorials";
	$metaKeywords = "html, css, javascript, php";
	
// these variables determine which file is in the preview pane
// if they've already selected a file for viewing, preserve that
	if(isset($_GET['cat']) && isset($_GET['file'])) {
		$cat = $_GET['cat'];
        $file = $_GET['file'];

// look in all the tutorials
		for ($i = 0; $i < $tutCnt; $i++) {
// stop when you find the one that matches category and filename
			if (($tutorials[$i]['cat'] == $cat) && ($tutorials[$i]['file'] == $file)) 
				{
// pull the tutorial's title and tags for the meta tags
                $metaTitle = $tutorials[$i]['title'];
                $metaAuthor = $tutorials[$i]['author'];

// determine which file types to look for in preview and code panes
                $fileTypePreview = $tutorials[$i]['fileTypePreview'];
                $fileTypeCode = $tutorials[$i]['fileTypeCode'];
					
// have to make a separate array to get the implode function to work 
// couldn't use the tutorials subarray in its spot ~8 lines down
					$theTags = array();
					$tagCount = count($tutorials[$i]['tags']);
					
					for ($x = 0; $x < $tagCount; $x++) {
						$theTags[$x] = $tutorials[$i]['tags'][$x];
					}
// put some nice commas between all those tags and store it in metaKeywords
					$metaKeywords = implode(', ', $theTags);
				}
		}
	}

// show them some default text if they haven't selected one yet
	else {
		$cat = 'index';
		$file = 'index';
	}
	
// this has the html up until the end of the header tag
// meta info populated on the fly depending on above codes
	include 'style/header.php'; 	// header
	include 'style/scripts.php';
	
	echo '<section id="mainSection">';

// html and php for sidebar (sidebar pulls in search.php)
	include 'style/sidebar.php'; 	// sidebar
	
// html and php for file preview panes
// show file preview pane if a tutorial is selected 
// or just a welcome message without textarea if user is on the default page
	if(isset($_GET['cat']) && isset($_GET['file'])) {
		include 'style/article.php'; 	// file preview pane
	} else {
		include 'style/welcome.php';
	}
// module that lists all tags in use across tutorials
	include 'style/tags.php'; 		// code to show all tags
	
	echo '</section>';
	
// html from beginning of footer tag to end of page
	include 'style/footer.php'; 	// footer

?>
	