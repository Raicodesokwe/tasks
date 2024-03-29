<?php
require 'security.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All tasks</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>
<?php
require 'navbar.php';
?>
<div class="container">
    <table class="table" id="tasks">
        <thead>
        <tr>
            <th>Task_name</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
        </thead>

        <tbody>
        <?php
        require 'DB.php';
        $sql=" SELECT  `task_name`, `date_todo`, `status` FROM `tasks` WHERE 1";
        $results=mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_assoc($results))
        {
            extract($row); // $date_todo,$status
            echo "<tr>
            
            <td>$task_name</td>
            <td>$date_todo</td>
            <td>$status</td>
            
        </tr>";
        }
        ?>

        </tbody>
    </table>

</div>
<script>
    $(document).ready(function() {
        $('#tasks').DataTable();
    } );
</script>
</body>
</html>