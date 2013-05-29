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
	<?php
		// Check if we are logged in
		if(!$logged_in) { 
			// If not logged in, show log in button.
			$log_href = "https://www.facebook.com/dialog/oauth?client_id=".$appId."&redirect_uri=".urlencode( $appURL );
			$log_onclick = "";
			$log_text = "Log in";
		} else {
			// If already logged in, show log out button.
			$log_href = "#";
			$log_onclick = "act(3);";
			$log_text = "Log out";
		}
		echo '<a href="'.$log_href.'"onclick="'.$log_onclick.'"class="ribbon-btn fr">'.$log_text.'</a>';
	?>
</div>