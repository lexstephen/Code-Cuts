<?php  
	echo 	'
			<article id="tagList">';
	echo 	'
			<datalist id="tagSearch">';
			
		for ($x = 0; $x < $preciseTagsCnt; $x++) {
			echo 	'<option>'
					.$preciseTags[$x]
					.'</option>
					';
		}
	
	echo 	'</datalist>';

	for ($y = 0; $y < $preciseTagsCnt; $y++) {
		$formattedTag[$y] = '
		<a href="index.php?q='
								.$preciseTags[$y]
								.'">'
								.$preciseTags[$y]
								.'</a>';
	}
	
	$tagList = implode(', ', $formattedTag);
	
	echo '
	Browse Tags: '
	.$tagList;
	
	echo '
	</article>';

?>	