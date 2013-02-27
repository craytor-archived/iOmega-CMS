<?php
include('inc/functions.php');
if(isset($_POST['submit'])) {
	if(isset($_POST['PageName'])) {
		if(isset($_POST['PageContent'])) {
			editPage($_POST['PageName'],$_POST['PageAuth'],$_POST['PageContent'],$_POST['PageCats'],$_POST['id']);
			header("Location: inc/pages.php");
		} else {
			echo "Please enter page content!";
		}
	} else {
		echo "Please set a page name!";
		include('inc/addCat.php');
	}

} else {
	header("Location: inc/addCat.php");
}

?>