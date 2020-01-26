<?php
require('connection.php');
$query= $_GET['query'];
$result = mysqli_query($db,$query);
if($result)
echo "Record Inserted successfully";
else
echo var_dump($result);
?>
