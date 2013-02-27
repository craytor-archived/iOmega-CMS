<?php
	session_start();
	if(isset($_SESSION['user'])) {
	include('includes/functions.php');
	deletePage($_GET['id']);
?>
<?php
	} else {
	header("Location: login.php");
}
?>