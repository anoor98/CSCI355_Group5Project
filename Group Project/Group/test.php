<?php
session_start();
echo $_SESSION['username'] ?? 'empty';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Residency Form</title>
	<link rel="stylesheet" href="css/newpg1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<div class="page1">
		 
		
			<form action="formSubmit.php" method="POST">
		
                <!--Office Checkboxes/Header-->

                <div >
                    <h1 style=text-align:center>  Verification of Status for Tuition Determination</h1>
                </div>
                
                        <!--Student Info-->
                <div class="nav justify-content-center">

                        Name: <input name="Name" type='text' style='border:none;border-bottom:black solid 1px'>
                        EMPLID<input name="id" type='test' style='border:none;border-bottom:black solid 1px' >
                
                </div>
                <div class="wthree-field">
                <button name="submit"  type="submit" class="btn">Submit</button>
            </div>
            </form>
            
    </div>
</body>