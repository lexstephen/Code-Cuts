<?php 

// manually enter the file, title and category of each entry
	$t1 = array ('file' => '1231-01-01', 'title' => 'Median Numbers', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen');
	$t2 = array ('file' => '1231-01-02', 'title' => 'Case Statement', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t3 = array ('file' => '1231-01-03', 'title' => 'isNaN', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t4 = array ('file' => '1231-02-01', 'title' => 'Dynamic HTML with Loops', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t5 = array ('file' => '1231-03-01', 'title' => 'Random Number Array', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t6 = array ('file' => '1231-04-01', 'title' => 'Printing & Comparing Array Elements', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t7 = array ('file' => '1231-04-02', 'title' => 'Modifying Arrays', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t8 = array ('file' => '1231-05-01', 'title' => 'Modifying Style Elements', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t9 = array ('file' => '1231-05-02', 'title' => 'Calculator', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t10 = array ('file' => '1231-05-03', 'title' => 'Creating Arrays on the fly', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t11 = array ('file' => '1231-06-01', 'title' => 'Creating & Updating Objects', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t12 = array ('file' => '1231-07-01', 'title' => 'Mouse Coordinates', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t13 = array ('file' => '1231-07-02', 'title' => 'Manipulating Images', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t14 = array ('file' => '1231-C-01', 'title' => 'Console Logging', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t15 = array ('file' => '1231-C-02', 'title' => 'Prevent Default', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t16 = array ('file' => '1231-C-03', 'title' => 'Styling Lists on the fly', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t17 = array ('file' => '1231-A-01', 'title' => 'Searching with Angular', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t18 = array ('file' => '1223-04-01', 'title' => 'Background Gradient', 'cat' => 'CSS', 'author' => 'Alexis Dicks-Stephen'); 
	$t19 = array ('file' => 'TMW-01-01', 'title' => 'Accessibility: WAI-ARIA & Landmark Roles', 'cat' => 'HTML', 'author' => 'Adapted from The Modern Web c2013 by Peter Gasston'); 
	$t20 = array ('file' => 'TMW-02-01', 'title' => 'Semantic Markup & Data Attributes', 'cat' => 'HTML', 'author' => 'Adapted from The Modern Web c2013 by Peter Gasston');
	$t21 = array ('file' => 'TMW-03-01', 'title' => 'Media Queries', 'cat' => 'CSS', 'author' => 'Adapted from The Modern Web c2013 by Peter Gasston'); 
	$t22 = array ('file' => 'TMW-03-02', 'title' => 'Box-Sizing', 'cat' => 'CSS', 'author' => 'Adapted from The Modern Web c2013 by Peter Gasston'); 
	$t23 = array ('file' => 'TMW-03-03', 'title' => 'Relative Units', 'cat' => 'CSS', 'author' => 'Adapted from The Modern Web c2013 by Peter Gasston'); 
	$t24 = array ('file' => 'TMW-03-04', 'title' => 'Responsive Objects', 'cat' => 'CSS', 'author' => 'Adapted from The Modern Web c2013 by Peter Gasston'); 
	$t25 = array ('file' => 'TMW-04-01', 'title' => 'Multi Columns', 'cat' => 'CSS', 'author' => 'Adapted from The Modern Web c2013 by Peter Gasston'); 
	$t26 = array ('file' => 'TMW-05-01', 'title' => 'Forms', 'cat' => 'HTML', 'author' => 'Adapted from The Modern Web c2013 by Peter Gasston');
	$t27 = array ('file' => '1168-01-01', 'title' => 'Create a Database', 'cat' => 'sql', 'author' => 'Adapted from 1168 Course materials'); 
	$t28 = array ('file' => '1168-01-02', 'title' => 'Load a Database', 'cat' => 'sql', 'author' => 'Adapted from 1168 Course materials'); 
	$t29 = array ('file' => '2130-01-01', 'title' => 'Print Line and Read Line', 'cat' => 'Java', 'author' => 'Alexis Dicks-Stephen'); 
	
// add a fourth array element to the above with its associated tags
	$t1['tags'] = array('if', 'else', 'prompt', 'for', 'median');
	$t2['tags'] = array('prompt', 'switch', 'case', 'getElementById', 'innerText');
	$t3['tags'] = array('if', 'else', 'prompt', 'isNaN');
	$t4['tags'] = array('table', 'ul', 'li', 'if', 'else', 'prompt', 'getElementById', 'innerHTML', 'isNaN');
	$t5['tags'] = array('ul', 'li', 'if', 'else', 'prompt', 'getElementById', 'innerHTML', 'parseInt', 'Math', 'array');
	$t6['tags'] = array('ul', 'li', 'if', 'else', 'prompt', 'getElementById', 'innerHTML', 'isNaN', 'parseInt', 'Math', 'mean', 'median', 'mode', 'length', 'array', 'multidimensional array');
	$t7['tags'] = array('for', 'getElementById', 'innerHTML', 'length', 'array', 'multidimensional array', 'indexOf', 'lastIndexOf', 'pop', 'reverse', 'concat', 'shift', 'splice', 'join', 'slice', 'push', 'unshift');
	$t8['tags'] = array('form', 'input', 'style', 'backgroundColor', 'color', 'getElementById', 'function', 'onclick');
	$t9['tags'] = array('form', 'input', 'if', 'else', 'getElementById', 'innerHTML', 'isNaN', 'parseFloat', 'Math', 'function', 'onclick');
	$t10['tags'] = array('form', 'input', 'for', 'getElementById', 'innerHTML', 'isNaN', 'parseFloat', 'Math', 'length', 'array', 'join', 'function', 'onclick');
	$t11['tags'] = array('form', 'input', 'getElementById', 'innerHTML', 'this', 'toString', 'length', 'array', 'object', 'function', 'onclick');
	$t12['tags'] = array('getElementById', 'innerHTML', 'function', 'onclick', 'onmousemove', 'onmouseout', 'pageX', 'pageY');
	$t13['tags'] = array('table', 'img', 'style', 'transition', 'width', 'border', 'getElementById', 'array', 'function', 'onclick', 'onmouseout', 'onmouseover', 'document.images');
	$t14['tags'] = array('attributes', 'if', 'for', 'getElementById', 'getElementsByTagName', 'length', 'array', 'childNodes', 'nodeType', 'nodeName', 'console.log');
	$t15['tags'] = array('alert', 'function', 'onclick', 'preventDefault', 'window.location', 'querySelector');
	$t16['tags'] = array('ul', 'li', 'form', 'input', 'style', 'backgroundColor', 'if', 'for', 'getElementsByTagName', 'length', 'array', 'function', 'childNodes', 'nodeType');
	$t17['tags'] = array('table', 'array', 'angular', 'ng-app', 'ng-controller', 'ng-click', 'sortOrder', 'reverse', 'ng-model', 'filter', 'module', 'controller');
	$t18['tags'] = array('header', 'section', 'footer', 'background', 'gradient', 'float');
	$t19['tags'] = array('header', 'nav', 'footer', 'accessibility', 'role', 'attributes', 'exact attribute value selector', 'form');
	$t20['tags'] = array('attributes', 'exact attribute value selector', 'microformats', 'rel', 'hCard', 'RDFa', 'microdata', 'itemscope', 'itemprop', 'itemtype', 'datetime', 'schema', 'data attributes', 'API', 'querySelector');
	$t21['tags'] = array('background', 'rel', 'width', 'if', 'else', 'function', 'screen', 'device-width', 'orientation', 'portrait', 'landscape', 'device-aspect-ratio', 'responsive', 'media', 'devicePixelRatio', 'webkit', 'viewport', 'meta', 'pointer', 'matchMedia()', 'addListener');
	$t22['tags'] = array('width', 'border', 'function', 'margin', 'padding', 'calc', 'box-sizing', 'responsive');
	$t23['tags'] = array('width', 'height', 'viewport', 'rem', 'em', 'font', 'responsive', 'vw', 'vh');
	$t24['tags'] = array('img', 'width', 'height', 'viewport', 'responsive', 'object-fit', 'object-position');
	$t25['tags'] = array('border', 'columns');
	$t26['tags'] = array('datetime', 'form', 'input', 'autofocus', 'placeholder', 'required', 'spellcheck', 'autocomplete', 'datalist', 'list', 'max', 'min', 'lang');
	$t27['tags'] = array('create table', 'drop table', 'linesize', 'pagesize', 'constraint', 'primary key', 'foreign key', 'references', 'describe', 'commit');
	$t28['tags'] = array('delete from', 'insert into', 'commit', 'select', 'select *');
	$t29['tags'] = array('System', 'out', 'println', 'Scanner', 'in', 'nextDouble()');
	
	/* my attempt to automate the array building is not working 
	$numberOfTutorials = 28;
	$buildTutorialArray = '';
	
	for ($x = 1; $x <= $numberOfTutorials; $x++) {
		if ($x == $numberOfTutorials) 
			$buildTutorialArray += '$t'.$x;
		else 
			$buildTutorialArray += '$t'.$x.', ';
	}
	*/
	
// merge the arrays into one super array to be used henceforth
	$tutorials = array($t1, $t2, $t3, $t4, $t5, $t6, $t7, $t8, $t9, $t10, $t11, $t12, $t13, $t14, $t15, $t16, $t17, $t18, $t19, $t20, $t21, $t22, $t23, $t24, $t25, $t26, $t27, $t28, $t29);

// merge all the tag arrays and then return unique entries
	$preciseTags = array_unique(array_merge($t1['tags'], $t2['tags'], $t3['tags'], $t4['tags'], $t5['tags'], $t6['tags'], $t7['tags'], $t8['tags'], $t9['tags'], $t10['tags'], $t11['tags'], $t12['tags'], $t13['tags'], $t14['tags'], $t15['tags'], $t16['tags'], $t17['tags'], $t18['tags'], $t19['tags'], $t20['tags'], $t21['tags'], $t22['tags'], $t23['tags'], $t24['tags'], $t25['tags'], $t26['tags'], $t27['tags'], $t28['tags'], $t29['tags']));
	
// alphabetize the list of tags
	sort($preciseTags);
	
// count things; it's handy to have
	$tutCnt = count($tutorials);
	$preciseTagsCnt = count($preciseTags);

?>