<style>
.thread {list-style: none;display:block;width:970px;}
.thread-link {padding:20px 10px;width:558px;display:inline-block;text-decoration: none;}
.thread-link:hover {text-decoration: underline;}
.thread-author{color:blue;padding:20px 20px 20px 60px;width:268px;display:inline-block;background-repeat:no-repeat;}
</style>
<?php // If we are logged in, display thread creation tools
if($logged_in) {?>
	<div class="container o">
		<a href="#" onclick="act(1);" class="ribbon-btn">New Thread</a>
	</div>
<?php } ?>
<div class="container">
	<div class="left-col">
		<ul>
			<?php
			$tsql = "SELECT title, author_id, id FROM qf_threads ORDER BY creation DESC LIMIT 10";
			$threads_array = mysql_query($tsql);

			if ( $threads_array ) {
			  while($row = mysql_fetch_array($threads_array)) { 
				$graph_url = "https://graph.facebook.com/".$row['author_id']."?fields=name,picture";
				$string = get_curl($graph_url);
				$json_a=json_decode($string,true); ?>
				<li class="thread">
					<a href="<?php 
						echo "/".urlencode( $row['title'] ).".".$row['id'];
						?>" class="thread-link"><?php echo $row['title']; ?>
					</a>
					<a href="<?php
						echo $row['author_id'];
						?>" class="thread-author" style="background-image:url('<?php echo "https://graph.facebook.com/".$row['author_id']."/picture?type=square";?>');"><?php
						echo $json_a['name']; ?></a>
				</li>
			<?php }
			} else { ?>
				<span class="info" style="top:40px;"> <?php echo "Submission Unsuccessful"; ?></span>
			    <?php
			}
			?>
		</ul>
	</div>