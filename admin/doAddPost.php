<? ob_start(); ?>
<?php
include('includes/functions.php');
if(isset($_POST['submit'])) {
	if(isset($_POST['PostName'])) {
		if(isset($_POST['PostContent'])) {
			addPost($_POST['PostName'],$_POST['PostAuth'],$_POST['PostContent'],$_POST['PostCats']);
			header("Location: posts.php");
		} else {
			echo "Please enter post content!";
		}
	} else {
		echo "Please set a post name!";
		include('addCat.php');
	}

} else {
	header("Location: addCat.php");
}

?>