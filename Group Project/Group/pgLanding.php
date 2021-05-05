<?php
session_start();
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
          <a href="#home" class="active">Home</a>
          <a href="#news">Fill Form</a>
          <a href="#contact">Database</a>
          <a href="#about">Form Approvals</a>
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
          
        <div>
        <button class="button button1">Student: Fill out form</button>
          
        <button class="button button2">Registrar: View forms</button>
        
        <button class="button button3">Admin: View database</button>
        </div>

        <div class="footer">
          <p><b>Queens College, CUNY | 65-30 Kissena Boulevard | Flushing, New York 11367-1597</b></p>
        </div>

    </div>
    <script src="index.js"></script>
    </body>
  </html>
