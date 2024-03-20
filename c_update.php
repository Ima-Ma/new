<?php
    include("config/one.php");
    $sql = "update set name = 'Harry' where id = 2";
    $result = mysqli_query($conn , $sql);

?>