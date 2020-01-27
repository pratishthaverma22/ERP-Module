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
    if($tab=='r')
    {
      foreach($indexed as $index)
      {
        $query = "SELECT * FROM data WHERE sap_id = $sap AND indexed = '$index'";
        $labels = $indexed;
        $result = mysqli_query($db,$query);
        $count=(int)mysqli_num_rows($result);
        array_push($data,$count);
      }
    }
    if($tab=='tr')
    {
      $query = "SELECT * FROM login WHERE department = '$department'";
      $result = mysqli_query($db,$query);
      while($row = mysqli_fetch_assoc($result))
      {
        array_push($labels,$row['name']);
        $sapid= $row['sap_id'];
        $query1 = "SELECT * FROM data WHERE department = '$department' AND  sap_id = $sapid ";
        $result1 = mysqli_query($db,$query1);
        $count = (int)mysqli_num_rows($result1);
        array_push($data,$count);
      }
    }
    if($tab=='d')
    {
      foreach($dep as $deps)
      {
        $query = "SELECT * FROM data WHERE department = '$deps'";
        $labels = $dep;
        $result = mysqli_query($db,$query);
        $count=(int)mysqli_num_rows($result);
        array_push($data,$count);
      }
    }
    $return_data = array("data"=>$data,"labels"=>$labels);
    echo json_encode($return_data);
?>
