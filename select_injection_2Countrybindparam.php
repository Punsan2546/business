<?php
require "connect.php";


if(isset($_GET["CountryName"]))

{

    $CountryName = $_GET["CountryName"];
    echo "<br>"."CountryName =".$CountryName;
    $sql="SELECT * FROM country WHERE CountryName = :countryname";
    echo "<br>" . "sql=".$sql."<br>";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':CountryName', $_GET['CountryName']);
    $stmt->execute();
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    //print_r($result);
}
?>
<table width="300" border="1">
  <tr>
    <th width="325">รหัสประเทศ</th>
    <td width="240"><?php echo $result["CountryCode"]; ?></td>
  </tr>

  <tr>
    <th width="130">ชื่อประเทศ</th>
    <td><?php echo $result["CountryName"]; ?></td>
  </tr>

 
  </table>
<?php
$conn = null;
?>