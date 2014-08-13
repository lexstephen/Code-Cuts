<?php
	echo '
	<div id="sidebar" role="navigation">
	';
	
	include 'search.php';
	
// ************************************************** //

// CSS section
	echo '
	<h3 class="sidebarHead">CSS</h3>
	<div><ul>';
	for ($i = 0; $i < $tutCnt; $i++) {
	// print CSS tutorials
		if ($tutorials[$i]['cat'] == 'CSS') {
			echo '
			<li><a href="index.php?cat='
				.$tutorials[$i]['cat']
				.'&file='.$tutorials[$i]['file']
				.'">'
				.$tutorials[$i]['title']
				.'</a></li>';
		}
	}
	echo '</ul></div>';

// HTML Section
	echo '
	<h3 class="sidebarHead">HTML</h3>
	<ul>';
	for ($i = 0; $i < $tutCnt; $i++) {
	// print HTML tutorials
		if ($tutorials[$i]['cat'] == 'HTML') {

			echo '
			<li><a href="index.php?cat='
				.$tutorials[$i]['cat']
				.'&file='.$tutorials[$i]['file']
				.'">'
				.$tutorials[$i]['title']
				.'</a></li>';
		}
	}
	echo '
	</ul>';

// JavaScript Section
	echo '
	<h3 class="sidebarHead">JavaScript</h3>
	<ul>';
	for ($i = 0; $i < $tutCnt; $i++) {
	// print JS tutorials
		if ($tutorials[$i]['cat'] == 'JavaScript') {
			echo '
			<li><a href="index.php?cat='
				.$tutorials[$i]['cat']
				.'&file='.$tutorials[$i]['file']
				.'">'
				.$tutorials[$i]['title']
				.'</a></li>';
		}
	}
	echo '
	</ul>';

// SQL Section
	echo '
	<h3 class="sidebarHead">SQL</h3>
	<ul>';
	for ($i = 0; $i < $tutCnt; $i++) {
	// print JS tutorials
		if ($tutorials[$i]['cat'] == 'sql') {
			echo '
			<li><a href="index.php?cat='
				.$tutorials[$i]['cat']
				.'&file='.$tutorials[$i]['file']
				.'">'
				.$tutorials[$i]['title']
				.'</a></li>';
		}
	}
	echo '
	</ul>';

// ************************************************** //
echo '
</div>';
?>
