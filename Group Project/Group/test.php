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
		 
		
			<form action="testSubmit.php" method="POST">
		
                <!--Office Checkboxes/Header-->
                <div class = options>
			<label>
				<b>Immigration Status:</b> These items will determine if you are in an eligible immigration status for consideration of the lower tuition rate:
			</label>
                                                       </div>
			<!--Immigration Status Options-->
			<div class="ISOptions">
			<label>
				<input name="immigrationStatus" type="radio" id="ImmigrationOption" value="Permanent residents">
				Permanent residents must submit their Alien Registration Card (green card) or passport and I-94 Card with I-551 stamp.<br>
			</label>
			<br>
			<label>
				<input name="immigrationStatus" type="radio" id="ImmigrationOption" value="Immigrant aliens pending">
				Immigrant aliens pending permanent residency status and non-immigrant aliens must submit their passport and I-94 Card.<br>
			</label>
			<br>
			<label>
				<input name="immigrationStatus" type="radio" id="ImmigrationOption" value="U.S. citizen">
				Proof of U.S. citizenship—U.S. passport, birth certificate, or naturalization papers.<br>
			</label>
			<br>
			<label>
				<input name="immigrationStatus" type="radio" id="ImmigrationOption" value="Refugee/Asylum Granted">
				“Refugee/Asylum Granted” stamped on passport or I-94 Card.<br>
			</label>
			<br>
			<label>
				<input name="immigrationStatus" type="radio" id="ImmigrationOption" value="Non-immigrant alien">
				Non-immigrant alien with one of the following Visas: A-1, E-1, E-2, F-1, G-1, G-2, G-3, G-4, H-1, H-4 (families of H-1), I, J, K, L, N, R.<br>
			</label><br><br></div>
                <button name="submit"  type="submit" class="btn">Submit</button>
            </div>
            </form>
            
    </div>
</body>