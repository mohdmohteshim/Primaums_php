<?php

include("session.php");
include("connect-register.php");

// $valueId = $_GET["id"];
// echo $mySessionId;
$Edituser = "SELECT * FROM `portfolio` WHERE id = '$mySessionId'";
// echo $Edituser;

$myresult = mysqli_query($conn, $Edituser);

if($myresult->num_rows>0){

    while ($myrows=$myresult->fetch_assoc()){
        
      $myportfolioName = $myrows['portfolioName'];
        
        $mysDate = $myrows['startDate']; 

        $myeDate = $myrows['endDate']; 

      
}
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <?php 
        include('navbar.php');
    ?>

<div class="container">
        <div class="row">
            <div class="col">
            <form action="portfolio-update.php" method="post">
            <input type="hidden" name ="userid" value ="<?php echo $mySessionId ?>">

            <b>Portfolio Name : </b>
            <input type="string" name="portname" id="" > <br> <br>

            <b>Start Date : </b>
            <input type="date" name="sdate" id="" > <br> <br>

            <b>End Date : </b>
            <input type="date" name="edate" id="" > <br> <br>

            <button type="submit" name="submit">Submit</button>
        
            </form>
            </div>
        </div>
    </div>
    
    <?php 
        include('footer.php');
    ?>
    
</body>
</html>
