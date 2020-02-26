<?php
require('connection.php');
$title= $_GET['title'];
$query="SELECT title FROM journal UNION SELECT title FROM conference WHERE title='".$title."'";
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result) > 0)
{echo "n";}
else
{echo "y";}
?>
