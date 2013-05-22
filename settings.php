<?php
function get_title(){
    return "Forum Settings";
}
?>

<?php include 'php/header.php'; ?>
<!-- start index-->
<div class="page">
	<form name="input" action="settings.php" method="POST">
	Username: <input type="text" name="user">
	<input type="submit" value="Submit">
	</form>
</div>
<!-- end index  -->
<?php include 'php/footer.php'; ?>