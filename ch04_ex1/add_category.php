<?php

$name = $_POST['name'];

if (empty($name) || is_numeric($name)) {

	$error = "Invalid category name. Check field and try again.";
	include('error.php');

}
else {

	require_once ('database.php');
	$insterCategory = "INSERT INTO categories (categoryName) VALUES ('$name')";

	$db->exec($insterCategory);

	include('category_list.php');
}

?>