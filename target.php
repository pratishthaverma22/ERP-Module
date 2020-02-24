<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
  <script src="charts.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php
    require('connection.php');
    session_start();
    $department=array("Informatics","Systemics","Cybernetics","Virtualization","Computer Application");
    $ind = array("SCI","Scopus","Other");
    $sap_id = $_SESSION['sapid'];
    $query = "SELECT * FROM socs";
    $result = mysqli_query($db,$query);
  ?>
  <h1>Set Target</h1>
  <table>
    <tr>
      <th>Department</th>
      <?php
        foreach($ind as $index)
        {
          echo "<th>".$index."</th>";
        }
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>".$row['Department']."</td>";
          echo "<form name='".$row['Department']."' method ='post' >";
          foreach($ind as $index){
          echo "<td><input size=\"16\" type='number' name='".$index,$row['department']."' value='".$row[$index]."'></td>";
        }
        echo "<td><input size=\"16\" type='submit' name='".$row['Department']."' value='Set Value' onclick='setvalue(".$row['Department'].")'>";
        echo "</form>";
        echo "</tr>";
        }
      ?>
  </table>
  <script>
  function setvalue(department)
  {
    var id= department.name;
    var form = document.getElementById(id);
    alert(form);

  }
  </script>
</body>
</html>
