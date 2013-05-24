<script>
function act(a){
	document.getElementById('actionValue').value = a;
	document.getElementById('actionForm').submit();
}
</script>
	<form id="actionForm"class="hidden"method="post">
		<input id="actionValue"class="hidden"type="text" name="a" value="0"></input></form>
<div class="container b">
	<a href="/" class="ribbon-btn">Home</a>
	<a href="/" class="ribbon-btn">Forums</a>
	<a href="/" class="ribbon-btn">Members</a>
	<a href="#" onclick="act(3);" class="ribbon-btn fr">Sign in</a>
</div>