<?php
session_start();
require "connectDb.php";

// $EMPLID = $_GET['EMPLID'];
// if(isset($EMPLID) && !empty($EMPLID)){
//     // Prepare a delete statement
//     $sql = "SELECT * FROM PAGES WHERE EMPLID = '$EMPLID'";
//     $result = $mysqli->query($sql);

//     if($result){
//     // Attempt to execute the prepared statement
//         header("location: facultyView.php");
//         exit();
//     } 
//     else{
//         echo "Oops! Something went wrong. Please try again later.";
//     }
    
// }else{
//     // Check existence of id parameter
//     if(empty(trim($_GET["EMPLID"]))){
//         // URL doesn't contain id parameter. Redirect to error page
//         echo "failed";
//         exit();
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/newpg1.css">
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

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                    <a href="facultyView.php"><button class="btn1">Back</button></a>
                        <h2 class="pull-left">USERS DETAILS</h2>
                        <!-- <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a> -->
                    </div>
                    <?php
                    // Include config file
                    // require_once "connectDb.php";
                    $EMPLID = $_GET['EMPLID'];
                    // select query 
                    if(isset($EMPLID) && !empty($EMPLID)){
                    $sql = "SELECT * FROM PAGES WHERE EMPLID = '$EMPLID'";
                    $result = $mysqli->query($sql);
                        if($result){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                    
                                        echo "<th>APPROVE FORM</th>";
                                        echo "<th>REJECT FORM</th>";
                                        echo "<th>NAME</th>";
                                        echo "<th>EMPLID</th>";
                                        echo "<th>IMMIGRATION_STATUS</th>";
                                        echo "<th>FROM_DATE</th>";
                                        echo "<th>TO_DATE</th>";
                                        echo "<th>UNDER_18</th>";
                                        echo "<th>UNDER_23</th>";
                                        echo "<th>STUDENT_TYPE</th>";
                                        echo "<th>SEMESTER</th>";
                                        echo "<th>REQUESTED_BY</th>";
                                        echo "<th>_DATE_</th>";
                                        echo "<th>LAST_NAME</th>";
                                        echo "<th>FIRST_NAME</th>";
                                        echo "<th>MIDDLE_INITIAL</th>";
                                        echo "<th>DOB</th>";
                                        echo "<th>PHONE_NUMBER</th>";
                                        echo "<th>IS_CITIZEN</th>";
                                        echo "<th>ALIEN</th>";
                                        echo "<th>CURR_ADDRESS</th>";
                                        echo "<th>_FROMMY1</th>";
                                        echo "<th>_FROMY1</th>";
                                        echo "<th>_TOM1</th>";
                                        echo "<th>_TOY1</th>";
                                        echo "<th>ADDY1</th>";
                                        echo "<th>FROMM2</th>";
                                        echo "<th>_FROMY2</th>";
                                        echo "<th>_TOM2</th>";
                                        echo "<th>_TOY2</th>";
                                        echo "<th>ADDY2</th>";
                                        echo "<th>_FROMM3</th>";
                                        echo "<th>_FROMY3</th>";
                                        echo "<th>_TOM3</th>";
                                        echo "<th>TOY3</th>";
                                        echo "<th>ADDY3</th>";
                                        echo "<th>PARENTS_ADD</th>";
                                        echo "<th>LEGAL_GAURD_U18</th>";
                                        echo "<th>IF_LEGAL_GAURD_YES</th>";
                                        echo "<th>NameAAddress</th>";
                                        echo "<th>SOURCE_OF_SUPPORT</th>";
                                        echo "<th>TAX_RETURN12</th>";
                                        echo "<th>FED_TAX12</th>";
                                        echo "<th>FIN_AID</th>";
                                        echo "<th>BENEFITS</th>";
                                        echo "<th>LIVE_IN_NY</th>";
                                        echo "<th>UNCERTAIN</th>";
                                        echo "<th>ESIGN_DATE</th>";
                                        echo "<th>ESIGN</th>";

                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        echo "<td><a href='approveForm.php?EMPLID=$row[EMPLID]'>Approve Form</td>";
                                        echo "<td><a href='rejectForm.php?EMPLID=$row[EMPLID]'>reject Form</td>";
                                        echo "<td>" . $row['_NAME_'] . "</td>";
                                        echo "<td>" . $row['EMPLID'] . "</td>";
                                        echo "<td>" . $row['IMMIGRATION_STATUS'] . "</td>";
                                        echo "<td>" . $row['FROM_DATE'] . "</td>";
                                        echo "<td>" . $row['TO_DATE'] . "</td>";
                                        echo "<td>" . $row['UNDER_18'] . "</td>";
                                        echo "<td>" . $row['UNDER_23'] . "</td>";
                                        echo "<td>" . $row['STUDENT_TYPE'] . "</td>";
                                        echo "<td>" . $row['SEMESTER'] . "</td>";
                                        echo "<td>" . $row['REQUESTED_BY'] . "</td>";
                                        echo "<td>" . $row['_DATE_'] . "</td>";
                                        echo "<td>" . $row['LAST_NAME'] . "</td>";
                                        echo "<td>" . $row['FIRST_NAME'] . "</td>";
                                        echo "<td>" . $row['MIDDLE_INITIAL'] . "</td>";
                                        echo "<td>" . $row['DOB'] . "</td>";
                                        echo "<td>" . $row['PHONE_NUMBER'] . "</td>";
                                        echo "<td>" . $row['IS_CITIZEN'] . "</td>";
                                        echo "<td>" . $row['ALIEN'] . "</td>";
                                        echo "<td>" . $row['CURR_ADDRESS'] . "</td>";
                                        echo "<td>" . $row['_FROMMY1'] . "</td>";
                                        echo "<td>" . $row['_FROMY1'] . "</td>";
                                        echo "<td>" . $row['_TOM1'] . "</td>";
                                        echo "<td>" . $row['_TOY1'] . "</td>";
                                        echo "<td>" . $row['ADDY1'] . "</td>";
                                        echo "<td>" . $row['FROMM2'] . "</td>";
                                        echo "<td>" . $row['_FROMY2'] . "</td>";
                                        echo "<td>" . $row['_TOM2'] . "</td>";
                                        echo "<td>" . $row['_TOY2'] . "</td>";
                                        echo "<td>" . $row['ADDY2'] . "</td>";
                                        echo "<td>" . $row['_FROMM3'] . "</td>";
                                        echo "<td>" . $row['_FROMY3'] . "</td>";
                                        echo "<td>" . $row['_TOM3'] . "</td>";
                                        echo "<td>" . $row['TOY3'] . "</td>";
                                        echo "<td>" . $row['ADDY3'] . "</td>";
                                        echo "<td>" . $row['PARENTS_ADD'] . "</td>";
                                        echo "<td>" . $row['LEGAL_GAURD_U18'] . "</td>";
                                        echo "<td>" . $row['IF_LEGAL_GAURD_YES'] . "</td>";
                                        echo "<td>" . $row['NameAAddress'] . "</td>";
                                        echo "<td>" . $row['SOURCE_OF_SUPPORT'] . "</td>";
                                        echo "<td>" . $row['TAX_RETURN12'] . "</td>";
                                        echo "<td>" . $row['FED_TAX12'] . "</td>";
                                        echo "<td>" . $row['FIN_AID'] . "</td>";
                                        echo "<td>" . $row['BENEFITS'] . "</td>";
                                        echo "<td>" . $row['LIVE_IN_NY'] . "</td>";
                                        echo "<td>" . $row['UNCERTAIN'] . "</td>";
                                        echo "<td>" . $row['ESIGN_DATE'] . "</td>";
                                        echo "<td>" . $row['ESIGN'] . "</td>";

                                    
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            $result->free();
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    }else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    
                    
                    $mysqli->close();
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>