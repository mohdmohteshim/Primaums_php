<?php

include("session.php");
include("connect-register.php");

if (isset($_POST['submit'])) {

$valueId = $_POST["userid"];

$valueportfolioName =$_POST["portname"];   

$valuesDate =$_POST["sdate"];   

$valueeDate =$_POST["edate"];  



                               
$updateuser = "UPDATE portfolio SET portfolioName='$valuefname$valueportfolioName', startDate ='$valuesDate', 
                endDate ='$valueeDate' WHERE id= $mySessionId";

// echo $updateuser; die;

// echo $updateuser;

$myresult = mysqli_query($conn, $updateuser);

if (mysqli_query($conn, $updateuser)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

}   
?>

