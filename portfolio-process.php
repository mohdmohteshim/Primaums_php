<?php
include("connect-register.php");
$value_portName = $_POST["portname"];
$value_pDate = $_POST["sdate"];
$value_eDate = $_POST["edate"];

$mysql ="insert into portfolio (portfolioName, startDate, endDate) values ( '$value_portName', '$value_pDate', '$value_eDate')";
// echo $mysql;


if(mysqli_query($conn, $mysql)){   
    echo "Data Sucessfully Added";
}
else{
    echo "Data is Not Added";
}



?>