<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/newpg1.css">
    <link rel="stylesheet" href="css/pgLanding.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
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
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">USERS DETAILS</h2>
                        <!-- <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a> -->
                    </div>
                    <?php
                    // Include config file
                    require_once "connectDb.php";
                    
                    // select query 
                    $sql = "SELECT * FROM LOGINS WHERE LOGIN_TYPE = 'Student'";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        
                                        echo "<th>USERNAME</th>";
                                        echo "<th>PASSWORD</th>";
                                        echo "<th>LOGIN TYPE</th>";
                                        echo "<th>FORM STATUS</th>";
                                        echo "<th>ID</th>";
                                        echo "<th>VIEW FORM</th>";
                                    

                                        
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch_assoc()){
                                    echo "<tr>;
                                        <td>" .$row['USERNAME']. "</td>
                                        <td>" .$row['PASS_WORD']. "</td>
                                        <td>" .$row['LOGIN_TYPE']. "</td>
                                        <td>" .$row['FORM_STATUS']. "</td>;
                                        <td>" .$row['EMPLID']. "</td>;
                                        <td><a href='facultyViewForm.php?EMPLID=$row[EMPLID]'>View Form</td>;
                                    </tr>";
                                } //title='Delete Record' data-toggle='tooltip'><span class='fa fa-trash'></span></a>
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            $result->free();
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    
                    
                    $mysqli->close();
                    ?>
                </div>
            </div>        
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>