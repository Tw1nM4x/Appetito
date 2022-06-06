<?php
include 'connect.php';

$massage = $_POST['massage'];
$mail = $_POST['mail'];
$id = $_POST['id'];

$query = mysqli_query($conn, "SELECT * FROM `recipes` WHERE `id` = '$id'");
$recipe = mysqli_fetch_assoc($query);
$reviews = $recipe['reviews'];

$reviews = str_replace($mail.'$'.$massage.'$' , '' , $reviews);

mysqli_query($conn, "UPDATE `recipes` SET `reviews` = '$reviews' WHERE `id` = '$id'");
 ?>
