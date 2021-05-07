<?php
session_start();
require "connectDb.php";

$EMPLID = $_GET['EMPLID'];
if(isset($EMPLID) && !empty($EMPLID)){
    // Prepare a delete statement
    $sql = "DELETE FROM LOGINS WHERE EMPLID = '$EMPLID'";
    $result = $mysqli->query($sql);
    // $data = $mysqli_query($mysqli,$sql);
    if($result){
    // Attempt to execute the prepared statement
        header("location: adminTable.php");
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
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-3">Delete Record</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Are you sure you want to delete this employee record?</p>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="adminTable.php" class="btn btn-secondary ml-2">No</a>
                            </p>
                        </div>
                      <?php
                        
                    ?>  
                    </form>
                    
                </div>
            </div>        
        </div>
    </div>
</body>
</html> -->