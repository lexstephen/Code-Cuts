<article id="codeArea" role="main">
<?php
	echo '<div id="codeBanner">';
// display article's category, title
		for ($i = 0; $i < $tutCnt; $i++) {
			if (($tutorials[$i]['cat'] == $cat) && ($tutorials[$i]['file'] == $file)) 
				{
					echo '<h3>'
						.$tutorials[$i]['cat']
						.' </h3> | <h4> '
						.$tutorials[$i]['title']
						.'</h4>';
				}
		}
		
// display article's tags
		for ($i = 0; $i < $tutCnt; $i++) {
			if (($tutorials[$i]['cat'] == $cat) && ($tutorials[$i]['file'] == $file)) 
				{
					echo  '<h5>tagged under ';
					$theTags = array();
					$tagCount = count($tutorials[$i]['tags']);
					for ($x = 0; $x < $tagCount; $x++)
					{
						$theTags[$x] = '<a href="index.php?cat='.$cat.'&file='.$file.'&q='.$tutorials[$i]['tags'][$x].'">'.$tutorials[$i]['tags'][$x].'</a>';
					}
						$tagList = implode(', ', $theTags);
						echo $tagList
						.' ';
						echo '</h5>';
				}
		}
	echo '</div>';

	// first check if the preview pane is turned on ($showPreview = 1)
    // if we are displaying a php file we need it included as an iframe to allow for frame functionality
    // if it is just a txt file we want to embed it in a div so the html/js previews live
	// also check if the code pane is turned on ($showCode = 1)
	if (($showPreview) && ($showCode)) {
		if ($fileTypePreview == "php") {
			echo '<iframe id="previewArea" src="'.$cat.'/'.$file.'.'.$fileTypePreview.'"></iframe>';
		}
		else {
			echo '<div id="previewArea">';
			include $cat.'/'.$file.'.'.$fileTypePreview;
			echo '</div>';
		}
	}
	if (($showPreview) && (!$showCode)) {
		if ($fileTypePreview == "php") {
			echo '<iframe id="previewAreaLg" src="'.$cat.'/'.$file.'.'.$fileTypePreview.'"></iframe>';
		}
		else {
			echo '<div id="previewAreaLg">';
			include $cat.'/'.$file.'.'.$fileTypePreview;
			echo '</div>';
		}
	}
		if (($showCode) && (!$showPreview)) {
		echo '<textarea id="previewCodeLg">';
		include $cat.'/'.$file.'.'.$fileTypeCode;
		echo '</textarea>';
	}
		if (($showCode) && ($showPreview)) {
		echo '<textarea id="previewCode">';
		include $cat.'/'.$file.'.'.$fileTypeCode;
		echo '</textarea>';
	}

/*	
	// update and reset buttons
	if ($showCode) {
		if ($fileTypePreview == "php") { // postRichCode() changes the iframe srcdoc
			echo '<input type="submit" value="Update" onclick="postRichCode();">
		<input type="submit" value="Reset" onclick="resetCode();">';
		}
		else if (($cat == "csharp") || ($cat == "Java") || ($cat == "sql")) {
			// don't print submit buttons if the categories don't require them
		}
		else { // postPlainCode() simply overwrites a div's innerHTML
			echo '<input type="submit" value="Update" onclick="postPlainCode();">
		<input type="submit" value="Reset" onclick="resetCode();">';
		}
	}
*/
    ?>
</article>