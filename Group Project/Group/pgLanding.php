<?php
session_start();
echo $_SESSION['username'];
echo $_SESSION['login_type'];
?>
<!DOCTYPE html>
  <html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Welcome</title>

      <!-- google font -->
      <link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/pgLanding.css">
    </head>

    <body>
      <div>
        <!-- navbar -->
        <div class="topnav" id="myTopnav">
          <a href="pgLanding.php" class="active">Home</a>
          <!-- <a href="form.php">Fill Form</a>
          <a href="adminTable.php">Database</a>
          <a href="facultyView.php">Form Approvals</a> -->
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
        <div class="banner">
          <img id="banner" src="images/QcBanner.jpeg" alt="Banner">
        </div>
        
        <div class="welcome">
          <h1>Welcome</h1>
        </div>

        <h1 style="text-align: center;"><?php echo $_SESSION['username'];?></h1>

          
        <div>
        <?php
          if (isset($_SESSION['login_type'])){
            if($_SESSION['login_type'] == 'Student'){
              echo "<a href='form.php'><button class='button button1'>Student: Fill out form</button></a>";
            }
          }
          if (isset($_SESSION['login_type'])){
            if($_SESSION['login_type'] == 'Bursar'){
              echo "<a href='facultyView.php'><button class='button button1'>Bursar: View Forms</button></a>";
            }
            
          }
          if (isset($_SESSION['login_type'])){
            if ($_SESSION['login_type'] == 'Admin'){
              echo "<a href='adminTable.php'><button  class='button button3'>Admin: View database</button></a>";
            }
          }

        ?>
        
        
        
        </div>

        <div class="footer">
          <p><b>Queens College, CUNY | 65-30 Kissena Boulevard | Flushing, New York 11367-1597</b></p>
        </div>

    </div>
    <script src="index.js"></script>
    </body>
  </html>
