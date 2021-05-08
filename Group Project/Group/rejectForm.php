<?php
session_start();
require "connectDb.php";

$EMPLID = $_GET['EMPLID'];
if(isset($EMPLID) && !empty($EMPLID)){
    // Prepare a delete statement
    $sql = "UPDATE LOGINS SET FORM_STATUS = 'REJECTED' WHERE EMPLID = '$EMPLID'";
    $result = $mysqli->query($sql);
    // $data = $mysqli_query($mysqli,$sql);
    if($result){
    // Attempt to execute the prepared statement
        header("location: facultyView.php");
        exit();
    } 
    else{
        echo "Oops! Something went wrong. Please try again later.";
    }
    
}else{
    // Check existence of id parameter
    if(empty(trim($_GET["EMPLID"]))){
        // URL doesn't contain id parameter. Redirect to error page
        echo "failed";
        exit();
    }
}
?>