<?php
require('connection.php');
session_start();
$count = 0;
$query = $_GET['q'];
if(mysqli_query($db,$query))
{
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($db);
}
mysqli_close($db);
?>
