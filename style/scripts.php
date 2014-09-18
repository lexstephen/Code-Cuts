<script>
	function $(id) {return document.getElementById(id);}
	
	function hide(letter) {
			var list = document.getElementsByClassName(letter);
			for (var i = 0; i < list.length; i++) {
			if (list[i].style.display == "block") 
				list[i].style.display = "none";
			else list[i].style.display = "block";
			}
	}
	
	function hideTuts(word) {
		if ($(word).style.display == "block") 
			$(word).style.display = "none";
		else $(word).style.display = "block";
	}
		/*								
	function hideSearch() 				{if ($('headingSearch').style.display == "block") $('headingSearch').style.display = "none";
										else $('headingSearch').style.display = "block";}
	function hideCsharp() 				{if ($('headingCsharp').style.display == "block") $('headingCsharp').style.display = "none";
										else $('headingCsharp').style.display = "block";}
	function hideCSS() 					{if ($('headingCSS').style.display == "block") $('headingCSS').style.display = "none";
										else $('headingCSS').style.display = "block";}
	function hideHTML() 				{if ($('headingHTML').style.display == "block") $('headingHTML').style.display = "none";
										else $('headingHTML').style.display = "block";}
	function hideJava() 				{if ($('headingJava').style.display == "block") $('headingJava').style.display = "none";
										else $('headingJava').style.display = "block";}
	function hideJavaScript() 			{if ($('headingJavaScript').style.display == "block") $('headingJavaScript').style.display = "none";
										else $('headingJavaScript').style.display = "block";}
	function hidePHP() 					{if ($('headingPHP').style.display == "block") $('headingPHP').style.display = "none";
										else $('headingPHP').style.display = "block";}
	function hideSQL() 					{if ($('headingSQL').style.display == "block") $('headingSQL').style.display = "none";
										else $('headingSQL').style.display = "block";}
	*/
	
    function postPlainCode()        {document.getElementById("previewArea").value = document.getElementById("previewCode").value}
    function postRichCode()         {document.getElementById("previewArea").srcdoc = document.getElementById("previewCode").value}
    function resetCode()            {document.getElementById("previewCode").value = "This works"}
</script>