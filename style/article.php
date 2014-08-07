


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
	
	<div id="previewArea"><?php 
// live preview pane
		include $cat.'/'.$file.'.'.$fileType; 
	?></div>

	<textarea id="previewCode"><?php
// code preview pane
		include $cat.'/'.$file.'.'.$fileType; 
	?></textarea>
	<input type="button" value="Update" onclick="postCode()">
	 <input type="button" value="Reset" onclick="resetCode()"> 
	
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