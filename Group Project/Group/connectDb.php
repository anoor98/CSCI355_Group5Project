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
?>