<?php
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $connect = mysqli_connect("localhost","root","","news");
    mysqli_set_charset($connect , "utf8");
    $query="SELECT * FROM `table1` WHERE `id`='$id'";
    $result = mysqli_query($connect , $query);
    $table1 = mysqli_fetch_assoc($result);
    print_r($table1);
}