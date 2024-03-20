<?php
    include("config/one.php");

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "insert into employee (name , email , password) values ('$username' , '$email' , '$password')";
        $result = mysqli_query($conn , $sql);

        if($result == true){
            echo "<br> Your Record has been inserted";
        }
        else{
            echo "<br> No Record has been inserted";
        }
    }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="" method="POST">
                    <div class="form-grp">
                        <label for="">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-grp">
                        <label for="">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-grp">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <input type="submit" value="Submit" name="submit" class="btn btn-dark mt-3">
                </form>
            </div>
            <div class="col-lg-3">
                <?php

                echo "<pre>";
                print_r($_POST);
                echo "</pre>";

                ?>
            </div>
        </div>
    </div>
</body>
</html>