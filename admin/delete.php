<?php
	session_start();
	if(isset($_SESSION['user'])) {
	include('includes/functions.php');
	deletePost($_GET['id']);
?>
<?php
	} else {
	header("Location: login.php");
}
?>