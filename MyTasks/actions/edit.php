<?php
include('../config/connect.php');

$id = $_GET['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$due_date = $_POST['due_date'];

mysqli_query($connect,"UPDATE tasks SET title = '$title', description = '$description', due_date='$due_date' WHERE id = $id" );
header('location:../index.php');
?>