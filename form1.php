<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Research Form</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="./css/form.css">
  <script>
  function back(){
    window.parent.$("#frame").html("");
    window.parent.$("#frame").load('edit.php');
  }
  </script>
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
    $status = $row['status'];
    $remarks = $row['remarks'];
		$dep = array("Computer Application","Cybernetics","Informatics","Systemics","Virtualization");
		$ide = array("ISSN","ISBN","ISSP");
		$ind = array("SCI","Scopus","eSCI","UGC Approved","Other","GOI Patent Office","International Patent Office");
		$cat = array("Journal","Conference","Book Chapter","Book","Magazine","News Paper","White Paper","Patent","Transaction");
		$ver = array("Certificate","");
		$sta = array("Submitted","Accepted","In-print","Published");
	}
	?>
	<form method="POST">
    <fieldset style="background-color:#AFEEEE">
      <legend class= "bfont">General Information</legend>
      <div class="centerdiv">
        &ensp;Title:&ensp;&ensp;&ensp;
        <textarea required rows="2" cols="100" name="title" id="title" onchange="validate();"><?php echo $title;?></textarea>
      </div>
			<div class="aligndiv author">
        List of Authors:
        <span class="tooltiptext">List of Authors should be typed as they appear in the paper</span>
        <input size="16" type="text" name = "authors" value = "<?php echo $authors;?>" id="authors">
      </div>
			<div class="aligndiv">
        Department:
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
			<div class="aligndiv">
        Affiliation:
        <input size="16" type="text" id="affiliation" name="affiliation" value = "<?php echo $affiliation;?>">
      </div>
    </fieldset>
    <fieldset style="background-color:#AFEEEE">
			<legend class= "bfont">Publication Information</legend>
			<div class="aligndiv">Publisher:&ensp;
        <input size="16" type="text" id= "publisher" name="publisher" value = "<?php echo $publisher;?>">
      </div>
			<div class="aligndiv">
        Identifier:
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
			<div class="aligndiv">
        Number:&nbsp;
        <input size="16" type="text" name="number" id="number" value = <?php echo $number;?>>
      </div>
			<div class="aligndiv">
        Indexed in:
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
			<div class="aligndiv">
        Volume: &ensp;
        <input size="16" type="text" name="value" id="volume" value = "<?php echo $volume;?>">
      </div>
			<div class="aligndiv">
        Issue: &ensp;&ensp;&ensp;
        <input size="16" type="text" id="issue" value = "<?php echo $issue;?>" name="issue">
      </div>
			<div class="aligndiv">
        Page No.: &ensp;
        <input size="16" type="text" id="pageno" name="pageno" value = "<?php echo $pageno;?>">
      </div>
			<div class="aligndiv">
        DOI:&ensp;&ensp;&ensp;&nbsp;
        <input size="16" type="text" id="doi" name="doi" value = "<?php echo $doi;?>">
      </div>
			<div class="aligndiv">
        URL:&ensp;&ensp;&ensp;
        <input size="16" type="text" id="url" name="url" value = "<?php echo $url;?>">
      </div>
			<div class="aligndiv">
        Month:&ensp;&ensp;&ensp;
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
			<div class="aligndiv">
        Year: &ensp;&ensp;&ensp;&nbsp;
        <input size="16" type="text" id="year" name="year" value = "<?php echo $year;?>">
      </div>
			<div class="aligndiv">
        Category:
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
		<fieldset style="background-color:#AFEEEE">
			<legend class= "bfont">Submission Information</legend>
			<div class="aligndiv">
        Verification Document:
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
			<div class="aligndiv">
        Paper Status:
				<select name="remarks" id="status">
					<option value = "<?php echo $status;?>" select = "selected"><?php echo $status;?></option>
					<?php
					foreach($sta as $rem)
					{
						if($rem == $status)
							continue;
						echo "<option value = \"$rem\">".$rem."</option>";
          }
					?>
				</select>
			</div>
			<div class="aligndiv">
        <input size="16" type="button" value="Submit" name="submit" onclick="submit_form()">
        <input size="16" type = "button" onclick = "back()" value = "Back">
			</div>
		</fieldset>
	</form>
  <script>
  function validate()
  {
    var title= $("#title").val();
    $.ajax({
      data: {title: title},
      url:"validate.php",
      complete: function (response){
        var exist = response.responseText;
        if(exist=="y")
        {
          $("#submit").removeAttr('disabled');
        }
        else {
          {
            alert("Duplicate Title");
          }
        }
      }
    });
  }
  function submit_form()
  {
    var sap= "<?php echo $sap_id; ?>";
    var title1= "<?php echo $title; ?>";
    var title= $("#title").val();
    var authors= $("#authors").val();
    if(authors.length==0)
    {var authors=null;}
    var department= $("#department").val();
    if(department.length==0)
    {var department=null;}
    var affiliation= $("#affiliation").val();
    if(affiliation.length==0)
    {var affiliation=null;}
    var publisher= $("#publisher").val();
    if(publisher.length==0)
    {var publisher=null;}
    var identifier= $("#identifier").val();
    if(identifier.length==0)
    {var identifier=null;}
    var number= $("#number").val();
    if(number.length==0)
    {var number=null;}
    var indexed= $("#indexed").val();
    if(indexed.length==0)
    {var indexed=null;}
    var volume= $("#volume").val();
    if(volume.length==0)
    {var volume=null;}
    var issue= $("#issue").val();
    if(issue.length==0)
    {var issue=null;}
    var pageno= $("#pageno").val();
    if(pageno.length==0)
    {var pageno=null;}
    var doi= $("#doi").val();
    if(doi.length==0)
    {var doi=null;}
    var url= $("#url").val();
    if(url.length==0)
    {var url=null;}
    var month= $("#month").val();
    if(month.length==0)
    {var month=null;}
    var year= $("#year").val();
    if(year.length==0)
    {var year=null;}
    var category= $("#category").val();
    if(category.length==0)
    {var category=null;}
    var verification= $("#verification").val();
    if(verification.length==0)
    {var verification=null;}
    var status= $("#status").val();
    if(status.length==0)
    {var status=null;}
    var remarks= "Pending";
    var query= "UPDATE data SET title='"+title+"', authors='"+authors+"', department='"+department+"', affiliation='"+affiliation+"', category='"+category+"', publisher='"+publisher+"', month='"+month+"', year='"+year+"', identifier='"+identifier+"', number='"+number+"', doi='"+doi+"', indexed='"+indexed+"', volume='"+volume+"', issue='"+issue+"', page_no='"+pageno+"', url='"+url+"', verification_document='"+verification+"', status='"+status+"' WHERE title='"+title1+"'";
    $.ajax({
      data: {query: query},
      url:"insert.php",
      complete: function (response){
        alert(response.responseText);
      }
    });
  }
  </script>
</body>
</html>
