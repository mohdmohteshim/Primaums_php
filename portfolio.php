<?php

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
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
            <form action="portfolio-process.php" method="post">


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