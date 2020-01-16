<?php
session_start();
$count = 0;
$user = "root";
$pass = "";
$dbs = "phpmyadmin";
$db = mysqli_connect("localhost",$user,$pass,$dbs);
$query = $_GET['q'];
if(mysqli_query($db,$query))
{
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($db);
}
mysqli_close($db);
?>