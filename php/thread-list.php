<style>
.thread {list-style: none;display:block;}
.thread-link {padding:20px;display:block;text-decoration: none;}
.thread-link:hover {text-decoration: underline;}
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
			  while($row = mysql_fetch_array($threads_array)) { ?>
			    <li class="thread">
			    	<a href="<?php 
			    		echo "/".urlencode( $row['title'] ).".".$row['id'];
			    		?>" class="thread-link"> <?php echo $row['title']; ?>
					</a>
				</li>
			<?php }
			} else { ?>
			        <span class="info" style="top:40px;"> <?php echo "Submission Unsuccessful"; ?></span>
			    <?php
			}
			?>
		</ul>
	</div>