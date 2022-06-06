<?php
session_start();
include '../connect.php';
$mail = $_SESSION['mail'];

$id = $_POST['id'];

$query = mysqli_query($conn, "DELETE FROM `recipes` WHERE `id`='$id'");

$query = mysqli_query($conn, "SELECT * FROM `users` WHERE `mail` = '$mail'");
$user = mysqli_fetch_assoc($query);
$myRecipes = $user['myRecipes'];

$myRecipes = str_replace(",".$id."," , '' , $myRecipes);
mysqli_query($conn, "UPDATE `users` SET `myRecipes` = '$myRecipes' WHERE `mail` = '$mail'");
 ?>
