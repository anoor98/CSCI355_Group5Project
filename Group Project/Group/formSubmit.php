<?php
session_start();
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
                 
                //  $_SESSION['username'] = $username;
                if (isset($_SESSION["username"])) {
                        $location_redirect = "pgLanding.php";
                } 
                else {
                        echo "failed";
                        $location_redirect = "pglogin.php";
                        header("location: $location_redirect");
                }
                $Name = $_POST["Name"];
                $id =$_POST["id"];

                $sql = "INSERT INTO  TEST(NAME, EMPLID) VALUES ('$Name','$id') ";                
                $mysqli->query($sql);
                echo "hi";
                echo $username;
                echo $_SESSION['username'];


                    // while($row = $result->fetch_assoc()){
                    //     if ($row['USERNAME'] == $username && $row['PASS_WORD'] == $password){
                    //         header("location: $location_redirect");
                    //     }else{
                    //         echo "Failed Login";
                    //     }
                    // }

            
        }

?>