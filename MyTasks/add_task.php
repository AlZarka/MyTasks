<!DOCTYPE html>
<html>
<head>
    <title>MyTask project add task page</title>

    <link href="style/style.css" rel="stylesheet">

</head>
<body>

    <div class="container_add">
        <a href="index.php"> <button type="button">Back</button> </a>
        <br>
        <form method="POST" action="actions/add.php">
            <div class="column">
                <div class="row">
                    <label>Task name:</label>
                    <br>
                    <input type="text" class="mytext" name="title">
                </div>
                <br>
                <div class="row">
                    <label>Due Date:</label>
                    <br>
                    <input type="date" class="input" name="due_date">
                </div>
            </div>
            <div class="column">
                <div class="row">
                    <label>Description:</label>
                    <br>
                    <textarea rows="4" cols="40" type="text" name="description"></textarea>
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