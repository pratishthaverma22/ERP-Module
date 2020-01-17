<!DOCTYPE html>
<html>

    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Research Form</title>
		<link rel="stylesheet" href="./css/form.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
		<?php
    require('connection.php');
      session_start();
			$mon=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
			$sap_id = $_SESSION['sapid'];
			$title = $_GET['title'];
			$query = "SELECT * FROM data WHERE sap_id = $sap_id AND title = '$title'";
			$result = mysqli_query($db,$query);
			while($row = mysqli_fetch_assoc($result))
			{
				$authors = $row['authors'];
				$department = $row['department'];
				$affiliation= $row['affiliation'];
				$category = $row['category'];
				$publisher = $row['publisher'];
				$month = $row['month'];
				$year = $row['year'];
				$identifier = $row['identifier'];
				$number = $row['number'];
				$doi = $row['doi'];
				$indexed = $row['indexed'];
				$volume = $row['volume'];
				$issue = $row['issue'];
				$pageno = $row['page_no'];
				$url = $row['url'];
				$verification = $row['verification_document'];
				$remarks = $row['remarks'];
				$status = $row['status'];
				#var_dump($result);
				$dep = array("Computer Application","Cybernetics","Informatics","Systemics","Virtualization");
				$ide = array("ISSN","ISBN","ISSP");
				$ind = array("SCI","Scopus","eSCI","UGC Approved","Other","GOI Patent Office","International Patent Office");
				$cat = array("Journal","Conference","Book Chapter","Book","Magazine","News Paper","White Paper","Patent","Transaction");
				$ver = array("Certificate","");
				$sta = array("Submitted","Accepted","In-print","Published");
			}
		?>
		<form action="" method="POST">
			<fieldset style="background-color:#AFEEEE">
			<legend class= "bfont">General Information</legend>
				<div class="centerdiv" align="center">Title:<br><textarea rows="4" cols="100" name="textspace"><?php echo $title;?></textarea></div>
				<div class="leftdiv">Authors:<input type="text" name = "authors" value = "<?php echo $authors;?>"></div>

				<div class="middlediv">Department:
					<select name="department" id="department" >
					<option value = "<?php echo $department;?>" select = "selected"><?php echo $department;?></option>
					<?php
					foreach($dep as $deps)
					{
						if($deps == $department)
							continue;
						echo "<option value=\"$deps\">".$deps."</option>";

					}
					?>
					</select>
				</div>

				<div class="rightdiv">Affiliation: <input type="text" name="affiliation" value = "<?php echo $affiliation;?>"></div>
			</fieldset>
			<fieldset style="background-color:#AFEEEE"">
			<legend class= "bfont">Publication Information</legend>
				<div class="middlediv">Publisher:&ensp; <input type="text" name="publisher" value = "<?php echo $publisher;?>"></div>
				<div class="middlediv">Identifier:
					<select name="identifier" id="identifier">
						<option value = "<?php echo $identifier;?>" select = "selected"><?php echo $identifier;?></option>
						<?php
						foreach($ide as $iden)
						{
							if($iden == $identifier)
								continue;
							echo "<option value =\"$iden\">".$iden."</option>";
						}
						?>

					</select>
				</div>
				<div class="rightdiv">Number:&nbsp; <input type="text" name="number" value = <?php echo $number;?>></div>
				<div class="middlediv">Indexed in:
					<select name="indexed" id="indexed">
						<option value = "<?php echo $indexed;?>" select = "selected"><?php echo $indexed;?></option>
						<?php
						foreach($ind as $index)
						{
							if($index == $indexed)
								continue;
							echo "<option value =\"$index\">".$index."</option>";
						}
						?>
					</select>
				</div>
				<div class="rightdiv">Volume: &ensp;<input type="text" name="value" value = "<?php echo $volume;?>"></div>
				<div class="leftdiv">Issue: &ensp;&ensp;&ensp;<input type="text" value = "<?php echo $issue;?>" name="issue"></div>
				<div class="middlediv">Page No.: &ensp;<input type="text" name="pageno" value = "<?php echo $pageno;?>"></div>
				<div class="leftdiv">DOI:&ensp;&ensp;&ensp;&nbsp; <input type="text" name="doi" value = "<?php echo $doi;?>"></div>
				<div class="rightdiv">URL:&ensp;&ensp;&ensp; <input type="text" name="url" value = "<?php echo $url;?>"></div>


				<div class="rightdiv">Month:&ensp;&ensp;&ensp;
					<select name="month" id="month">
						<option value = "<?php echo $month;?>" select="selected"><?php echo $month;?></option>
						<?php
							foreach($mon as $months)
							{
								if($months == $month)
									continue;
								echo "<option value=\"$months\">".$months."</option>";
							}
						?>
					</select>
				</div>
				<div class="leftdiv">Year: &ensp;&ensp;&ensp;&nbsp;<input type="text" name="year" value = "<?php echo $year;?>"></div>
				<div class="leftdiv">Category:
					<select name="category" id="category">
						<option value = "<?php echo $category;?>" select = "selected"><?php echo $category;?></option>
						<?php
						foreach($cat as $cate)
						{
							if($cate == $category)
								continue;
							echo "<option value=\"$cate\">".$cate."</option>";
						}
						?>
					</select>
				</div>
			</fieldset>
			<fieldset style="background-color:#AFEEEE"">
				<legend class= "bfont">Submission Information</legend>
				<div class="leftdiv">Verification Document:
					<select name="verification" id="verification">
						<option value = "<?php echo $verification;?>" select = "selected"><?php echo $verification;?></option>
						<?php
						foreach($ver as $vers)
						{
							if($vers == $verification)
								continue;
							echo "<option value = \"$vers\">".$vers."</option>";
						}
						?>
						</select>
				</div>
				<div class="middlediv">Paper Status:
					<select name="remarks" id="status">
						<option value = "<?php echo $remarks;?>" select = "selected"><?php echo $remarks;?></option>
						<?php
						foreach($sta as $rem)
						{
							if($rem == $remarks)
								continue;
							echo "<option value = \"$rem\">".$rem."</option>";
						}
						?>
					</select>
				</div>
				<div class="rightdiv"><input type="submit" value="Submit" name="submit">
				<input type = "button" onclick = "location.href='edit.php'" value = "Back">
				</div>
			</fieldset>
		</form>
		<?php
		if(isset($_POST["submit"]))
		{
			$titles = $_POST['textspace'];
			$authors = $_POST['authors'];
			$department = $_POST['department'];
			$affiliation= $_POST['affiliation'];
			$category = $_POST['category'];
			$publisher = $_POST['publisher'];
			$month = $_POST['month'];
			$year = $_POST['year'];
			$identifier = $_POST['identifier'];
			$number = $_POST['number'];
			$doi = $_POST['doi'];
			$indexed = $_POST['indexed'];
			$volume = $_POST['value'];
			$issue = $_POST['issue'];
			$pageno = $_POST['pageno'];
			$url = $_POST['url'];
			$verification = $_POST['verification'];
			$remarks = $_POST['remarks'];
			$query1 = "UPDATE data SET title='$titles', authors='$authors', department='$department', affiliation='$affiliation', category='$category', publisher='$publisher', month='$month', year='$year', identifier='$identifier', number='$number', doi='$doi', indexed='$indexed', volume='$volume', issue='$issue', page_no='$pageno', url='$url', verification_document='$verification', remarks='$remarks' WHERE title='$title'";
			$result = mysqli_query($db,$query1);
			var_dump($result);
			if(!$result)
			{
				die("You cannot leave fields empty");
			}
			else
			{
				echo "Record updated successfully";
			}
		}
		?>

	</body>
</html>
