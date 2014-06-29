<?php 

// print the search form
	echo '<ul><li class="sidebarHead">Search</li>
			<li class="searchForm"><form action="index.php" role="search">
			<input type="search" name="q" list="tagSearch"> 
			<input type="hidden" name="cat" value="'.$cat.'"> 
			<input type="hidden" name="file" value="'.$file.'"> 
			<input type="submit" value="Go!">
			</form></li>';

// once they hit search, look for query and build a list of results
	if(isset($_GET['q'])) {
		$q = $_GET['q'];

// heading displays the query
		echo '<li class="searchResultHead">Search results: <b>'.$q.'</b></li>';

/* loop through all the various tags subarrays in config file's $tutorials/$i/$tags to find a match with query
	to ensure a total match, we will build a temporary array, theTags, which holds the lowercase values of all the tags
	and compares it against a lowercase version of the search query */

		for ($i = 0; $i < $tutCnt; $i++) {

			$tagCount = count($tutorials[$i]['tags']);
			
			for ($x = 0; $x < $tagCount; $x++) {
					$theTags[$x] = strtolower($tutorials[$i]['tags'][$x]);
/*					echo $tutorials[$i]['tags'][$x].' is in tutorial<br>';
					echo $theTags[$x].' <br>'; */
			if ($tutorials[$i]['tags'][$x] == $q) {
				if (in_array(strtolower($q),$theTags,'strict')) {
						/* echo '<b>'.$theTags[$x].'</b> <br>'; */
						echo '<li class="searchResults"><span class="catSmall">'
						.$tutorials[$i]['cat']
						.':</span> <a href="index.php?cat='
						.$tutorials[$i]['cat']
						.'&file='.$tutorials[$i]['file']
						.'&q='.$q
						.'">'
						.$tutorials[$i]['title']
						.'</a></li>';
				} 
			}
			}
			
		}
	}
	
	echo '</ul>';
?>