<? ob_start(); ?>
<?php
include('includes/functions.php');
if(isset($_POST['submit'])) {
	if(isset($_POST['PageName'])) {
		if(isset($_POST['PageContent'])) {
			addPage($_POST['PageName'],$_POST['PageAuth'],$_POST['PageContent'],$_POST['PageCats']);
			header("Location: pages.php");
		} else {
			echo "Please enter page content!";
		}
	} else {
		echo "Please set a page name!";
		include('addCat.php');
	}

} else {
	header("Location: pages.php");
}

?>