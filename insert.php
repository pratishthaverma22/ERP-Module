<?php
require('connection.php');
$query= $_GET['query'];
$result = mysqli_query($db,$query);
if($result)
echo "Successful";
else
echo "Failure";
?>
