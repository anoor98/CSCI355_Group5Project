<?php
if (isset($_POST['login'])){
    require 'connectDb.php';

    $username = $_POST['username'];
    $password = $_POST["password"];

    if( empty($username) || empty($password)){
        header('Location: pglogin.php?error=emptyfields');
        exit();
    }
    else{
        $sql = "SELECT * FROM LOGINS where USERNAME = '$username' and PASS_WORD = '$password'";
        $result = $mysqli->query($sql);

        while($row = $result->fetch_assoc()){
            if ($row['USERNAME'] == $username && $row['PASS_WORD'] == $password){
                session_start();
                $_SESSION['login_type'] = $row['LOGIN_TYPE'];
                $_SESSION['username'] = $username;
                
                header("Location: pgLanding.php?login=success");
                exit();
            }else{
                header("Location: pglogin.php?error=wrongsignin");
                exit();
            }
        }
    }
}
else{
    header("Location: pglogin.php");
    exit();
}

?>