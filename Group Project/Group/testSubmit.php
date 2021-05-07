<?php
if (isset($_POST['submit'])){
        session_start();
        require 'connectDb.php';

        $fromm1 = $_POST['fromm1'];
        $fromy1 = $_POST['fromy1'];
        $tom1 = $_POST['tom1'];
        $toy1 = $_POST['toy1'];
        $add = $_POST['addy-1'];
        $sql = "INSERT INTO  TEST(_FROMM1, _FROMY1, _TOM1, _TOY1, ADDY1) VALUES('$fromm1','$fromy1','$tom1','$toy1','$add')";


        $mysqli->query($sql);
        echo "hi";
        echo $username;
        echo $_SESSION['username'];
}
?>