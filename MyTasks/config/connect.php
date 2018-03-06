<?php
$connect = mysqli_connect("localhost","root","","mytasks");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>