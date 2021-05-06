<?php
function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    session_start();
    // $username = $_POST["username"];
    // $password = $_POST["password"];
    if(is_post_request()){
        $username = $_POST["username"] ?? '';
        $password = $_POST["password"] ?? '';

        $_SESSION['username'] = $username;

        // header("location:pgLanding.php");
     

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
                 
                
                $username = $_SESSION['username'];
                $username = isset($_SESSION["username"]) ? $_SESSION['username'] : '';

                if (isset($_SESSION["username"])) {
                        $location_redirect = "pgLanding.php";
                } 
                else {
                        echo "failed";
                        $location_redirect = "pglogin.php";
                        header("location: $location_redirect");
                }

                $sql = "SELECT USERNAME, PASS_WORD FROM LOGINS where USERNAME = '$username' and PASS_WORD = '$password'";
                $result = $mysqli->query($sql);


                    while($row = $result->fetch_assoc()){
                        if ($row['USERNAME'] == $username && $row['PASS_WORD'] == $password){
                            header("location: $location_redirect");
                        }else{
                            echo "Failed Login";
                        }
                    }

            
        }
        
    }else {
	echo " All fields are required";
        die();
    }
}
?>


