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
		$month=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
    $category=array("Journal","Conference","Book Chapter","Book","Magazine","News Paper","White Paper","Patent","Transaction");
    $indexed=array("SCI","Scopus","eSCI","UGC Approved","Other");
    $department=array("Informatics","Systematics","Cybernetics","Virtualization","Computer Application");
		$sap_id = $_SESSION['sapid'];
		#$title = $_GET['title'];
	?>
	<form method="POST" onsubmit="submit_form();">
		<fieldset style="background-color:#AFEEEE">
      <legend class= "bfont">General Information</legend>
  		<div class="centerdiv" align="center">
        Title:<br>
        <textarea required rows="4" cols="100" name="title" id="title" onchange="validate();"></textarea>
      </div>
  		<div class="leftdiv">
        Other Authors:
        <input type="text" name = "authors" id="authors">
      </div>
    	<div class="middlediv">Department:
        <select name="department" id="department">
          <?php
          foreach($department as $dep)
          {
            echo "<option value=\"$dep\">".$dep."</option>";
          }
          ?>
    		</select>
    	</div>
    	<div class="rightdiv">
        Affiliation:
        <input type="text" name="affiliation" id="affiliation">
      </div>
    </fieldset>
  	<fieldset style="background-color:#AFEEEE">
      <legend class= "bfont">Publication Information</legend>
    	<div class="middlediv">
        Publisher:&ensp;
        <input type="text" name="publisher" id="publisher">
      </div>
    	<div class="middlediv">
        Identifier:
    		<select name="identifier" id="identifier">
          <option value="ISSN">ISSN</option>
    			<option value="ISBN">ISBN</option>
    			<option value="ISSP">ISSP</option>
    		</select>
    	</div>
  		<div class="rightdiv">
        Number:&nbsp;
        <input type="text" name="number" id="number">
      </div>
  		<div class="middlediv">Indexed in:
        <select name="indexed" id="indexed">
          <?php
          foreach($indexed as $ind)
          {
            echo "<option value=\"$ind\">".$ind."</option>";
          }
          ?>
  			</select>
  		</div>
  		<div class="rightdiv">
        Volume: &ensp;
        <input type="text" name="value" id="volume">
      </div>
  		<div class="leftdiv">
        Issue: &ensp;&ensp;&ensp;
        <input type="text" name="issue" id="issue">
      </div>
  		<div class="middlediv">
        Page No.: &ensp;
        <input type="text" name="pageno" id="pageno">
      </div>
  		<div class="leftdiv">
        DOI:&ensp;&ensp;&ensp;&nbsp;
        <input type="text" name="doi" id="doi">
      </div>
  		<div class="rightdiv">
        URL:&ensp;&ensp;&ensp;
        <input type="text" name="url" id="url">
      </div>
      <div class="rightdiv">
        Month:&ensp;&ensp;&ensp;
        <select name="month" id="month">
          <option value="<?php echo date("M");?>" select="selected"><?php echo date("M");?></option>
          <?php
  					foreach($month as $mon)
  					{
  						if($mon == date("M"))
  							continue;
  						echo "<option value=\"$mon\">".$mon."</option>";
  					}
  				?>
        </select>
      </div>
  		<div class="leftdiv">
        Year: &ensp;&ensp;&ensp;&nbsp;
        <input type="text" id="year" name="year" value="<?php echo date("Y");?>">
      </div>
  		<div class="leftdiv">
        Category:
        <select name="category" id="category">
          <?php
          foreach($category as $cat)
          {
            echo "<option value=\"$cat\">".$cat."</option>";
          }
          ?>
        </select>
      </div>
    </fieldset>
  	<fieldset style="background-color:#AFEEEE">
      <legend class= "bfont">Submission Information</legend>
      <div class="leftdiv">Verification Document:
        <select name="verification" id="verification">
          <option value="Certificate">Certificate</option>
  				<option value=""></option>
  				<option value=""></option>
  			</select>
  		</div>
  		<div class="middlediv">
        Paper Status:
        <select name="status" id="status">
          <option value="Submitted">Submitted</option>
  				<option value="Accepted">Accepted</option>
  				<option value="In-print">In-print</option>
  				<option value="Published">Published</option>
  			</select>
  		</div>
  		<div class="rightdiv">
        <input type="submit" value="Submit" name="submit" id="submit" disabled="disabled">
  			<input type = "button" onclick = "back()" value = "Back">
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
    var sap= "<?php echo $sap_id; ?>"
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
    var query= "INSERT INTO data (sap_id,title,authors,department,affiliation,category,publisher,month,year,identifier,number,doi,indexed,volume,issue,page_no,url,verification_document,status,remarks) VALUES("+sap+",'"+title+"','"+authors+"','"+department+"','"+affiliation+"','"+category+"','"+publisher+"','"+month+"',"+year+",'"+identifier+"','"+number+"','"+doi+"','"+indexed+"',"+volume+","+issue+",";
    var query= query+"'"+pageno+"','"+url+"','"+verification+"','"+status+"','"+remarks+"')";
    alert(query);
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
