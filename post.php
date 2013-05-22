<?php
function get_title(){
    return "Quick Forums";
}
?>

<?php include 'php/header.php'; ?>
<!-- start index-->
<div class="page">
	<div class="left">
		<h2>Post: </h2>
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
	</div>
	<?php include 'php/page_footer.php'; ?>
</div>
<!-- end index  -->
<?php include 'php/footer.php'; ?>