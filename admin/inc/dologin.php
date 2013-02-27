<?php
ob_start();
include('includes/functions.php');
session_start();
if(isset($_POST['login'])) {
	if(isset($_POST['username'])) {
		if(isset($_POST['password'])) {
			$username = $_POST['username'];
			$query = mysql_query("SELECT * FROM users WHERE Username = '$username'") or die (mysql_error());
			$user = mysql_fetch_array($query);
			if(md5($_POST['password']) == $user['Password']) {
				echo "Login successful";
				$_SESSION['user'] = $user['Username'];
				header("Location: index.php");
			} else {
				echo "Please check your login details!";
				include('login.php');
			}
		} else {
			echo "Please check your password!";
			include('login.php');
		}
	} else {
		echo "Please check your username!";
		include('login.php');
	}
} else {
	echo "Please check that you filled out the login form!";
	include('login.php');
}
?>