<?php
    /*
    Pg 1 variabls
    */
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
    /*
    Pg 2 variables
    */
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
    /*
    pg 3 variables
    */
    $county = $_POST["county"];
    $sem_season = $_POST["season"];
    $sem_num = $_POST["year"];
    $day = $_POST["day"];
    $month = $_POST["Month"];
    $year = $_POST["year"];
    $notary = $_POST["stamp"];


    /* 
    Insert Statements here on submit button
    */
    $InsertForm = "INSERT INTO PAGES VALUES (
        /*pg1*/
        $name,
        $emplid,
        $fdate,
        $tdate,
        $u18,
        $u23,
        $freshman,
        $transfer,
        $seek,
        $ace,
        $nonD,
        $ReE,
        $reDate,
        $DATE,
        /*pg2*/
        $lname, 
        $fname,
        $mname, 
        $DOBd,
        $phone,
        $is_cit,
        $alien,
        $curr_add,
        $par_add,
        $leg_gaurd,
        $source_o_supp,
        $tax_return,
        $fed_tax_return,
        $fin_aid,
        $benefits,
        $live_in_ny,
        $uncertain,
        $esign,
        /*pg3*/
        $county,
        $sem_season,
        $sem_num,
        $day,
        $month,
        $year,
        $notary
    ) ";

    $InsertOPT = "INSERT INTO OPT_ADDRESSES2 (

    )";
?>