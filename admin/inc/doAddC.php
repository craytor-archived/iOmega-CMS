<?php
include('inc/functions.php');
if(isset($_POST['submit'])) {
	if(isset($_POST['CatName'])) {
		addCat($_POST['CatName'],$_POST['CatDesc']);
		header("Location: cats.php");
	} else {
		echo "Please set a category name!";
		include('addCat.php');
	}

} else {
	header("Location: addCat.php");
}

?>