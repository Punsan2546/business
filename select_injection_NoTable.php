<?php
require "connect.php";


if(isset($_GET["CustomerID"]))

{

    $strCustomerID = $_GET["CustomerID"];
    echo "<br>"."strCustomerID =".$strCustomerID;
    $sql="SELECT * FROM customer WHERE CustomerID = '".$strCustomerID ."'";
    echo "<br>" . "sql=".$sql."<br>";
    $stml = $conn->prepare($sql);
    $stml->execute();
    $result=$stml->fetch(PDO::FETCH_NUM);
    print_r($resute);
}
?>
