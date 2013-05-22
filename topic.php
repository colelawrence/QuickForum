<?php
function get_title(){
    return "Quick Forums";
}
?>

<?php include 'php/header.php'; ?>
<!-- start index-->
<div class="page">
	<div class="left">
		<h2>Topic: </h2>
		<table>
			<tbody>
				<tr class="th">
    				<th width="80%" align="left">Topic</th>
    				<th width="20%" align="left">Threads</th>
  				</tr>
				<tr>
				    <td><a href="?fid=1"><span>Community Service Projects</span></a></td>
				    <td><span>233</span></td>
			  	</tr>
				<tr>
				    <td><a href="?fid=1"><span>NHS Events</span></a></td>
				    <td><span>12</span></td>
			  	</tr>
  			</tbody>
		</table>
	</div>
	<div class="right">
		<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/ZombieRomeo" data-widget-id="337061254575300610">Tweets by @ZombieRomeo</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
	<?php include 'php/page_footer.php'; ?>
</div>
<!-- end index  -->
<?php include 'php/footer.php'; ?>