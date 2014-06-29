<?php
	echo '<aside id="sidebar" role="navigation">';
	
	include 'search.php';
	
// ************************************************** //

// CSS section
	echo '<ul><li class="sidebarHead">CSS</li>';
	for ($i = 0; $i < $tutCnt; $i++) {
	// print CSS tutorials
		if ($tutorials[$i]['cat'] == 'CSS') {
			echo '<li><a href="index.php?cat='
				.$tutorials[$i]['cat']
				.'&file='.$tutorials[$i]['file']
				.'">'
				.$tutorials[$i]['title']
				.'</a></li>';
		}
	}
	echo '</ul>';

// HTML Section
	echo '<ul><li class="sidebarHead">HTML</li>';
	for ($i = 0; $i < $tutCnt; $i++) {
	// print HTML tutorials
		if ($tutorials[$i]['cat'] == 'HTML') {

			echo '<li><a href="index.php?cat='
				.$tutorials[$i]['cat']
				.'&file='.$tutorials[$i]['file']
				.'">'
				.$tutorials[$i]['title']
				.'</a></li>';
		}
	}
	echo '</ul>';

// JavaScript Section
	echo '<ul><li class="sidebarHead">JavaScript</li>';
	for ($i = 0; $i < $tutCnt; $i++) {
	// print JS tutorials
		if ($tutorials[$i]['cat'] == 'JavaScript') {
			echo '<li><a href="index.php?cat='
				.$tutorials[$i]['cat']
				.'&file='.$tutorials[$i]['file']
				.'">'
				.$tutorials[$i]['title']
				.'</a></li>';
		}
	}
	echo '</ul>';

// ************************************************** //
echo '</aside>';
?>
