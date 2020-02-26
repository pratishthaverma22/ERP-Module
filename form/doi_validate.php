<?php
$doi=$_GET['doi'];
function doi_url($doi)
{
  return "http://dx.doi.org/" . $doi;
  //return "http://data.crossref.org/" . $doi;
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
$doi_url      = doi_url($doi);
$json         = get_curl($doi_url);
$json_array   = get_json_array($json);
if(array_key_exists("title",$json_array))
{
$title        = $json_array["title"];
$fetch['title']=$title;
}
 if(array_key_exists("author",$json_array))
  {
  $author_array = $json_array["author"];
  $author_count = count($author_array);
  $last = $author_count - 1;
  for($i=0; $i<$last; $i++)
  {
    $author_list[] = trim($author_array[$i]["given"]) . " " . trim($author_array[$i]["family"]);
  }
  $author_list[] = "and " . trim($author_array[$last]["given"]) . " " . trim($author_array[$last]["family"]);
  $authors= implode(", ", $author_list) . ". ";
  $fetch['authors']=$authors;
}
if(array_key_exists("container-title",$json_array)){
$jtitle       = $json_array["container-title"];
$fetch['jtitle']=$jtitle;}
if(array_key_exists("publisher",$json_array)){
$publisher    = $json_array["publisher"];}
$fetch['publisher']=$publisher;
if(array_key_exists("volume",$json_array)){
$volume       = $json_array["volume"];
$fetch['volume']=$volume;}
if(array_key_exists("issue",$json_array)){
$issue        =$json_array["issue"];
$fetch['issue']=$issue;}
if(array_key_exists("page",$json_array)){
$pages        = $json_array["page"];
$fetch['pages']=$pages;}
if(array_key_exists("ISSN",$json_array)){
$issn_array   = $json_array["ISSN"];
$fetch['issn']=$issn_array[0];}
elseif(array_key_exists("ISBN",$json_array)){
  $isbn_array = $json_array["ISBN"];
  $fetch['issn']=$isbn_array[0];
}
if(array_key_exists("URL",$json_array)){
$url          = $json_array["URL"];
$fetch['url']=$url;}
if(array_key_exists("issued",$json_array)){
$date         = $json_array["issued"]["date-parts"][0];
if(array_key_exists(1,$date)){
$month        = $date[1];
$dateObj   = DateTime::createFromFormat('!m', $month);
$monthName = $dateObj->format('M');
$fetch['month']=$monthName;}
if(array_key_exists(0,$date)){
$year         = $date[0];
$fetch['year']=$year;}}
echo json_encode($fetch);
?>
