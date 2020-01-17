<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<h3 style = "color:blue">Status of Publication</h3>
		<?php
			require('connection.php');
			session_start();
			$count=0;
			$sap_id = $_SESSION['sapid'];
			$title = $_GET['title'];
			$query = "SELECT * FROM data WHERE title = \"$title\"";
			$result = mysqli_query($db,$query);
			if(!$result)
			{
				die("Unable to connect");
			}
			$attribute = array("Title","Authors","Department","Affiliation","Category","Publisher","Month","Year","Identifier","Number","DOI","Indexed In","Volume","Issue","Page No.","URL","Verification Document","Status","Remarks");
			$row = mysqli_fetch_row($result);

		?>
		<table style = "border:none">
			<tr>
				<th width="8%" align = "center">S.NO.</th>
				<th width="20%" align = "left">ATTRIBUTE</th>
				<th width="72%" align = "left">VALUE</th>
				<th></th>
			</tr>
			<?php
				$count = 1;
				foreach($attribute as $att)
				{
					echo "<tr>";
						echo "<td align = \"center\">".$count."</td>";
						echo "<td>".$att."</td>";
						echo "<td>".$row[$count]."</td>";
					echo "</tr>";
					$count++;
				}
			?>
		</table>
		<?php
			if($row[18] == "pending")
				echo "<h4 style=\"color:red\"> **update missing information or upload required document</h4>";
		?>
	</body>
</html>
