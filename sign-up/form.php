<?php
    include("../config/one.php");
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
      $sql = "select * from users where name = '$username'and email = '$email' and password = '$password'";
      $result = mysqli_query($conn , $sql);

      echo "<pre>";
      print_r($result);
      echo "</pre>";
      if($result->num_rows>0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<br> Login Successsful!";
            echo "<script>
                setTimeout(function(){window.location.href = 'login.php'},4000)</script>";
        }
      }
      else{
        echo "<br> Login Failed!";

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
</body>
</html>