<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./css/all.css">
<style type = "text/css">
#filter{
	height:380px;
	width:340px;
	margin:0
	auto;
	position:fixed;
	z-index:10;
	display:none;
	border:5px solid #cccccc;
	border-radius:10px;
	background-color: #aaaaaa;
	font-size: 10pt;
}
th {
	font-size:14pt;
}
td {
	font-size:10pt;
}
</style>
<script>
function filter()
{
	document.getElementById("filter").style.display = "block";
}
function hide()
{
	document.getElementById("filter").style.display = "none";
}
function applyfilter()
{
	document.getElementById("filter").style.display = "none";
	var name = document.getElementById("name").value;
	var month = document.getElementById("month").value;
	var year = document.getElementById("year").value;
	var identifier = document.getElementById("identifier").value;
	var remarks = document.getElementById("remarks").value;
	var query = "";
	if(name!='')
	{
		query=query.concat(" AND name= '"+name+"'");
	}
	if(month!="")
	{
		query=query.concat(" AND month = '"+month+"'");
	}
	if(year!="")
	{
		query=query.concat(" AND year = '"+year+"'");
	}
	if(identifier!="")
	{
		query=query.concat(" AND identifier = '"+identifier+"'");
	}
	if(remarks!="")
	{
		query=query.concat(" AND remarks = '"+remarks+"'");
	}
	var httprequest = new XMLHttpRequest();
	httprequest.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {

    document.getElementById("try").innerHTML = this.responseText;
    }
  };
  httprequest.open("GET", "adreport1.php?q="+query, true);
  httprequest.send();
}

</script>
</head>
<body onload="applyfilter();">
<?php
require('connection.php');
session_start();
$desig = $_SESSION['desig'];
$tab = $_GET['tab'];
$_SESSION['tab'] = $tab;
$sap = $_SESSION["sapid"];
$dep = $_SESSION["dep"];
$mon=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
$category=array("Journal","Conference","Book Chapter","Book","Magazine","News Paper","White Paper","Patent","Transaction");
$indexed=array("SCI","Scopus","eSCI","UGC Approved","Other");
$department=array("Informatics","Systemics","Cybernetics","Virtualization","Computer Application");
$alpharange = range('A','Z');
$count = 0;
?>
<h1>Publication Data<h1>
<button style="float:left;" onclick="filter();">Filter</button>
<br>
<br>
<div id="try">

</div>
<div style = "align:right;position:absolute; left:5%; top:23%" id ="filter">
<h3>Filter</h3>

Name:<input type = "text" name="name" id="name"><br><br>

Month:<select name="month" id="month">
						<option value="" select="selected">Month</option>
						<?php
							foreach($mon as $month)
							{

								echo "<option value=\"$month\">".$month."</option>";
							}
						?>
					</select><br><br>
Year:<input type="year" id ="year"><br><br>
Identifier:<select name="identifier" id="identifier">
					<option value = "" select = "selected" name= "identifier" >Identifier</option>
						<option value="ISSN">ISSN</option>
						<option value="ISBN">ISBN</option>
						<option value="ISSP">ISSP</option>
					</select><br><br>

Remarks:<select name="remarks" id="remarks">
			<option value = "" select = "selected" name= "remarks" >Remarks</option>
						<option value="Submitted">Submitted</option>
						<option value="Accepted">Accepted</option>
						<option value="In-print">In-print</option>
						<option value="Published">Published</option>
					</select><br><br>
<input style="right:25%; position:absolute" type= "submit" name = "submit" onclick="applyfilter();" value = "Filter">
<input style="right:5%; position:absolute" type= "submit" name = "back" onclick="hide();" value = "Back">
</div>

</body>
</html>
