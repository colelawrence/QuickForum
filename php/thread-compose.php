<form action="/index.php" method="post">
	<div class="container g">
		<input name="a" type="text" class="hidden" value="2"></input>
		<input name="author_id" type="text" class="hidden" value="12345"></input>
		<input name="title" type="text" class="sr nb" required="true" placeholder="Thread Title"></input>
		<input value="Create Thread" type="submit" class="ribbon-text fr sr nb" style="color:black;"></input>
	</div> 
	<div class="container r">
		<textarea name="content" required="true" wrap="logical" class="container nb" style="max-width:990px;min-height:300px;"></textarea>
	</div> 
</form>