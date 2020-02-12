<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Research Form</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="./css/form.css">
</head>
<body>
  <?php
    require('../connection.php');
		session_start();
		$month=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
    $category=array("Journal","Conference","Book Chapter","Book","Magazine","News Paper","White Paper","Patent","Transaction");
    $indexed=array("SCI","Scopus","eSCI","UGC Approved","Other");
    $department=array("Informatics","Systemics","Cybernetics","Virtualization","Computer Application");
	?>
	<form method="POST" action"">
		<fieldset style="background-color:#AFEEEE">
      <legend class= "bfont">General Information</legend>
  		<div class="centerdiv">
        &ensp;Title:&ensp;&ensp;&ensp;
        <textarea required rows="2" cols="100" name="title" id="title" onchange="validate();"></textarea>
      </div>
  		<div class="aligndiv author">
        List of Authors:
        <span class="tooltiptext">List of Authors should be typed as they appear in the paper</span>
        <input size="16" type="text" name = "authors" id="authors">
      </div>
    	<div class="aligndiv">Department:
        <select name="department" id="department">
          <?php
          foreach($department as $dep)
          {
            echo "<option value=\"$dep\">".$dep."</option>";
          }
          ?>
    		</select>
    	</div>
    	<div class="aligndiv">
        Affiliation:
        <input size="16" type="text" name="affiliation" id="affiliation">
      </div>
    </fieldset>
    <fieldset style="background-color:#AFEEEE">
      <legend class= "bfont">Conference Infomration</legend>
      <div class="centerdiv">
        &ensp;Conference Name:&ensp;&ensp;&ensp;
        <textarea required rows="2" cols="100" name="title" id="title" onchange="validate();"></textarea>
      </div>
      <div class="aligndiv">
        Type:
        <select name="type" id="type">
          <option value="National">National</option>
          <option value="International">International</option>
        </select>
      </div>
      <div class="aligndiv">
        Category:
        <select name="category" id="category">
          <option value="Oral Presentation">Oral Presentation</option>
          <option value="Poster Presentation">Poster Presentation</option>
        </select>
      </div>
      <div class="aligndiv">
        Conference Dates:<input size="16" type="text" name="conf_dates" id="conf_dates">
      </div>
      <div class="aligndiv">
        Organized By:<input size="16" type="text" name="orgainzed" id="orgainzed">
      </div>
      <div class="aligndiv">
        Location:<input size="16" type="text" name="location" id="location">
      </div>
      <div class="aligndiv">
        Funding from UPES:<br>
        <input size="16" type="radio" name="funding" checked value="Yes">Yes</input>
        <input size="16" type="radio" name="funding" checked value="No">No</input>
      </div>
      <div class="aligndiv">
        Amount:<input size="16" type="text" name="amount" id="amount" disabled="disabled">
      </div>
    </fieldset>
  	<fieldset style="background-color:#AFEEEE">
      <legend class= "bfont">Publication Information</legend>
      <div class="aligndiv">Indexed in:
        <select name="indexed" id="indexed">
          <option value="SCI">SCI</option>
          <option value="SCOPUS">SCOPUS</option>
          <option value="Other">Other</option>
  			</select>
  		</div>
    	<div class="aligndiv">
        Publisher:&ensp;
        <input size="16" type="text" name="publisher" id="publisher">
      </div>

  		<div class="aligndiv">
        ISSN Number:&nbsp;
        <input size="16" type="text" name="number" id="number">
      </div>

  		<div class="aligndiv">
        Page No.: &ensp;
        <input size="16" type="text" name="pageno" id="pageno">
      </div>
  		<div class="aligndiv">
        DOI:&ensp;&ensp;&ensp;&nbsp;
        <input size="16" type="text" name="doi" id="doi">
        <input size="16" type="button" name="val_doi" id="val_doi" value="Validate">
      </div>
      <div class="aligndiv">
        URL:&ensp;&ensp;&ensp;
        <input size="16" type="text" name="url" id="url">
      </div>
      <div class="aligndiv">
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
      <div class="aligndiv">
        Year: &ensp;&ensp;&ensp;&nbsp;
        <input size="16" type="text" id="year" name="year" value="<?php echo date("Y");?>">
      </div>

    </fieldset>
  	<fieldset style="background-color:#AFEEEE">
      <legend class= "bfont">Submission Information</legend>
      <div class="aligndiv">Upload Full Copy of Published Article:
        <input size="16" type="text" name="verification" id="verification">
  		</div>
  		<div class="aligndiv">
        Paper Status:
        <select name="status" id="status">
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
</body>
</html>
