<?php 

// print the search form
	echo '
	<h3 class="sidebarHead noborder">Search</h3>
			<div id="searchResults">
			<form action="index.php" role="search">
				<input type="search" name="q" list="tagSearch"> 
				<input type="hidden" name="cat" value="'.$cat.'"> 
				<input type="hidden" name="file" value="'.$file.'"> 
				<input type="submit" value="Go!">
			</form>';

// once they hit search, look for query and build a list of results
	if(isset($_GET['q'])) {
		$q = $_GET['q'];

// heading displays the query
		echo 'Search results: <b>'.$q.'</b><br><br>';

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
				.'</a></span>';
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
					.'</a></span>';
				}
			}
		}
	}
	
	echo "</div>";
?>