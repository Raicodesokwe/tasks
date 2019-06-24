<?php


if(isset($_POST["status"])) {
    require 'DB.php';
    extract($_POST);
    //echo "$task_name $date_todo $status";

    //save to db
    $sql="INSERT INTO `tasks`(`task_id`, `task_name`, `date_todo`, `status`) 
              VALUES (null,'$task_name','$date_todo','$status')";
    mysqli_query($conn, $sql);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add task</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">

            <div class="card">
                <div class="card-header">
                    Add A New task
                </div>
                <div class="card-body">

                    <form action="status.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Task name</label>
                            <input type="text" class="form-control" name="task_name" id="task_name">
                        </div>
                        <div class="form-group">
                            <label for="title">date</label>
                            <input type="date" class="form-control" name="date_todo"id="date_todo">
                        </div>
                        <div class="form-group">
                            <label for="title">status</label>
                            <select name="status" class="form-control" id="status">
                                <option value="complete">complete</option>
                                <option value="incomplete">incomplete</option>
                            </select>
                        </div>

                        <button class="btn btn-info btn-block">Save task</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>