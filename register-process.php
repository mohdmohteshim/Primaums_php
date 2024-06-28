<?php
include("connect-register.php");
$value_fName = $_POST["fname"];
$value_mName = $_POST["mname"];
$value_lName = $_POST["lname"];
$valueDesignation = $_POST["designation"];
$valueQualification = $_POST["qualification"];
$valueSubTaught = $_POST["sub-taught"];
$value_Texp = $_POST["Texp"];
$value_Iexp = $_POST["Iexp"];
$value_AreaInt = $_POST["areaInt"];
$value_national = $_POST["national"];
$value_international = $_POST["international"];
$value_email = $_POST["email"];
$value_mob = $_POST["mob"];
$value_password =$_POST['password'];


$mysql ="insert into users (fname, mname, lname, designation, qualification, subjectTaught, teachExp, indExp, areaIntrest, nationalPaper, internationalPaper, email, mob, password) 
values ('$value_fName', '$value_mName', '$value_lName', '$valueDesignation' , '$valueQualification','$valueSubTaught', '$value_Texp', '$value_Iexp', '$value_AreaInt', '$value_national','$value_international', '$value_email', '$value_mob','$value_password')";

if(mysqli_query($conn, $mysql)){   
    echo "Data Sucessfully Added";
}
else{
    echo "Data is Not Added";
}

?>
