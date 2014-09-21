<?php  
	echo 	'
			<article id="tagList">';
	echo '<h2 class="tagTitle">click to expand/collapse tags:</h2>
	<h3 onclick="hide(\'linknumber\')">#</h3> ';
	echo '<h3 onclick="hide(\'linkA\')">A</h3> ';
	echo '<h3 onclick="hide(\'linkB\')">B</h3> ';
	echo '<h3 onclick="hide(\'linkC\')">C</h3> ';
	echo '<h3 onclick="hide(\'linkD\')">D</h3> ';
	echo '<h3 onclick="hide(\'linkE\')">E</h3> ';
	echo '<h3 onclick="hide(\'linkF\')">F</h3> ';
	echo '<h3 onclick="hide(\'linkG\')">G</h3> ';
	echo '<h3 onclick="hide(\'linkH\')">H</h3> ';
	echo '<h3 onclick="hide(\'linkI\')">I</h3> ';
	echo '<h3 onclick="hide(\'linkJ\')">J</h3> ';
	echo '<h3 onclick="hide(\'linkK\')">K</h3> ';
	echo '<h3 onclick="hide(\'linkL\')">L</h3> ';
	echo '<h3 onclick="hide(\'linkM\')">M</h3> ';
	echo '<h3 onclick="hide(\'linkN\')">N</h3> ';
	echo '<h3 onclick="hide(\'linkO\')">O</h3> ';
	echo '<h3 onclick="hide(\'linkP\')">P</h3> ';
	echo '<h3 onclick="hide(\'linkQ\')">Q</h3> ';
	echo '<h3 onclick="hide(\'linkR\')">R</h3> ';
	echo '<h3 onclick="hide(\'linkS\')">S</h3> ';
	echo '<h3 onclick="hide(\'linkT\')">T</h3> ';
	echo '<h3 onclick="hide(\'linkU\')">U</h3> ';
	echo '<h3 onclick="hide(\'linkV\')">V</h3> ';
	echo '<h3 onclick="hide(\'linkW\')">W</h3> ';
	echo '<h3 onclick="hide(\'linkX\')">X</h3> ';
	echo '<h3 onclick="hide(\'linkY\')">Y</h3> ';
	echo '<h3 onclick="hide(\'linkZ\')">Z</h3><br>';
	
	// prints links to search results for each tag
	for ($y = 0; $y < $preciseTagsCnt; $y++) {
			if (substr(strtolower($preciseTags[$y]),0,1) == "a") {$formattedTag[$y] = '<a class="linkA" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "b") {$formattedTag[$y] = '<a class="linkB" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "c") {$formattedTag[$y] = '<a class="linkC" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "d") {$formattedTag[$y] = '<a class="linkD" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "e") {$formattedTag[$y] = '<a class="linkE" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "f") {$formattedTag[$y] = '<a class="linkF" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "g") {$formattedTag[$y] = '<a class="linkG" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "h") {$formattedTag[$y] = '<a class="linkH" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "i") {$formattedTag[$y] = '<a class="linkI" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "j") {$formattedTag[$y] = '<a class="linkJ" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "k") {$formattedTag[$y] = '<a class="linkK" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "l") {$formattedTag[$y] = '<a class="linkL" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "m") {$formattedTag[$y] = '<a class="linkM" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "n") {$formattedTag[$y] = '<a class="linkN" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "o") {$formattedTag[$y] = '<a class="linkO" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "p") {$formattedTag[$y] = '<a class="linkP" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "q") {$formattedTag[$y] = '<a class="linkQ" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "r") {$formattedTag[$y] = '<a class="linkR" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "s") {$formattedTag[$y] = '<a class="linkS" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "t") {$formattedTag[$y] = '<a class="linkT" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "u") {$formattedTag[$y] = '<a class="linkU" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "v") {$formattedTag[$y] = '<a class="linkV" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "w") {$formattedTag[$y] = '<a class="linkW" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "x") {$formattedTag[$y] = '<a class="linkX" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "y") {$formattedTag[$y] = '<a class="linkY" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else if (substr(strtolower($preciseTags[$y]),0,1) == "z") {$formattedTag[$y] = '<a class="linkZ" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}
			else {$formattedTag[$y] = '<a class="linknumber" href="index.php?q='.$preciseTags[$y].'">'.$preciseTags[$y].'</a>';}

	}
	
	$tagList = implode(' ', $formattedTag);
	
	echo ''
	.$tagList;
	
	echo '
	</article>';
?>	