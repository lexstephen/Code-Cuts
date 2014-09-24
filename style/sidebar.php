<?php
	echo '<div id="sidebar" role="navigation">';
	
	include 'search.php';
	
// ************************************************** //

	echo '<div id="tutorialCategories">';
// C# section
	echo '
	<h3 class="sidebarHead" onclick="hideTuts(\'headingCsharp\')">C#</h3>
	<ul id="headingCsharp">';
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
	
// CSS section
	echo '
	<h3 class="sidebarHead" onclick="hideTuts(\'headingCSS\')">CSS</h3>
	<ul id="headingCSS">';
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
	echo '</ul>';

// HTML Section
	echo '
	<h3 class="sidebarHead" onclick="hideTuts(\'headingHTML\')">HTML</h3>
	<ul id="headingHTML">';
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

// Java Section
	echo '
	<h3 class="sidebarHead" onclick="hideTuts(\'headingJava\')">Java</h3>
	<ul id="headingJava">';
	for ($i = 0; $i < $tutCnt; $i++) {
	// print Java tutorials
		if ($tutorials[$i]['cat'] == 'Java') {
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
	<h3 class="sidebarHead" onclick="hideTuts(\'headingJavaScript\')">JavaScript</h3>
	<ul id="headingJavaScript">';
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

// PHP Section
echo '
	<h3 class="sidebarHead" onclick="hideTuts(\'headingPHP\')">PHP</h3>
	<ul id="headingPHP">';
for ($i = 0; $i < $tutCnt; $i++) {
    // print PHP tutorials
    if ($tutorials[$i]['cat'] == 'PHP') {
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
	<h3 class="sidebarHead" onclick="hideTuts(\'headingSQL\')">SQL</h3>
	<ul id="headingSQL">';
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
	echo '</div>';

// Et cetera Section
	echo '
	<h3 class="sidebarHead" onclick="hideTuts(\'headingetc\')">&</h3>
	<ul id="headingetc">';
	for ($i = 0; $i < $tutCnt; $i++) {
	// print other tutorials
		if ($tutorials[$i]['cat'] == 'etc') {
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
	echo '</div>';

// ************************************************** //
echo '
</div>';
?>
