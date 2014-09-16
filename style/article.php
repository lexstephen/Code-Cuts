<article id="codeArea" role="main">
	<div id="codeBanner"><?php
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
	?></div>
	
<?php
    // if we are displaying a php file we need it included as an iframe to allow for frame functionality
    // if it is just a txt file we want to embed it in a div so the html/js previews live

    if ($fileTypePreview == "php") {
        echo '<iframe id="previewArea" src="'.$cat.'/'.$file.'.'.$fileTypePreview.'"></iframe>';
    }
    else {
        echo '<div id="previewArea">';
        include $cat.'/'.$file.'.'.$fileTypePreview;
        echo '</div>';
    }
?>


	<textarea id="previewCode"><?php
// code preview pane
		include $cat.'/'.$file.'.'.$fileTypeCode;
	?></textarea>

	<input type="submit" value="Update" onclick="<?php
    // call function that will push to iFrame srcdoc if a PHP file is displayed
    // if it is just a txt file call other function

    if ($fileTypePreview == "php") {
        echo 'postRichCode()';
    }
    else {
        echo 'postPlainCode()';
    }
    ?>;">
	<input type="submit" value="Reset" onclick="resetCode();">
	
	<?php
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
	?>
</article>