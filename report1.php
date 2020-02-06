<?php
require('connection.php');
session_start();
$count = 0;
$desig = $_SESSION['desig'];
$dep = $_SESSION["dep"];
$query = $_GET['q'];
$result = mysqli_query($db,$query);
if(!$result)
{
	die("unable to connect");
}
?>
<table>
		<tr>
			<th>S.NO.</th>
			<th>TITLE</th>
			<th>AUTHORS</th>
			<th>DEPARTMENT</th>
			<th>AFFILIATION</th>
			<th>CATEGORY</th>
			<th>PUBLISHER</th>
			<th>MONTH</th>
			<th>YEAR</th>
			<th>IDENTIFIER</th>
			<th>NUMBER</th>
			<th>DOI</th>
			<th>Indexed in:</th>
			<th>VOLUME</th>
			<th>ISSUE</th>
			<th>PAGE NO.</th>
			<th>URL</th>
			<th>VERIFICATION DOCUMENT</th>
			<th>STATUS</th>
			<th>REMARKS</th>
		</tr>
		<?php

if(mysqli_num_rows($result)>0)
{

	while($row = mysqli_fetch_assoc($result))
	{
		$count++;
		$title = $row['title'];


		echo"<tr>";
			echo"<td >".$count."</td>";
			echo"<td >".$row['title']."</td>";
			echo "<td >".$row['authors']."</td>";
			echo "<td>".$row['department']."</td>";
			echo "<td>".$row['affiliation']."</td>";
			echo "<td>".$row['category']."</td>";
			echo "<td>".$row['publisher']."</td>";
			echo"<td>".$row['month']."</td>";
			echo"<td>".$row['year']."</td>";
			echo"<td>".$row['identifier']."</td>";
			echo"<td>".$row['number']."</td>";
			echo"<td>".$row['doi']."</td>";
			echo"<td>".$row['indexed']."</td>";
			echo"<td>".$row['volume']."</td>";
			echo"<td>".$row['issue']."</td>";
			echo"<td>".$row['page_no']."</td>";
			echo"<td>".$row['url']."</td>";
			echo"<td>".$row['verification_document']."</td>";
			echo"<td>".$row['status']."</td>";
			echo"<td>".$row['remarks']."</td>";
		echo"</tr>";

	}

}
?>
