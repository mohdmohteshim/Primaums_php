<?php
include("session.php");
include("connect-register.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paper Published</title>
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
            <form action="paper-published-process.php" method="post">

            <h1 class="new-h1">Paper Published Details </h1>
          
            <b>Paper Name : </b>
            <input type="string" name="pname" id="" > <br> <br>

            <b>Paper Link : </b>
            <input type="string" name="plink" id="" > <br> <br>

            <button type="submit" name="submit">Submit</button>
        
            </form>
            </div>
        </div>
    </div>
    

    <?php
       
       if (isset($_SESSION['sid'])) {
       // echo $uid=$_SESSION['sid'];
       // echo $mySessionId;
       // echo $mySessionEmail;
       $myquery = "SELECT * FROM paper WHERE userID='$mySessionId' && email='$mySessionEmail'";
       // echo $myquery;
       $data =  mysqli_query($conn, $myquery);
       $total = mysqli_num_rows($data);

       
       if($total != 0){
        echo"<table border=1>";
        echo "<tr> <td>Paper Name </td>";
        echo "<td> Paper Link </td>";
        echo "</tr> ";
           while($result = mysqli_fetch_assoc($data)){
            
            echo "<tr> <td>".$result["paperName"]."</td> ";
            echo "<td>".$result['paperLink']."</td></tr> ";
           
           }

           echo "</table>";   
       }else{
           echo "The Record is not found";
       }
      
       }else{  
           header("location:logout.php");
       }
       ?>

    <?php 

    include('footer.php');
   ?>
    
</body>
</html>

