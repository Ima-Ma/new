<?php
include("../config/one.php");
$Id = $_GET['id'];
$sql = "select * from `product` where id = $Id";
$result = mysqli_query($conn,$sql);
while($opt = mysqli_fetch_assoc($result)){
    echo $opt['name'];
};

?>