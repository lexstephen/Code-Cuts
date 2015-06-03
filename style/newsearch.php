<?php 
	echo '<div id="searchResults">';
		
// once they hit search, look for query and build a list of results
	if(isset($_GET['q'])) {
		$q = $_GET['q'];
// heading displays the query


    $theCats = new Code();
    $catList = $theCats->searchTags($q);
    }
	echo '</div>';
?>