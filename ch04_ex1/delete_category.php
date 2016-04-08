<?php

	$category = $_POST['categoryID'];
	$categoryName = $_POST['categoryName'];


	require_once('database.php');
	$delete = "DELETE FROM categories WHERE categoryID = '$category'";
	$db->exec($delete);

	include('category_list.php');
?>
