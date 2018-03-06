<?php
$id = $_GET['id'];
include('config/connect.php');
$query = mysqli_query($connect,"SELECT * FROM tasks WHERE id=$id");
$row=mysqli_fetch_array($query)
?>

<!DOCTYPE html>
<html>
<head>
    <title>MyTask project edit task page</title>

    <link href="style/style.css" rel="stylesheet">

</head>
<body>

    <div class="container_add">
        <a href="index.php"> <button type="button">Back</button> </a>
        <br>
        <form method="POST" action="actions/edit.php?id=<?php echo $row['id']; ?>">
            <div class="column">
                <div class="row">
                    <label>Task name:</label>
                    <br>
                    <input type="text" class="mytext" name="title" value="<?php echo  $row['title'] ?>">
                </div>
                <br>
                <div class="row">
                    <label>Due Date:</label>
                    <br>
                    <input type="date" class="mytext" name="due_date" value="<?php echo  $row['due_date'] ?>">
                </div>
            </div>
            <div class="column">
                <div class="row">
                    <label>Description:</label>
                    <br>
                    <textarea rows="4" cols="40" type="text" name="description"> <?php echo $row['description'] ?> </textarea>
                </div>
                <br>
            </div>
            <div class="column">
                <button type="submit">Save</button>
            </div>
        </form>
    </div>

</body>
</html>