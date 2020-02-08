<?php

$doi = (isset($_GET["doi"]) && $_GET["doi"] != "" ? $_GET["doi"] : "10.1037/0022-3514.65.6.1190");
$debug = (isset($_GET["debug"]) ? true : false);

function doi_url($doi)
{
  //return "http://dx.doi.org/" . $doi;
  return "http://data.crossref.org/" . $doi;
}

function get_curl($url)
{
  $curl = curl_init();
  $header[0] = "Accept: application/rdf+xml;q=0.5,";
  $header[0] .= "application/vnd.citationstyles.csl+json;q=1.0";
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
  $json = curl_exec($curl);
  curl_close($curl);
  return $json;
}

function get_json_array($json)
{
  return json_decode($json, true);
}



function get_chicago_citation($json_array, $doi, $doi_url)
{
  $title        = $json_array["title"];
  $author_array = $json_array["author"];
  $jtitle       = $json_array["container-title"];
  $pages        = $json_array["page"];
  $issn_array   = $json_array["ISSN"];
  $url          = $json_array["URL"];
  $year         = $json_array["issued"]["date-parts"][0][0];

  $citation  = "";
  $author_count = count($author_array);
  $last = $author_count - 1;

  $author_list[] = trim($author_array[0]["family"]) . ", " . trim($author_array[0]["given"]);
  for($i=1; $i<$last; $i++)
  {
    $author_list[] = trim($author_array[$i]["given"]) . " " . trim($author_array[$i]["family"]);
  }
  $author_list[] = "and " . trim($author_array[$last]["given"]) . " " . trim($author_array[$last]["family"]);
  $citation .= implode(", ", $author_list) . ". ";

  $citation .= "&ldquo;" . trim(str_replace(".", "", $title)) . ".&rdquo; ";
  $citation .= "<em>" . trim(str_replace(".", "", $jtitle)) . "</em> ";
  $citation .= " (" . $year . ")";
  $citation .= ($pages ? ": " . $pages . ". " : ". ");
  $citation .= ($doi ? "doi:&nbsp;<a href='" . $doi_url . "'>" . $doi . "</a>" : "");

  return $citation;
}



$doi_url      = doi_url($doi);
$json         = get_curl($doi_url);
$json_array   = get_json_array($json);
echo $json;
$title        = $json_array["title"];
$author_array = $json_array["author"];
$jtitle       = $json_array["container-title"];
$publisher    = $json_array["publisher"];
$pages        = $json_array["page"];
$volume       = $json_array["volume"];
$issue        = $json_array["issue"];
$issn_array   = $json_array["ISSN"];
$isbn_array   = $json_array["ISBN"];
$url          = $json_array["link"];
$year         = $json_array["issued"]["date-parts"][0][0];
$month        = $json_array["issued"]["date-parts"][0][1];
$author_count = count($author_array);
$last = $author_count - 1;
$url = $url[0];
for($i=0; $i<$last; $i++)
{
  $author_list[] = trim($author_array[$i]["given"]) . " " . trim($author_array[$i]["family"]);
}
$author_list[] = "and " . trim($author_array[$last]["given"]) . " " . trim($author_array[$last]["family"]);
$authors = implode(", ", $author_list);
echo "<br>Title:".$title."<br>"."Author:".$authors;
echo "<br>Journal Title:".$jtitle."<br>Publisher:".$publisher."<br>Volume:".$volume."<br>Issue:".$issue."<br>Pages:".$pages."<br>ISBN:".$isbn_array[0]."<br>ISSN:".$issn_array[0]."<br>URL:".$url['URL']."<br>Month:".$month."<br>Year:".$year;

$chicago_citation = get_chicago_citation($json_array, $doi, $doi_url);

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>DOI Citation Generator</title>
<style>
  * { -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; }
  html { font-size: 1em; margin: 2em; font-family: Verdana; }
  input[type="text"] { width: 20em; }
  h3 { text-indent: 0.75em; font-weight: normal; }
  .ama, .chicago { max-width: 65%; }
  .nav { max-width: 25%; float: right; font-size: 0.85em; }
  .hangingindent { margin-left: 1em; padding-left: 2em ; text-indent: -2em ; }
  .json_array {  }
  .cf:before, .cf:after { content: " "; display: table; }
  .cf:after { clear: both; }
  .cf { *zoom: 1; }
</style>
</head>
<body>

<form method="get" action="">
<input type="text" name="doi" value="<?php echo $doi ?>">
<input type="submit" value="Search DOI">
<input type="checkbox" name="debug" <?php if (isset($_GET["debug"])) echo " checked"; ?>>debug
</form>

<div class="nav">
  <h2>Examples</h2>
  <div><a href="?doi=10.1037%2F0022-3514.65.6.1190<?php
    if (isset($_GET["debug"])) echo "&amp;debug=on";
    ?>">10.1037/0022-3514.65.6.1190</a></div>
  <div><a href="?doi=10.1016%2Fj.jip.2014.01.003<?php
    if (isset($_GET["debug"])) echo "&amp;debug=on";
    ?>">10.1016/j.jip.2014.01.003</a></div>
  <div><a href="?doi=10.1155%2F2014%2F683757<?php
    if (isset($_GET["debug"])) echo "&amp;debug=on";
    ?>">10.1155/2014/683757</a></div>
  <div><a href="?doi=10.1016%2Fj.quaint.2013.12.014<?php
    if (isset($_GET["debug"])) echo "&amp;debug=on";
    ?>">10.1016/j.quaint.2013.12.014</a></div>
</div>

<section class="cf">

<h2>Chicago Citation Format</h2>
<h3>Reference Format</h3>
<p class="chicago hangingindent">
<?php echo $chicago_citation . "\n"; ?>
</p>
</section>


</body>
</html>
