<?php
    session_start();
    require('connection.php');
    $department=$_SESSION['dep'];
    $desig = $_SESSION['desig'];
    $sap = $_SESSION['sapid'];
    $tab = $_GET['tab'];
    $_SESSION['tab']= $tab;
    $labels=[];
    $data=[];
    $count = 0;
    $indexed=array("SCI","Scopus","eSCI","UGC Approved","Other");
    $dep=array("Informatics","Systemics","Cybernetics","Virtualization","Computer Application");
    if($tab=='tr')
    {
      foreach($indexed as $index)
      {
        $query = "SELECT * FROM data WHERE indexed = '$index' AND department = '$department'";
        $labels = $indexed;
        $result = mysqli_query($db,$query);
        $count=(int)mysqli_num_rows($result);
        array_push($data,$count);
      }
    }
    if($tab=='d')
    {
      foreach($indexed as $index)
      {
        $query = "SELECT * FROM data WHERE indexed = '$index'";
        $labels = $indexed;
        $result = mysqli_query($db,$query);
        $count=(int)mysqli_num_rows($result);
        array_push($data,$count);
      }
    }
    $return_data = array("data"=>$data,"labels"=>$labels);
    echo json_encode($return_data);
?>
