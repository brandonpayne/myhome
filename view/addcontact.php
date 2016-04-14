<?php
// Get the product data
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

// Validate inputs
if ( empty($comment) ) {
    $error = "Please Fill out the comment section";
    include('error.php');
} else {
    // If valid, add the product to the database
    require_once('../model/database.php');
    $query = "INSERT INTO sandbpe8_mail (name, email, comment) VALUES ('$name', '$email', '$comment')";
    $db->exec($query);

    // Display the Product List page
    include('contact.php');
}
?>
