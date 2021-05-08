<?php
session_start();
if (isset($_POST['submit'])){
        
        require 'connectDb.php';

        $name = $_POST["Name"];
        $emplid = $_POST["Emplid"];
        $immigrationStatus = $_POST["immigrationStatus"];
        $u18 = $_POST["under18"];
        $u23 = $_POST["under24"];
        // $studentType = $_POST["studentType"];
        // $semester = $_POST["semester"];
        // $requestDate = $_POST["requestby"];
        // $DATE = $_POST["date"];

        $lname = $_POST["lastName"];
        $fname = $_POST["firstName"];
        $mname = $_POST["mi"];
        $emplid2 = $_POST["Emplid2"];
        $DOB = $_POST["dob"];
        $phone = $_POST["phone"];
        $citizen= $_POST["citizen"];
        $alien = $_POST["alien"];
        $currentAdd = $_POST["currentAdd"];

        $fromm1 = $_POST['fromm1'];
        $fromy1 = $_POST['fromy1'];
        $tom1 = $_POST['tom1'];
        $toy1 = $_POST['toy1'];
        $add1 = $_POST['add1'];
        $fromm2 = $_POST['fromm2'];
        $fromy2 = $_POST['fromy2'];
        $tom2 = $_POST['tom2'];
        $toy2 = $_POST['toy2'];
        $add2 = $_POST['add2'];
        $fromm3 = $_POST['fromm3'];
        $fromy3 = $_POST['fromy3'];
        $tom3 = $_POST['tom3'];
        $toy3 = $_POST['toy3'];
        $add3 = $_POST['add3'];

        $parentsAdd = $_POST["parentsAdd"];
        $u182 = $_POST["under182"];
        $guardian = $_POST["gaurdian"];
        $naa = $_POST["naa"];

        $source_o_supp = $_POST["source"];
        $residentIncome = $_POST["resident-income"];
        $federalIncome = $_POST["federal-income"];
        $fin_aid = $_POST["apply"];
        $benefits = $_POST["benefits"];
        $live_in_ny = $_POST["intend"];
        $uncertain = $_POST["uncertain"];
        $esignDate = $_POST["esignDate"];
        $esign = $_POST["signature"];

        $sql = "INSERT INTO  PAGES(_NAME_, 
                                        EMPLID, 
                                        IMMIGRATION_STATUS, 
                                        UNDER_18, 
                                        UNDER_23,
                                        -- STUDENT_TYPE,
                                        -- SEMESTER, 	
                                        -- REQUESTED_BY,
                                        -- _DATE_,	
                                        LAST_NAME, 	
                                        FIRST_NAME,	
                                        MIDDLE_INITIAL,
                                        EMPLID2,
                                        DOB,		
                                        PHONE_NUMBER,
                                        IS_CITIZEN, 	
                                        ALIEN, 		
                                        CURR_ADDRESS,
                                        _FROMM1, 		
                                        _FROMY1, 		
                                        _TOM1, 			
                                        _TOY1, 			
                                        ADDY1,			
                                        _FROMM2, 		
                                        _FROMY2, 		
                                        _TOM2, 			
                                        _TOY2, 			
                                        ADDY2, 			
                                        _FROMM3, 		
                                        _FROMY3, 		
                                        _TOM3, 			
                                        _TOY3, 			
                                        ADDY3, 			
                                        PARENTS_ADD, 	
                                        LEGAL_GAURD_U18, 
                                        IF_LEGAL_GAURD_YES,
                                        NameAAddress,
                                        SOURCE_OF_SUPPORT,
                                        TAX_RETURN12, 	
                                        FED_TAX12, 		
                                        FIN_AID, 		
                                        BENEFITS ,		
                                        LIVE_IN_NY, 		
                                        UNCERTAIN, 		
                                        ESIGN_DATE,		
                                        ESIGN
                                        ) VALUES (
                                                        '$name',
                                                        '$emplid',
                                                        '$immigrationStatus',
                                                        '$u18',
                                                        '$u23',
                                                        -- '$studentType',
                                                        -- '$semester',
                                                        -- '$requestDate',
                                                        -- '$DATE',
                                                        '$lname',
                                                        '$fname',
                                                        '$mname',
                                                        '$emplid2',
                                                        '$DOB',
                                                        '$phone',
                                                        '$citizen',
                                                        '$alien',
                                                        '$currentAdd',
                                                        '$fromm1',
                                                        '$fromy1',
                                                        '$tom1',
                                                        '$toy1',
                                                        '$add1',
                                                        '$fromm2',
                                                        '$fromy2',
                                                        '$tom2',
                                                        '$toy2',
                                                        '$add2',
                                                        '$fromm3',
                                                        '$fromy3',
                                                        '$tom3',
                                                        '$toy3',
                                                        '$add3',
                                                        '$parentsAdd',
                                                        '$u182',
                                                        '$guardian',
                                                        '$naa',
                                                        '$source_o_supp',
                                                        '$residentIncome',
                                                        '$federalIncome',
                                                        '$fin_aid',
                                                        '$benefits',
                                                        '$live_in_ny',
                                                        '$uncertain',
                                                        '$esignDate',
                                                        '$esign'
                                                        )";                
        $mysqli->query($sql);
        header("Location: formComplete.php");
        exit();
}
else{
    header("Location: form.php");
    exit();
}
?>