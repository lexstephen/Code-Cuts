<script>
function postCode() {
		document.getElementById("previewArea").innerHTML = document.getElementById("previewCode").value;
}
</script>

<script>
function resetCode() {
		document.getElementById("previewCode").value = "<?php include $cat.'/'.$file.'.'.$fileType; ?>";
}
</script>