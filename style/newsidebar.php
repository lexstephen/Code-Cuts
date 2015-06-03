<?php
	echo '<div id="sidebar" role="navigation">';
	
	include 'newsearch.php';
	
// ************************************************** //

	echo '<div id="tutorialCategories">';
    
    $theCats = new Code();
    $catList = $theCats->listCats();
    /* foreach ($catList as $category) {
                    
// C# section
	echo '
	<h3 class="sidebarHead" onclick="hideTuts(\'heading'.$cName.'\')">'.$cName.'</h3>
	<ul id="heading$category">';
	for ($i = 0; $i < $tutCnt; $i++) {
	// print CSS tutorials
		if ($tutorials[$i]['cat'] == 'csharp') {
			echo '
			<li><a href="index.php?cat='
				.$tutorials[$i]['cat']
				.'&file='.$tutorials[$i]['file']
				.'">'
				.$tutorials[$i]['title']
				.'</a></li>';
		}
	}
	echo '</ul>';
	} */
    
	echo '</div>';

// ************************************************** //
echo '
</div>';
?>
