<?php
include('includes/functions.php');
if(isset($_POST['submit'])) {
	if(isset($_POST['PageName'])) {
		if(isset($_POST['PageContent'])) {
			editPage($_POST['PageName'],$_POST['PageAuth'],$_POST['PageContent'],$_POST['PageCats'],$_POST['id']);
			header("Location: pages.php");
		} else {
			echo "Please enter page content!";
		}
	} else {
		echo "Please set a page name!";
		include('addCat.php');
	}

} else {
	header("Location: addCat.php");
}

?>