<?php
$conn = mysqli_connect('localhost', 'root', '');
if (!$conn){
    die("Database Connection Failed" . mysqli_error($conn));
}
$select_db = mysqli_select_db($conn, 'mbs');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($conn));
}
?>
