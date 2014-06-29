<?php 

// manually enter the file, title and category of each entry
	$t01 = array ('file' => '1231-01-01', 'title' => 'Median Numbers', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen');
	$t02 = array ('file' => '1231-01-02', 'title' => 'Case Statement', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t03 = array ('file' => '1231-01-03', 'title' => 'isNaN', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t04 = array ('file' => '1231-02-01', 'title' => 'Dynamic HTML with Loops', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t05 = array ('file' => '1231-03-01', 'title' => 'Random Number Array', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t06 = array ('file' => '1231-04-01', 'title' => 'Printing & Comparing Array Elements', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t07 = array ('file' => '1231-04-02', 'title' => 'Modifying Arrays', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t08 = array ('file' => '1231-05-01', 'title' => 'Modifying Style Elements', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
	$t09 = array ('file' => '1231-05-02', 'title' => 'Calculator', 'cat' => 'JavaScript', 'author' => 'Alexis Dicks-Stephen'); 
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
	
// add a fourth array element to the above with its associated tags
	$t01['tags'] = array('if', 'else', 'prompt', 'for', 'median');
	$t02['tags'] = array('prompt', 'switch', 'case', 'getElementById', 'innerText');
	$t03['tags'] = array('if', 'else', 'prompt', 'isNaN');
	$t04['tags'] = array('table', 'ul', 'li', 'if', 'else', 'prompt', 'getElementById', 'innerHTML', 'isNaN');
	$t05['tags'] = array('ul', 'li', 'if', 'else', 'prompt', 'getElementById', 'innerHTML', 'parseInt', 'Math', 'array');
	$t06['tags'] = array('ul', 'li', 'if', 'else', 'prompt', 'getElementById', 'innerHTML', 'isNaN', 'parseInt', 'Math', 'mean', 'median', 'mode', 'length', 'array', 'multidimensional array');
	$t07['tags'] = array('for', 'getElementById', 'innerHTML', 'length', 'array', 'multidimensional array', 'indexOf', 'lastIndexOf', 'pop', 'reverse', 'concat', 'shift', 'splice', 'join', 'slice', 'push', 'unshift');
	$t08['tags'] = array('form', 'input', 'style', 'backgroundColor', 'color', 'getElementById', 'function', 'onclick');
	$t09['tags'] = array('form', 'input', 'if', 'else', 'getElementById', 'innerHTML', 'isNaN', 'parseFloat', 'Math', 'function', 'onclick');
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

// merge the arrays into one super array to be used henceforth
	$tutorials = array($t01, $t02, $t03, $t04, $t05, $t06, $t07, $t08, $t09, $t10, $t11, $t12, $t13, $t14, $t15, $t16, $t17, $t18, $t19, $t20, $t21, $t22, $t23, $t24, $t25, $t26);
	
// merge all the tag arrays and then return unique entries then re-set the indexes
	$preciseTags = 	array_values(
						array_unique(
							array_merge($t01['tags'], $t02['tags'], $t03['tags'], $t04['tags'], $t05['tags'], $t06['tags'], $t07['tags'], $t08['tags'], $t09['tags'], $t10['tags'], $t11['tags'], $t12['tags'], $t13['tags'], $t14['tags'], $t15['tags'], $t16['tags'], $t17['tags'], $t18['tags'], $t19['tags'], $t20['tags'], $t21['tags'], $t22['tags'], $t23['tags'], $t24['tags'], $t25['tags'], $t26['tags'])
						)
					);
	
// alphabetize the list of tags
	sort($preciseTags);
	
// count things; it's handy to have
	$tutCnt = count($tutorials);
	$preciseTagsCnt = count($preciseTags);

?>