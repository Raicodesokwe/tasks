<?php
require 'security.php';
if (isset($_GET["id"]))
{
    $id=$_GET["id"];
    require 'DB.php';
    $sql="select*from tasks where task_id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    extract($row);
}
if (isset($_POST["status"]))
{
    $status=$_REQUEST["status"];
    $date_todo=$_REQUEST["date_todo"];
    $id=$_REQUEST["id"];
    require 'DB.php';
    $sql="update tasks set status='$status',date_todo='$date_todo'
          where task_id='$id'";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
    header("location:show.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update task</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
require 'navbar.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">

            <div class="card">
                <div class="card-header">
                    updating Task<?php echo $task_name;?>
                </div>
                <div class="card-body">


                    <form action="update.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$id?>">

                        <div class="form-group">
                            <label for="title">Date</label>
                            <input value="<?=$date_todo?>" type="date" class="form-control" name="date_todo" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Status</label>

                            <select name="status"  class="form-control"<input value="<?=$status?>" type="text" class="form-control" name="status" required>>
                                <option value="complete">complete</option>
                                <option value="incomplete">incomplete</option>
                            </select>
                        </div>
                        <button class="btn btn-info btn-block">Update task</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>