<?php
if (isset($_POST['submit'])){
        session_start();
        require 'connectDb.php';

        $name = $_POST["Name"];
        $emplid = $_POST["id"];
        $fdate = $_POST[""];
        $tdate = $_POST[""];
        $u18 = $_POST["age"];
        $u23 = $_POST["age"];
        $freshman = $_POST["type"];
        $transfer = $_POST["type"];
        $seek = $_POST["type"];
        $ace = $_POST["type"];
        $nonD = $_POST["type"];
        $ReE = $_POST["type"];
        $reDate = $_POST["requestby"];
        $DATE = $_POST["date"];

        $lname = $_POST["ln"];
        $fname = $_POST["fn"];
        $mname = $_POST["mi"];
        $DOBd = $_POST["birth"];
        $phone = $_POST["phone"];
        $is_cit = $_POST["citizen"];
        $alien = $_POST["alien"];
        $curr_add = $_POST["address"];
        $par_add = $_POST["parents"];
        $leg_gaurd = $_POST["gaurdian"];
        $source_o_supp = $_POST["source"];
        $tax_return = $_POST["resident-income"];
        $fed_tax_return = $_POST["federal-income"];
        $fin_aid = $_POST["apply"];
        $benefits = $_POST["benefits"];
        $live_in_ny = $_POST["intend"];
        $uncertain = $_POST["uncertain"];
        $esign = $_POST["signature"];

        $county = $_POST["county"];
        $sem_season = $_POST["season"];
        $sem_num = $_POST["year"];
        $day = $_POST["day"];
        $month = $_POST["Month"];
        $year = $_POST["year"];
        $notary = $_POST["stamp"];

        $sql = "INSERT INTO  TEST(NAME, EMPLID) VALUES ('$Name','$id') ";                
        $mysqli->query($sql);
        echo "hi";
        echo $username;
        echo $_SESSION['username'];
}
?>