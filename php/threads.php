<style>
.thread {list-style: none;display:block;}
.thread-link {padding:20px;display:block;text-decoration: none;}
.thread-link:hover {text-decoration: underline;}
</style>
<?php if( $a == 1 ) {//COMPOSE THREAD?>
		<form action="/index.php" method="post">
			<div class="container g">
			<input type="text" class="sr nb"  name="title" placeholder="Thread Title"></input>
			<input type="text" class="hidden" name="a" value="2"></input>
			<input type="submit" class="ribbon-text fr sr nb" style="color:black;" value="Create Thread"></input>
			</div> 
			<div class="container r">
			<textarea name="content" wrap="logical" class="container nb" style="max-width:990px;min-height:300px;"></textarea>
			</div> 
		</form>
<?php } else { ?>
			<div class="container o">
			<a href="#" onclick="act(1);" class="ribbon-btn">New Thread</a>
			</div>
<div class="container">
	<div class="left-col">
		<ul>
			<?php if($a == 2) { //POST THREAD ?>
				<li class="thread"><a href="#" class="thread-link"><?php echo $_POST["title"];?></a></li>
			<?php } ?>
			<li class="thread"><a href="#" class="thread-link">Thread 1</a></li>
			<li class="thread"><a href="#" class="thread-link">Thread 2</a></li>
			<li class="thread"><a href="#" class="thread-link">Thread 3</a></li>
		</ul>
	</div>
	<div class="right-col">
		Welcome to the QForums!
	</div>
</div>
<?php } ?>