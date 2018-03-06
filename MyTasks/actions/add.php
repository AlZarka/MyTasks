<?php
include('../config/connect.php');

$title = $connect->real_escape_string($_POST['title']);
$description = $connect->real_escape_string($_POST['description']);
$due_date = $connect->real_escape_string($_POST['due_date']);

mysqli_query($connect,"INSERT INTO tasks (title, description, due_date) VALUES ('$title', '$description', '$due_date')");
header('location:../index.php');
?>