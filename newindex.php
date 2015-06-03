<?php  
	include 'style/newconfig.php'; 	// the 'database' (because I didn't pay attention in SQL class)
	
	
	
                    
// this has the html up until the end of the header tag
// meta info populated on the fly depending on above codes
	include 'style/header.php'; 	// header
	
	echo '<section id="mainSection">';
	echo '<form class="searchForm" action="newindex.php" role="search">
				<input type="search" name="q" list="tagSearch"> 
				<input type="submit" value="search">
				<input type="reset" value="clear" onclick="hideSearchResults()">
			</form>';
			
// html and php for sidebar (sidebar pulls in search.php)
	include 'style/newsidebar.php'; 	// sidebar
	
// html and php for file preview panes
// show file preview pane if a tutorial is selected 
// or just a welcome message without textarea if user is on the default page

if (isset($_GET['cc'])) {
                    $id = $_GET['cc'];
					$theCode = new Code();
					$codeMe = $theCode->displayCode($id);
					echo $codeMe;
                    
	} else {
		include 'style/newwelcome.php';
	}
	
	echo '</section>';
	
// html from beginning of footer tag to end of page
	include 'style/footer.php'; 	// footer

?>
	