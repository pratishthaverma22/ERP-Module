<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Research Form</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="./css/form.css">
  <script>
  function CheckFund(val)
  {
    var element=document.getElementById('amountdiv');
    if(val=='Yes')
      element.style.display='block';
    else
      element.style.display='none';
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
    $category=array("Journal","Conference","Book Chapter","Book","Magazine","News Paper","White Paper","Patent","Transaction");
    $indexed=array("SCI","Scopus","eSCI","UGC Approved","Other");
    $department=array("Informatics","Systemics","Cybernetics","Virtualization","Computer Application");
    $categ = array("Oral Presentation","Poster Presentation");
    $type_array = array("National","International");
    $query = "SELECT * FROM conference WHERE sap_id = $sap_id AND title = '$title'";
  	$result = mysqli_query($db,$query);
  	while($row = mysqli_fetch_assoc($result))
  	{
  		$authors = $row['authors'];
  		$department_fetch = $row['department'];
  		$affiliation= $row['affiliation'];
      $jname= $row['conference_preceeding'];
      $conf = $row['conf_name'];
      $type = $row['type'];
      $start_date = $row['start_date'];
      $end_date = $row['end_date'];
      $category = $row['category'];
  		$publisher = $row['publisher'];
      $issn = $row['id_number'];
      $organized = $row['organized'];
      $location = $row['location'];
      $funding = $row['funding'];
      $amount = $row['amount'];
  		$month_fetch = $row['month'];
  		$year = $row['year'];
  		$doi = $row['doi'];
  		$indexed_fetch = $row['indexed'];
  		$pageno = $row['page_no'];
  		$url = $row['url'];
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
        &ensp;Conference Preceeding:&ensp;&ensp;&ensp;
        <textarea required rows="2" cols="30" name="jtitle" id="jtitle"><?php echo $jname;?></textarea>
      </div>
  		<div class="aligndiv author">
        List of Authors:
        <span class="tooltiptext">List of Authors should be typed as they appear in the paper</span>
        <input size="16" type="text" name = "authors" id="authors" value="<?php echo $authors;?>">
      </div>
      <div class="aligndiv1">Department:
        <select name="department" id="department">
          <option value="<?php echo $department_fetch?>" select="selected"><?php echo $department_fetch?></option>
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
    	<div class="aligndiv">
        Affiliation:
        <input size="16" type="text" name="affiliation" id="affiliation" value="<?php echo $affiliation;?>">
      </div>
    </fieldset>
    <fieldset style="background-color:#AFEEEE">
      <legend class= "bfont">Conference Infomration</legend>
      <div class="centerdiv">
        &ensp;Conference Name:&ensp;&ensp;&ensp;
        <textarea required rows="2" cols="50" name="ctitle" id="ctitle" onchange="validate();"><?php echo $conf;?></textarea>
        &ensp;&ensp;Type:
        <select name="type" id="type">
          <option value="<?php echo $type?>" select="selected"><?php echo $type?></option>
          <?php
          foreach($type_array as $typ)
          {
            if($typ == $type)
              continue;
            echo "<option value=\"$typ\">".$typ."</option>";
          }
          ?>
        </select>
          &ensp;&ensp;Category:
        <select name="category" id="category">
          <option value="<?php echo $category?>" select="selected"><?php echo $category?></option>
          <?php
          foreach($categ as $cat)
          {
            if($cat == $category)
              continue;
            echo "<option value=\"$cat\">".$cat."</option>";
          }
          ?>
        </select>
      </div>
      <div class="aligndiv">
        Organized By:<input size="16" type="text" name="organized" id="organized" value="<?php echo $organized;?>">
      </div>
      <div class="aligndiv">
        Location:<input size="16" type="text" name="location" id="location" value="<?php echo $location;?>">
      </div>
      <div class="aligndiv">
        Start Date:<input size="16" type="date" name="start_date" id="start_date" value="<?php echo strftime('%Y-%m-%d', strtotime($start_date)); ?>">
      </div>
      <div class="aligndiv">
        End Date:<input size="16" type="date" name="end_date" id="end_date" value="<?php echo strftime('%Y-%m-%d',strtotime($end_date)); ?>">
      </div>
      <div class="aligndiv">
        Funding from UPES:<br>
        <input size="16" type="radio" id="funding" name="funding" onclick="CheckFund(this.value);" value="Yes" <?php if($funding=="Yes") {echo "checked";}?>>Yes</input>
        <input size="16" type="radio" id="funding" name="funding" onclick="CheckFund(this.value);" value="No" <?php if($funding=="No") {echo "checked";}?>>No</input>
      </div>
      <div class="aligndiv" id="amountdiv" style="display:none">
        Amount:<input size="16" type="text" name="amount" id="amount" value="<?php echo $amount;?>">
      </div>
    </fieldset>
  	<fieldset style="background-color:#AFEEEE">
      <legend class= "bfont">Publication Information</legend>
      <div class="aligndiv">Indexed in:
        <select name="indexed" id="indexed">
          <option value="<?php echo $indexed_fetch;?>"><?php echo $indexed_fetch;?></option>
        <option value="SCOPUS">SCOPUS</option>
          <option value="SCI">SCI</option>
          <option value="Other">Other</option>
  			</select>
  		</div>
    	<div class="aligndiv">
        Publisher:&ensp;
        <input size="16" type="text" name="publisher" id="publisher" value="<?php echo $publisher;?>">
      </div>

  		<div class="aligndiv1">
        ISSN/ISBN Number:&nbsp;
        <input size="16" type="text" name="issn" id="issn" value="<?php echo $issn;?>">
      </div>

  		<div class="aligndiv">
        Page No.: &ensp;
        <input size="16" type="text" name="pages" id="pages" value="<?php echo $pageno;?>">
      </div>
      <div class="aligndiv">
        URL:&ensp;&ensp;&ensp;
        <input size="16" type="text" name="url" id="url" value="<?php echo $url;?>">
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

    </fieldset>
  	<fieldset style="background-color:#AFEEEE">
      <legend class= "bfont">Submission Information</legend>
      <div class="aligndiv">Upload Full Copy of Published Article:
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
    if(title!=title1){
    $.ajax({
      data: {title: title},
      url:".form/validate.php",
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
  var title_fetch = "<?php echo $title;?>";
  var title= $("#title").val();
  if(title==title_fetch){
    $("#submit").removeAttr('disabled');
  }
    var val="<?php echo $funding;?>";
    var element=document.getElementById('amountdiv');
    if(val=='Yes')
      element.style.display='block';
    else
      element.style.display='none';
  function submit_form()
  {
    var title1= "<?php echo $title; ?>";
    var sap= "<?php echo $sap_id; ?>";
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
    var ctitle= $("#ctitle").val();
    if(ctitle.length==0)
    {var ctitle=null;}
    var publisher= $("#publisher").val();
    if(publisher.length==0)
    {var publisher=null;}
    var issn= $("#issn").val();
    if(issn.length==0)
    {var issn=null;}
    var indexed= $("#indexed").val();
    if(indexed.length==0)
    {var indexed=null;}
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
    var type= $("#type").val();
    if(type.length==0)
    {var type=null;}
    var category= $("#category").val();
    if(category.length==0)
    {var category=null;}
    var organized= $("#organized").val();
    if(organized.length==0)
    {var organized=null;}
    var location= $("#location").val();
    if(location.length==0)
    {var location=null;}
    var start_date= $("#start_date").val();
    if(start_date.length==0)
    {var start_date=null;}
    var end_date= $("#end_date").val();
    if(end_date.length==0)
    {var end_date=null;}
    var funding= $("#funding").val();
    if(funding.length==0)
    {var funding=null;}
    var amount= $("#amount").val();
    if(amount.length==0)
    {var amount=null;}
    var status= $("#status").val();
    if(status.length==0)
    {var status=null;}
    var remarks= "Pending";
    var query= "UPDATE conference SET title='"+title+"', authors='"+authors+"', department='"+department+"', affiliation='"+affiliation+"', conference_preceeding='"+jtitle+"',  conf_name='"+ctitle+"',  type='"+type+"',  start_date='"+start_date+"',  end_date='"+end_date+"',  category='"+category+"',  publisher='"+publisher+"',  id_number='"+issn+"',  organized='"+organized+"',  location='"+location+"',  funding='"+funding+"',  amount="+amount+",  indexed='"+indexed+"',  page_no='"+pages+"', month='"+month+"', year="+year+",  url='"+url+"', doi='"+doi+"', upload='"+verification+"', status='"+status+"' WHERE title='"+title1+"'";
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
