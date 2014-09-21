<script>
	function $(id) {return document.getElementById(id);}

	function hide(letter) {
			var list = document.getElementsByClassName(letter);
			for (var i = 0; i < list.length; i++) {
			if (list[i].style.display == "inline") 
				list[i].style.display = "none";
			else list[i].style.display = "inline";
			}
	}

	function hideTuts(word) {
		if ($(word).style.display == "block") 
			$(word).style.display = "none";
		else $(word).style.display = "block";
	}
	
	function hideSearchResults() {
		 $("searchResults").style.display = "none";
	}

	function postPlainCode()        {document.getElementById("previewArea").value = document.getElementById("previewCode").value}
	function postRichCode()         {document.getElementById("previewArea").srcdoc = document.getElementById("previewCode").value}
	function resetCode()            {document.getElementById("previewCode").value = "This works"}
</script>
