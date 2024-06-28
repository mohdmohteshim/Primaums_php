<?php

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
   
    <form action="register-process.php" method="post">
    <h1 class="new-h1">Register Users</h1>
        <h2>Personal Information</h2>
        <b>First Name : </b>
        <input type="string" name="fname" id="" required> <br> <br>
        
        <b>Middle Name : </b>
        <input type="string" name="mname" id="" required> <br> <br>
        
        <b>Last Name : </b>
        <input type="string" name="lname" id="" required> <br> <br>

        <b>Designation : </b>
        <input type="string" name="designation" id="" required> <br> <br>

        <b>Profile</b>
        <input type="file" name="photo" id=""> <br> <br>
        <h2>Teaching Details</h2>

        <b>Qualification : </b>
        <textarea type="string" name="qualification" id="" required> </textarea> <br> <br>

        <b>Subject Taught : </b>
        <textarea type="string" name="sub-taught" id="" required> </textarea> <br> <br>

        <div class="main-exp">
        <div class="exp">
        <b class="bold">Teaching Experience : </b>
        <input type="number" name="Texp" id="" required class="exp"> <br> <br>
        </div>

        <div class="exp">
        <b class="bold">Industrial Experience : </b>
        <input type="number" name="Iexp" id="" required class="exp"> <br> <br>
        </div>
        </div>
        <b>Area of Interest : </b>
        <textarea type="string" name="areaInt" id="" required> </textarea> <br> <br>
        
        <h2>Papers Published : </h2> 
        <div class="main-paper">
            <div class="paper">
        <b>Nationaal :</b>
        <input type="number" name="national" id="" required>
        </div>

        <div class="paper">
        <b>International :</b>
        <input type="number" name="international" id="" required> <br> <br>
        </div>
        </div>

        <h2>Contact : </h2>
        <div class="main-contact">
        <div class="contact">
        <b>Email :</b>
        <input type="email" name="email" id="" required>
        </div>

        <div class="contact">
        <b>Mobile Number :</b>
        <input type="number" name="mob" id="" required> <br> <br>
        </div>
        </div>

        <b>Password :</b>
        <input type="string" name="password" id="" class="passwrd" required> <br> <br>

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