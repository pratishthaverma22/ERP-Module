<!DOCTYPE html>
<head>
</head>
<body>
  <form>
  <input size="16" type='text' name='url'>
  <input size="16" type ='submit' name='button1'>
</form>
  <?php

$url = $_GET['url'];
echo $url;
$metas = get_meta_tags($url);
echo "<pre>"; print_r($metas); echo "</pre>";
?>
</body>
</html>
