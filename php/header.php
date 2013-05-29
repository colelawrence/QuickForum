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
	<a href="https://www.facebook.com/dialog/oauth?client_id=<?php echo $appId;?>&redirect_uri=<?php echo urlencode( $appURL );?>" class="ribbon-btn fr">Log in</a>
	<a href="#" onclick="" class="ribbon-btn fr">Log out</a>
</div>