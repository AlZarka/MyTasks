<?php
$id = $_GET['id'];
include('config/connect.php');
$query = mysqli_query($connect,"SELECT * FROM tasks WHERE id=$id");
$row=mysqli_fetch_array($query)
?>

<!DOCTYPE html>
<html>
<head>
    <title>MyTask project view task page</title>

    <link href="style/style.css" rel="stylesheet">

</head>
<body>
<div class="container_v">
    <a href="index.php"> <button type="button">Back</button> </a>
    <br>
    <form method="POST" action="actions/delete.php?id=<?php echo $row['id']; ?>">
        <h1><td><?php echo  $row['title'] ?></td></h1>
        <p><td><?php echo  $row['due_date'] ?></td></p>
        <p><td><?php echo  $row['description'] ?></td></p>
        <br>
        <button type="submit">Delete</button> </a></td>
    </form>
</div>
</body>
</html>