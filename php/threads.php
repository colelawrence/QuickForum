<?php 

$tsql = "SELECT title, author_id FROM qf_threads ORDER BY creation DESC LIMIT 10";
$threads_array = mysql_query($tsql);

?>

<style>
.thread {list-style: none;display:block;}
.thread-link {padding:20px;display:block;text-decoration: none;}
.thread-link:hover {text-decoration: underline;}
</style>
<?php if( $a == 1 ) {//COMPOSE THREAD?>
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
<?php } else { ?>
			<div class="container o">
			<a href="#" onclick="act(1);" class="ribbon-btn">New Thread</a>
			</div>
<div class="container">
	<div class="left-col">
		<ul>
			<?php if($a == 2) { //POST THREAD ?>
				<li class="thread"><a href="#" class="thread-link"><?php echo $_POST["title"];?></a></li>
			<?php }
			if ( $threads_array ) {
			  while($row = mysql_fetch_array($threads_array)) { ?>
			    <li class="thread">
			    	<a href='<?php 
			    		echo "?thread=".$row["id"]."&t=".urlencode( $row["title"] );
			    		?>' class="thread-link">$row["title"]
					</a>
				</li>
			<?php }
			} else { ?>
			        <span class="info" style="top:40px;"> <?php echo "Submission Unsuccessful"; ?></span>
			    <?php
			}
			?>
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