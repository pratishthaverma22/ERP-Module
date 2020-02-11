<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
		<script>
			function load_blank_form(page){
					window.parent.$("#frame").html("");
					window.parent.$("#frame").load(page);
						}
			function load_journal_form(title){
				var page="./form/journal_edit.php?title="+title;
				window.parent.$("#frame").load(page);
			}
function load_conference_form(title){
	var page="form1.php?title="+title;
	window.parent.$("#frame").load(page);
}
		</script>
	</head>
	<body>
		<?php
			require('connection.php');
			session_start();
			$sap_id = $_SESSION['sapid'];
			$query = "SELECT title FROM journal WHERE sap_id = $sap_id AND remarks=\"Pending\"";
			$result = mysqli_query($db,$query);
			if(!$result)
			{
				die("Unable to connect");
			}

		?>

		<table width = "100%">
			<tr>
				<th width = "75%">Journal Papers</th>
				<th width = "25%" align = "left"></th>
			</tr>
			<?php
				while($rows = mysqli_fetch_assoc($result))
				{

					 echo "<tr>";
						echo "<td>".$rows["title"]."</td>";
						$title = urlencode($rows["title"]);
					    echo "<td><input size=\"16\" type=\"button\" value = \"edit\" onclick=\"load_journal_form('$title')\">";
					echo "</tr>";
				}

				$query1 = "SELECT title FROM journal WHERE sap_id = $sap_id AND remarks=\"Pending\"";
				$result1 = mysqli_query($db,$query1);
				if(!$result1)
				{
					die("Unable to connect");
				}

			?>
		</table>
		<table width = "100%">
			<tr>
				<th width = "75%">Conference Papers</th>
				<th width = "25%" align = "left"></th>
			</tr>
			<?php
				while($rows = mysqli_fetch_assoc($result1))
				{

					 echo "<tr>";
						echo "<td>".$rows["title"]."</td>";
						$title = urlencode($rows["title"]);
					    echo "<td><input size=\"16\" type=\"button\" value = \"edit\" onclick=\"load_conference_form('$title')\">";
					echo "</tr>";
				}

			?>
		</table>
		<input size="16" type="button" value="Insert New Record" onclick="load_blank_form('form.php')" name='insert'>
		<input size="16" type="button" value="Insert Journal Record" onclick="load_blank_form('./form/journal.php')" name="journal">
		<input size="16" type="button" value="Insert Conference Record" onclick="load_blank_form('./form/conference.php')" name="conference">
		<div id="form" style="height:85vh display:hidden">

			<!--<iframe name="editrorm" src="form.php" width="100%" height="100%"></iframe>-->
		</div>
	</body>
</html>
