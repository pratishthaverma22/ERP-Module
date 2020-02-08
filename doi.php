<!DOCTYPE html>
<head>
</head>
<body>
  <form>
  <input type='text' name='url'>
  <input type ='submit' name='button1'>
</form>
  <?php

$url = $_GET['url'];
echo $url;
$metas = get_meta_tags($url);
echo "<pre>"; print_r($metas); echo "</pre>";
?>
</body>
</html>
