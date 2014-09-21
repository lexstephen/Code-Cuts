<?php 
	echo '<div id="searchResults">';
		
// once they hit search, look for query and build a list of results
	if(isset($_GET['q'])) {
		$q = $_GET['q'];

// heading displays the query
		echo '<h4>Search results: '.$q.'</h4>';

// loop through all the various tags subarrays in config file's $tutorials/$i/$tags
// to find a match with query 
		for ($i = 0; $i < $tutCnt; $i++) {
			$tagCount = count($tutorials[$i]['tags']);

// search the categories and display any of those matches			
			if (strtolower($tutorials[$i]['cat']) == strtolower($q)) {
				echo '<span class="sResult"><span class="catSmall">'
				.$tutorials[$i]['cat']
				.':</span> <a href="index.php?cat='
				.$tutorials[$i]['cat']
				.'&file='.$tutorials[$i]['file']
				.'&q='.$q
				.'">'
				.$tutorials[$i]['title']
				.'</a><br></span>';
			}
// search the tags and display any of those matches
// tried to use in_array here but it returned every value after the match ??

			for ($x = 0; $x < $tagCount; $x++) {
				if ($tutorials[$i]['tags'][$x] == $q) {
					echo '<span class="sResult"><span class="catSmall">'
					.$tutorials[$i]['cat']
					.':</span> <a href="index.php?cat='
					.$tutorials[$i]['cat']
					.'&file='.$tutorials[$i]['file']
					.'&q='.$q
					.'">'
					.$tutorials[$i]['title']
					.'</a><br></span>';
				}
			}
		}
	}
	echo '</div>';
?>