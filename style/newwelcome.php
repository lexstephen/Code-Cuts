<article id="codeArea" role="main">
	
	<div id="previewArea"><?php 
// live preview pane
		include $cat.'/'.$file.'.'.$fileTypeCode; 
	?></div>
	<?php
// module that lists all tags in use across tutorials
	include 'style/tags.php'; 		?>
</article>