<?php
include('../config/connect.php');
$id=$_GET['id'];
mysqli_query($connect,"DELETE FROM tasks WHERE id='$id'");
header('location:../index.php');

?>