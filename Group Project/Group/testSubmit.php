<?php
if (isset($_POST['submit'])){
        session_start();
        require 'connectDb.php';

        $immigrationStatus = $_POST['immigrationStatus'];
        $sql = "INSERT INTO  TEST(IMMIGRATION) VALUES('$immigrationStatus')";


        $mysqli->query($sql);
        echo "hi";
        echo $username;
        echo $_SESSION['username'];
}
?>