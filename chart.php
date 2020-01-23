<?php
    session_start();
    require('connection.php');
    $desig = $_SESSION['desig'];
    $sap = $_SESSION['sapid'];
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
 	  $SCI = (int)$ind['SCI'];
		$SCOPUS = (int)$ind['Scopus'];
		$eSCI = (int)$ind['eSCI'];
		$UGC =(int)$ind['UGC Approved'];
		$other =(int)$ind['Other'];
		$data =array($SCI,$SCOPUS,$eSCI,$UGC,$other);
		$labels = array("SCI","SCOPUS","eSCI","UGC","other");
    $return_data = array("data"=>$data,"labels"=>$labels);
    echo json_encode($return_data);
    ?>
