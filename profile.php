<?php
include("session.php");
include("connect-register.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
    
</head>
<body>
   <?php 
    include('navbar.php');
   ?>

    </div>
        <div class="container">
            <h1 class="new-h1">Profile</h1> <br>
            <?php
       
            if (isset($_SESSION['sid'])) {
            // echo $uid=$_SESSION['sid'];
            // echo $mySessionId;
            // echo $mySessionEmail;
            $myquery = "SELECT * FROM users WHERE id='$mySessionId' && email='$mySessionEmail'";
            // echo $myquery;
            $data =  mysqli_query($conn, $myquery);
            $total = mysqli_num_rows($data);

            if($total != 0){
                while($result = mysqli_fetch_assoc($data)){
                    echo "<b> First Name : </b>".$result['fname']."<br><br>";
                    echo "<b> Middle Name : </b>".$result['mname']."<br><br>";
                    echo "<b> Last Name : </b>".$result['lname']."<br><br>";
                    echo "<b> Designation : </b>".$result['designation']."<br><br>";
                    echo "<b> Designation : </b>".$result['designation']."<br><br>";

                }
            }else{
                echo "The Record is not found";
            }
           
            }else{  
                header("location:logout.php");
            }
            ?>
            <button><a href="register-edit.php">Edit</a></button>
          <button> <a href="logout.php">Logout</a></button>

       

            
        </div>


    <?php
        include("footer.php");
    ?>
    
</body>
</html>


       
             