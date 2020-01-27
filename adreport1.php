<?php
require('connection.php');
session_start();
$filter = $_GET['q'];
$desig = $_SESSION['desig'];
$sap = $_SESSION["sapid"];
$dep = $_SESSION["dep"];
$mon=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
$category=array("Journal","Conference","Book Chapter","Book","Magazine","News Paper","White Paper","Patent","Transaction");
$indexed=array("SCI","Scopus","eSCI","UGC Approved","Other");
$department=array("Informatics","Systemics","Cybernetics","Virtualization","Computer Application");
$alpharange = range('A','Z');
$count = 0;
?>
<table>
		<tr>
			<th width="20%" rowspan="2">CATEGORY</th>
			<th colspan="5">DEPARTMENTS</th>
			<th width="10%" rowspan="2">Total</th>
		</tr>
		<tr>
			<th width="14%">Informatics</th>
			<th width="14%">Systemics</th>
			<th width="14%">Cybernetics</th>
			<th width="14%">Virtualization</th>
			<th width="14%">Computer Application</th>

		</tr>
		<tr bgcolor="#15b0cf">
			<td>No. of Publication</td>
			<?php
			foreach($department as $dep){
			echo "<td>";
			$query="SELECT * FROM data WHERE department = '".$dep."'".$filter;
			$result=mysqli_query($db,$query);
			$count=mysqli_num_rows($result);
			echo "<a href=\"viewreport.php?query=$query\" target = \"_blank\">$count</a>";
			echo"</td>";
			}

			?>
					<td>
				<?php
					$query="SELECT * FROM data WHERE department = 'Informatics' OR department = 'Systemics' OR department = 'Cybernetics' or department = 'Virtualization' or department = 'Computer Application'".$filter;
					$result=mysqli_query($db,$query);
					$count=mysqli_num_rows($result);
					echo "<a href=\"viewreport.php?query=$query\" target = \"_blank\">$count</a>";
				?>
			</td>
		</tr>
		<?php
		foreach($category as $cat){
			echo "<tr><td>".$cat."</td>";
			foreach($department as $dep){
				echo"<td>";
				$query="SELECT * FROM data WHERE department = '".$dep."' AND category = '".$cat."'".$filter;
				$result=mysqli_query($db,$query);
				$count=mysqli_num_rows($result);
				echo "<a href=\"viewreport.php?query=$query\" target = \"_blank\">$count</a>";
				echo"</td>";
			}
			echo"<td>";
			$query="SELECT * FROM data WHERE category = '".$cat."'".$filter;
			$result=mysqli_query($db,$query);
			$count=mysqli_num_rows($result);
			echo "<a href=\"viewreport.php?query=$query\" target = \"_blank\">$count</a>";
			echo"</td>";
			echo"</tr>";
		}
		?>

		<tr bgcolor="#15b0cf">
		<td colspan="7">Indexing</td>
		</tr>
		<?php
		foreach($indexed as $index){
		echo"<tr><td>".$index."</td>";
		foreach($department as $dep)
		{
			echo "<td>";
			$query="SELECT * FROM data WHERE department = '".$dep."' AND indexed = '".$index."'".$filter;
			$result=mysqli_query($db,$query);
			$count=mysqli_num_rows($result);
			echo "<a href=\"viewreport.php?query=$query\" target = \"_blank\">$count</a>";
			echo "</td>";
		}
			echo"<td>";
			$query="SELECT * FROM data WHERE indexed = '".$index."'".$filter;
			$result=mysqli_query($db,$query);
			$count=mysqli_num_rows($result);
			echo "<a href=\"viewreport.php?query=$query\" target = \"_blank\">$count</a>";
			echo"</td>";
			echo"</tr>";
		}
		?>
	</table>
