<?php 
if(!$logged_in || !isset($facebook)){
    // if we aren't logged in or facebook was not initiallized
    // return to index without url $_GET or $_POST parameters
    header('Location: index.php');
} else { ?>
<form action="/index.php" method="post">
	<div class="container g">
		<input name="a" type="text" class="hidden" value="2"></input>
		<input name="author_id" type="text" class="hidden" value="<?php echo $facebook->getUser();?>"></input>
		<input name="title" type="text" class="sr nb" required="true" placeholder="Thread Title"></input>
		<input value="Create Thread" type="submit" class="ribbon-text fr sr nb" style="color:black;"></input>
	</div> 
	<div class="container r">
		<textarea name="content" required="true" wrap="logical" class="container nb" style="max-width:990px;min-height:300px;"></textarea>
	</div>
</form>
<?php } ?>