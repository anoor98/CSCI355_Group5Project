<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
        echo $password; 
        echo $username;
    if (!empty($username) && !empty($password)){
        $host = "mars.cs.qc.cuny.edu";
        $dbUsername = "doen5420"; 
        $dbPassword = "23665420";
        $dbname = "doen5420";

        //createing connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        echo "test";
        if (mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno(). ')'. mysqli_connect_error());
        } 
	else {
            //$result = mysql_query("SELECT USERNAME, PASS_WORD FROM LOGINS where USERNAME =  '$username' and PASS_WORD = '$password'")
              //          or die("Failed to query db ".mysql_error());
        $sql = "SELECT USERNAME, PASS_WORD FROM LOGINS where USERNAME =  '$username' and PASS_WORD = '$password'";
        $result	= $mysqli->query($sql);
        while($row = $results->fetch_assoc());
            if ($row['USERNAME'] == $username && $row['PASS_WORD'] == $password){
                echo "Login Success";

            }else{
                echo "Failed Login";
            }
	}
    }else {
	echo " All fields are required";
        die();
    }
?>
