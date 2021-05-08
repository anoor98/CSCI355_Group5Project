<?php
session_start();
require 'connectDb.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/newpg1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- navbar -->
    <title>Form Submited</title>
</head>
<body>
<div>
        <!-- navbar -->
        <div class="topnav" id="myTopnav">
          <a href="pgLanding.php" class="">Home</a>
          <?php
          if (isset($_SESSION['login_type'])){
            if($_SESSION['login_type'] == 'Student'){
            echo "<a href='form.php'>Fill Form</a>";
            }
            
          }
          if (isset($_SESSION['login_type'])){
            
            if ($_SESSION['login_type'] == 'Bursar'){
              echo "<a href='facultyView.php'>Form Approvals</a>";
            }
        
          }
          if (isset($_SESSION['login_type'])){

            if ($_SESSION['login_type'] =='Admin'){
              echo "<a href='adminTable.php'>Database</a>";
            }
          }
        
        ?>
          <a href="logout.php">Logout</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
        </div>
        <!-- navbar end -->
        <br>
        <br>
        <br>
        <div class="welcome">
          <h1 style="text-align: center;">You're form has ben submitted</h1>
        </div>

        <h1 style="text-align: center;"><?php echo $_SESSION['username'];?></h1>

        <a href="pgLanding.php"><button class="btn1">Home</button></a>

          
    </div>
    <script src="index.js"></script>
</body>
</html>
