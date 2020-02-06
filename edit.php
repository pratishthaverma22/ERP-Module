<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
		<script>
			function load_blank_form(){
					window.parent.$("#frame").html("");
					window.parent.$("#frame").load('form.php');
						}
			function load_form(title){
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
			$query = "SELECT title FROM data WHERE sap_id = $sap_id AND remarks=\"Pending\"";
			$result = mysqli_query($db,$query);
			if(!$result)
			{
				die("Unable to connect");
			}

		?>

		<table width = "100%">
			<tr>
				<th width = "75%">Edit following articles</th>
				<th width = "25%" align = "left"></th>
			</tr>
			<?php
				while($rows = mysqli_fetch_assoc($result))
				{

					 echo "<tr>";
						echo "<td>".$rows["title"]."</td>";
						$title = urlencode($rows["title"]);
					    echo "<td><input type=\"button\" value = \"edit\" onclick=\"load_form('$title')\">";
					echo "</tr>";
				}

			?>
		</table>
		<input type="button" value="Insert New Record" onclick="load_blank_form()" name='insert'>
		<div id="form" style="height:85vh display:hidden">

			<!--<iframe name="editrorm" src="form.php" width="100%" height="100%"></iframe>-->
		</div>
	</body>
</html>
