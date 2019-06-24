<?php
require 'security.php';
if(isset($_POST["password"]))
{
    require 'DB.php';
    extract($_POST);
    $sql2="INSERT INTO `users`(`user_id`, `name`, `email`, `password`) 
            VALUES (null,'$name','$email','$password')";
    mysqli_query($conn,$sql2);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register user</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
//require 'navbar.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">

            <div class="card">
                <div class="card-header">
                    Register user
                </div>
                <div class="card-body">

                    <form action="register.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Email</label>
                            <input type="text" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <button class="btn btn-info btn-block">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>