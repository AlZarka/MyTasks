<?php
include('config/connect.php');
$query=mysqli_query($connect,"SELECT * FROM tasks ORDER BY due_date ASC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>MyTask project only with PHP</title>

    <link href="style/style.css" rel="stylesheet">

</head>
<body>

    <div class="container">
        <a href="add_task.php"> <button type="button" class = "btn_add" >New Task</button> </a>

        <!-- FILTER -->
        <form name="DateFilter" class="filter" method="POST">
            <div class="filter_from">
                From:
                <input type="date" name="dateFrom" value="<?php echo isset($_POST['dateFrom']) ? $_POST['dateFrom'] : '' ?>" />
            </div>
            <div class="filter_to">
                To:
                <input type="date" name="dateTo" value="<?php echo isset($_POST['dateTo']) ? $_POST['dateTo'] : '' ?>" />
            </div>
            <div class="filter_btn">
                <input type="submit" name="submit" value="Filter"/>
                <br>
            </div>
        </form>
        <br><br>

        <!--PATIKRINAM KIEK ŠIANDIEN UŽDUOČIŲ YRA -->
        <?php
        $row=mysqli_fetch_array($query);
        $todayDate = date('Y-m-d', time());
        $count = 0;
        if  (date('Y-m-d', strtotime($row['due_date'])) === $todayDate) {
            $count++;
            if ($count === 1) {
                echo "Today you have " . $count . " task to do";
            } else {
                echo "Today you have " . $count . " tasks to do";
            }
        }
        ?>

    </div>

    <table>
        <tr>
            <th>Title</th>
            <th>Due Date</th>
            <th>Edit | View</th>
        </tr>
        
        <?php
        if (isset($_POST['dateFrom'])) {

        //GETTING VALUE FROM FILTER
        $dateFrom = date('Y-m-d', strtotime($_POST['dateFrom']));
        $dateTo = date('Y-m-d', strtotime($_POST['dateTo']));

        while($row=mysqli_fetch_array($query)){

        //FILTERING USING DATES
            if (date('Y-m-d', strtotime($row['due_date'])) && date('Y-m-d', strtotime($row['due_date'])) < $dateTo){
        ?>

        <tr>
            <td><?php echo  $row['title'] ?></td>
            <td><?php echo  $row['due_date'] ?></td>
            <td class="td_actions"><a href="edit_task.php?id=<?php echo $row['id'];?>"> <button type="button">Edit</button> </a> | <a href="view_task.php?id=<?php echo $row['id'];?>"> <button type="button">View</button> </a></td>
        </tr>

        <?php }}}else{ while($row=mysqli_fetch_array($query)){ ?>

        <tr>
            <td><?php echo  $row['title'] ?></td>
            <td><?php echo  $row['due_date'] ?></td>
            <td class="td_actions"><a href="edit_task.php?id=<?php echo $row['id'];?>"> <button type="button">Edit</button> </a> | <a href="view_task.php?id=<?php echo $row['id'];?>"> <button type="button">View</button> </a></td>
        </tr>

        <?php }} ?>

    </table>
</body>
</html>