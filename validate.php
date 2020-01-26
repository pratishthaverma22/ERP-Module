<?php
require('connection.php');
$title= $_GET['title'];
$query="SELECT * FROM data WHERE title='".$title."'";
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result) > 0)
{echo "n";}
else
{echo "y";}
?>
