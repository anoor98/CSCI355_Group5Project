<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!empty($username) && !empty($password)){
        $host = "mars.cs.qc.cuny.edu";
        $dbUsername = "doen5420"; 
        $dbPassword = "23665420";
        $dbname = "doen5420";

        //createing connection
        $mysqli = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if (mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno(). ')'. mysqli_connect_error());
        } 
	    else {
                 
                 $_SESSION['username'] = $username;
                if (isset($_SESSION["username"])) {
                        $location_redirect = "pgLanding.php";
                } 
                else {
                        echo "failed";
                        $location_redirect = "pglogin.php";
                }

                $sql = "SELECT USERNAME, PASS_WORD FROM LOGINS where USERNAME = '$username' and PASS_WORD = '$password'";
                $result = $mysqli->query($sql);

                // if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        if ($row['USERNAME'] == $username && $row['PASS_WORD'] == $password){
                            // echo "Login Success";
                            header("location: $location_redirect");
                        }else{
                            echo "Failed Login";
                        }
                    }
                // }
            
        }
        
    }else {
	echo " All fields are required";
        die();
    }
?>

