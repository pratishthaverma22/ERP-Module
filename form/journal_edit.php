<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Research Form</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="./css/form.css">
  <script>
  function check(index)
  {
    if (index.value == "SCI"){
      $("#impactdiv").css("display","block");
    }
    else{
      $("#impactdiv").css("display","none");
    }
  }
  function doi_validate()
  {
    var doi = $("#doi").val();
    $.ajax({
      data: {doi: doi},
      url:"./form/doi_validate.php",
      complete: function (response){
        var fetch = JSON.parse(response.responseText);
        for(var key in fetch)
        {
          $("#"+key).val(fetch[key]);
        }
        validate();
      }
    });
  }
  function back(){
    window.parent.$("#frame").html("");
    window.parent.$("#frame").load('edit.php');
  }
  </script>
</head>
<body>
    <?php
    require('../connection.php');
		session_start();
    $title=$_GET['title'];
    $depart=$_SESSION['dep'];
    $desig = $_SESSION['desig'];
    $sap_id = $_SESSION['sapid'];
		$month=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
    $indexed=array("SCI","Scopus","eSCI","UGC Approved","Other");
    $department=array("Informatics","Systemics","Cybernetics","Virtualization","Computer Application");
    $query = "SELECT * FROM journal WHERE sap_id = $sap_id AND title = '$title'";
  	$result = mysqli_query($db,$query);
  	while($row = mysqli_fetch_assoc($result))
  	{
  		$authors = $row['authors'];
  		$department_fetch = $row['department'];
  		$affiliation= $row['affiliation'];
      $jname= $row['journal_name'];
  		$publisher = $row['publisher'];
      $issn = $row['issn'];
  		$month_fetch = $row['month'];
  		$year = $row['year'];
  		$doi = $row['doi'];
  		$indexed_fetch = $row['indexed'];
  		$volume = $row['volume'];
  		$issue = $row['issue'];
  		$pageno = $row['page_no'];
  		$url = $row['url'];
      $impact = $row['impact'];
  		$upload = $row['upload'];
      $status = $row['status'];
  	}
	?>
	<form method="POST" action"">
		<fieldset style="background-color:#AFEEEE">
      <legend class= "bfont">General Information</legend>
      <div class="centerdiv">
        DOI:&ensp;&ensp;&ensp;&nbsp;
        <input size="30" type="text" name="doi" id="doi" value="<?php echo $doi;?>">
        <input size="16" type="button" name="val_doi" id="val_doi" value="Validate" onclick="doi_validate();">
      </div><br>
  		<div class="centerdiv">
        &ensp;Title:&ensp;&ensp;&ensp;
        <textarea required rows="2" cols="50" name="title" id="title" onchange="validate();"><?php echo $title;?></textarea>
        &ensp;&ensp;&ensp;Journal Title:&ensp;&ensp;&ensp;
        <textarea required rows="2" cols="50" name="jtitle" id="jtitle"><?php echo $jname;?></textarea>
      </div>
  		<div class="aligndiv1 author">
        List of Authors:
        <span class="tooltiptext">List of Authors should be typed as they appear in the paper</span>
        <input size="16" type="text" name = "authors" id="authors" value="<?php echo $authors;?>">
      </div>
    	<div class="aligndiv1">Department:
        <select name="department" id="department">
          <option value="<?php echo $department_fetch;?>" select="selected"><?php echo $department_fetch;?></option>
          <?php
          foreach($department as $dep)
          {
            if($dep == $department_fetch)
              continue;
            echo "<option value=\"$dep\">".$dep."</option>";
          }
          ?>
    		</select>
    	</div>
    	<div class="aligndiv1">
        Affiliation:
        <input size="16" type="text" name="affiliation" id="affiliation" value="<?php echo $affiliation;?>">
      </div>
    </fieldset>
  	<fieldset style="background-color:#AFEEEE">
      <legend class= "bfont">Publication Information</legend>
    	<div class="aligndiv">
        Publisher:&ensp;
        <input size="16" type="text" name="publisher" id="publisher" value="<?php echo $publisher;?>">
      </div>

  		<div class="aligndiv">
        ISSN:&nbsp;
        <input size="16" type="text" name="issn" id="issn" value="<?php echo $issn;?>">
      </div>
      <div class="aligndiv">Indexed in:
        <select name="indexed" id="indexed" onchange="check(this);">
          <option value="<?php echo $indexed_fetch;?>"><?php echo $indexed_fetch;?></option>
        <option value="SCOPUS">SCOPUS</option>
          <option value="SCI">SCI</option>
          <option value="Other">Other</option>
  			</select>
  		</div>
      <div class="aligndiv">
        Volume: &ensp;
        <input size="16" type="text" name="volume" id="volume" value="<?php echo $volume;?>">
      </div>
      <div class="aligndiv" id="impactdiv" style="display:none">
        Impact Factor:
        <input size="16" type="number" name="impact" id="impact" onchange="check(this);" value="<?php echo $impact;?>">
      </div>
  		<div class="aligndiv">
        Issue: &ensp;&ensp;&ensp;
        <input size="16" type="text" name="issue" id="issue" value="<?php echo $issue;?>">
      </div>
      <div class="aligndiv">
        Month:&ensp;&ensp;&ensp;
        <select name="month" id="month">
          <option value="<?php echo $month_fetch;?>" select="selected"><?php echo $month_fetch;?></option>
          <?php
            foreach($month as $mon)
            {
              if($mon == $month_fetch)
                continue;
              echo "<option value=\"$mon\">".$mon."</option>";
            }
          ?>
        </select>
      </div>
      <div class="aligndiv">
        Year: &ensp;&ensp;&ensp;&nbsp;
        <input size="16" type="text" id="year" name="year" value="<?php echo $year;?>">
      </div>
  		<div class="aligndiv">
        Page No.: &ensp;
        <input size="16" type="text" name="pages" id="pages" value="<?php echo $pageno;?>">
      </div>
      <div class="aligndiv" style="width:50%">
        URL:&ensp;&ensp;&ensp;
        <input size="45" type="text" name="url" id="url" value="<?php echo $url;?>">
      </div>

    </fieldset>
  	<fieldset style="background-color:#AFEEEE">
      <legend class= "bfont">Submission Information</legend>
      <div class="aligndiv" style="width:50%;">Upload Full Copy of Published Article:
        <input size="16" type="text" name="verification" id="verification" value="<?php echo $upload;?>">
  		</div>
  		<div class="aligndiv">
        Paper Status:
        <select name="status" id="status">
          <option value="<?php echo $status;?>" select="selected"><?php echo $status;?></option>
          <option value="Submitted">Submitted</option>
  				<option value="Accepted">Accepted</option>
  				<option value="In-print">In-print</option>
  				<option value="Published">Published</option>
  			</select>
  		</div>
  		<div class="aligndiv">
        <input size="16" type="button" onclick = "submit_form()" value="Submit" name="submit" id="submit" disabled="disabled">
  			<input size="16" type = "button" onclick = "back()" value = "Back">
  		</div>
  	</fieldset>
  </form>
  <script>
  function validate()
  {
    var title1 = "<?php echo $title; ?>";
    var title= $("#title").val();
    if(title==title1){}
    else{
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
            $("#submit").attr('disabled','disabled');
          }
        }
      }
    });
  }
  }
  var index="<?php echo $indexed_fetch;?>";
  if (index == "SCI"){
    $("#impactdiv").css("display","block");
  }
  else{
    $("#impactdiv").css("display","none");
  }
  </script>
  <script>
  var title_fetch = "<?php echo $title;?>";
  var title= $("#title").val();
  if(title==title_fetch){
    $("#submit").removeAttr('disabled');
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
    var jtitle= $("#jtitle").val();
    if(jtitle.length==0)
    {var jtitle=null;}
    var publisher= $("#publisher").val();
    if(publisher.length==0)
    {var publisher=null;}
    var issn= $("#issn").val();
    if(issn.length==0)
    {var issn=null;}
    var indexed= $("#indexed").val();
    if(indexed.length==0)
    {var indexed=null;}
    var volume= $("#volume").val();
    if(volume.length==0)
    {var volume=null;}
    var issue= $("#issue").val();
    if(issue.length==0)
    {var issue=null;}
    var pages= $("#pages").val();
    if(pages.length==0)
    {var pages=null;}
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
    var verification= $("#verification").val();
    if(verification.length==0)
    {var verification=null;}
    var impact= $("#impact").val();
    if(impact.length==0)
    {var impact=null;}
    var status= $("#status").val();
    if(status.length==0)
    {var status=null;}
    var remarks= "Pending";
    var query= "UPDATE journal SET title='"+title+"', authors='"+authors+"', department='"+department+"', affiliation='"+affiliation+"',journal_name='"+jtitle+"',  publisher='"+publisher+"', month='"+month+"', year="+year+", issn='"+issn+"', doi='"+doi+"', indexed='"+indexed+"', volume="+volume+", issue="+issue+", page_no='"+pages+"', impact="+impact+", url='"+url+"', upload='"+verification+"', status='"+status+"' WHERE title='"+title1+"'";
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
