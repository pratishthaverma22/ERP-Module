<html>
   <head>
      <title>Highcharts Tutorial</title>
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      <script src = "https://code.highcharts.com/highcharts.js"></script>
   </head>

   <body>
      <div id = "container" style = "width: 550px; height: 400px; margin: 0 auto"></div>

	  <?php
    require('connection.php');
    $sap =	"40001713";
$count = 0;
$indexed=array("SCI","Scopus","eSCI","UGC Approved","Other");
foreach($indexed as $index)
{
$query = "SELECT * FROM data WHERE sap_id = $sap AND indexed = '".$index."'";
$result = mysqli_query($db,$query);
if(!$result)
{
	die("unable to connect");
}
$ind["$index"]=mysqli_num_rows($result);
}
?>
 <script language = "JavaScript">
 	var SCI = parseInt("<?php echo $ind['SCI']; ?>",10);
			var SCOPUS = parseInt("<?php echo $ind['Scopus']; ?>",10);
			var eSCI = parseInt("<?php echo $ind['eSCI']; ?>",10);
			var UGC = parseInt("<?php echo $ind['UGC Approved']; ?>",10);
			var other = parseInt("<?php echo $ind['Other']; ?>",10);
			var data =[
						['SCI',     SCI],
						['SCOPUS',     SCOPUS],
						['eSCI',    eSCI],
						['UGC',    UGC],
						['other',   other]];
			var datas = [
                  ['Firefox',   SCI],
                  ['IE',       26.8],
                  ['Safari',    8.5],
                  ['Opera',     6.2],
                  ['Others',   0.7]
               ];
         $(document).ready(function() {
            var chart = {
               plotBackgroundColor: null,
               plotBorderWidth: null,
               plotShadow: false
            };
            var title = {
               text: 'Publications indexed in Scopus and above'
            };
            var tooltip = {
               pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            };
            var plotOptions = {
               pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',

                  dataLabels: {
                     enabled: true,
                     format: '<b>{point.name}%</b>: {point.percentage:.1f} %',
                     style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor)||
                        'black'
                     }
                  }
               }
            };
            var series = [{
               type: 'pie',
               name: 'Browser share',
               data: [data[0],data[1],data[2],data[3],data[4]]
            }];
            var json = {};
            json.chart = chart;
            json.title = title;
            json.tooltip = tooltip;
            json.series = series;
            json.plotOptions = plotOptions;
            $('#container').highcharts(json);
         });
      </script>
   </body>

</html>
