<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">
        <!-- Google fonts -->
        <link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">


</head>
<body>
    <section class="main">
        <div class="layer">
            <div class="content-w3ls">
                <h1>Log in</h1>
                <form action="login.php" method="POST">
                    <div class="field-group">
                        <div class="wthree-field">
                            <input name="username" id="text1" type="text" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="field-group">
                        <div class="wthree-field">
                            <input name="password" id="myInput" type="Password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="wthree-field">
                        <button name="login"  type="submit" class="btn">Get Started</button>
                    </div>
                </form>
               
            </div>
        </div>
    </section>
    <script src="index.js"></script>
    
</body>
</html>

