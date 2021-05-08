<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Student Residency Form</title>
	<link rel="stylesheet" href="css/newpg1.css">
	<link rel="stylesheet" href="css/pgLanding.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- navbar -->

	<div class="topnav" id="myTopnav">
		<a href="pgLanding.php" class="">Home</a>
		<?php
          if (isset($_SESSION['login_type'])){
            if($_SESSION['login_type'] == 'Student'){
            echo "<a href='form.php'>Fill Form</a>";
            }
            
          }
          if (isset($_SESSION['login_type'])){
            
            if ($_SESSION['login_type'] == 'Bursar'){
              echo "<a href='facultyView.php'>Form Approvals</a>";
            }
        
          }
          if (isset($_SESSION['login_type'])){

            if ($_SESSION['login_type'] =='Admin'){
              echo "<a href='adminTable.php'>Database</a>";
            }
          }
        
        ?>
		<a href="logout.php">Logout</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
		</a>
	</div>
	<div class="list container nav justify-content-center">
		<div class="row heading nav-justified">

			<div class="nav-item nav-link col-md-4 col-sm-4">
				<img src="images/logo.jpeg" alt="logo" width="100%" height="100%">
			</div>

			<div class="nav-item nav-link col-md-4 col-sm-4 ">

				<b>Registrar's Office<br>
					Jefferson Hall, 1st floor<br>
					718-997-4400<br></b>
			</div>

			<div class="nav-item nav-link col-md-4 col-sm-4 ">

				<b>Admissions Office<br>
					Jefferson Hall, 1st floor<br>
					Freshman: 718-997-5600<br>
					Transfers: 718-997-5604<br></b>
			</div>
		</div>
	</div>
</head>

<body>
	<div class="page1">


		<form action="formSubmit.php" method="POST">



			<div>
				<h1 style="text-align:center;"> Verification of Status for Tuition Determination</h1>
			</div>


			<div class="nav justify-content-center">

				Name: <input required name="Name" type="text" style="border:none;border-bottom:black solid 1px;">
				Student I.D. No.<input required maxlength="8" name="Emplid" type="text" style="border:none;border-bottom:black solid 1px;">

			</div>



			<p>
				<b>You will be billed at the higher (nonresident) tuition rate based on the information included on your application for admission.</b> In order to be
				considered for the lower (resident) tuition rate, you will need to provide proof of U.S. citizenship (or permanent residency or non-immigrant alien
				status) <b>and</b> proof that you have lived in New York State for a consecutive period of one year prior to the first day of classes of the semester for which
				you are applying.
			</p>
			<p>
				You must bring in to the Admissions or Registrar’s Office all <b>original</b> documents of the items checked below <b>before</b> you register for classes. Please
				note that <b>copies are NOT acceptable.</b> Any changes made to your tuition status after the semester in question will <b>not</b> be retroactive.
			</p>


			<div class=options>
				<label>
					<b>Immigration Status:</b> These items will determine if you are in an eligible immigration status for consideration of the lower tuition rate:
				</label>
			</div>

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
				</label><br><br>
			</div>


			<label>
				<b>Residency: </b>Please complete the enclosed City University Residency Form and submit it with the documents requested below. These items will
				prove that you have been living in New York State for a consecutive period of one full year prior to the first day of classes of the semester for which
				you are applying. The documents must cover the period from 2020 to 2021:
			</label>
			<p>
				From the list of items “<b>a</b>” through “<b>q</b>” indicated below, you must submit:<br>
				<b>One</b> item from items “<b>a</b>” through “<b>d</b>” <b>OR</b><br>
				<b>Two</b> items from items “<b>e</b>” through “<b>q</b>” – <b>Note:</b> All items must document proof of residency for the 12-month period immediately preceding
				the first day of classes. Documents covering the first and last months of the previous 12-month period are acceptable, provided that they show
				you are living at the same address.<br>
				Items “<b>a</b>” through “<b>q</b>” are as follows:
			</p>

			<ol type="a">
				<li>Lease, deed, or rent registration form (used for rent-stabilized apartments) signed by the landlord (which is either a public or private agency) and the student or a parent of the student with the same surname. </li>
				<li>Budget/benefit letter from New York City Public Assistance with the student’s New York address covering the 12-month period immediately preceding the first day of classes and including the student’s name. </li>
				<li>Benefit letter from Social Security with the student’s New York address covering the 12-month period immediately preceding the first day of classes and including the student’s name. </li>
				<li>Copies of the most recent complete Federal or New York State tax returns with the preprinted address label and the corresponding W-2 form. </li>
				<li>Copies of the most recent complete Federal or New York State tax returns without the preprinted address label and the corresponding W-2 form. Responses to Federal form 4506 and New York State form 4506 requesting Federal and State tax information are acceptable if the Federal and State governments acknowledge that the party in question has, in fact, filed a tax return from the address noted. </li>
				<li>A valid New York State driver’s license showing the date of issuance at least one year prior to the first day of classes. </li>
				<li>Homeowner’s or renter’s insurance policy. </li>
				<li>Automobile registration. </li>
				<li>Automobile insurance certificate. </li>
				<li>New York State “non-driver license,” which is issued to non-drivers (for identification purposes) by the Department of Motor Vehicles or another official City, State, or Federal agency. </li>
				<li>Voter registration certificate or card. </li>
				<li>Telephone or utility bills or payments for services, such as cable TV, covering a period of up to 12 months. </li>
				<li>Monthly bank or credit card statements covering a period of up to 12 months (dollar amounts may be blocked out). </li>
				<li>Armed Forces identification card DD Form 2A (green). </li>
				<li>Proof verifying service as a juror in New York State. </li>
				<li>Apartment lease signed by the landlord (who is an individual and is not a public or private agency) and the student. If the student’s name does <b>not</b> appear on the lease, an “Alternate Lease Statement” may be substituted. The “Alternate Lease Statement” must be completed by both the person whose name appears on the lease/contract and the student and then notarized. The person whose name appears on the lease/ contract must also submit proof (i.e., lease, telephone, utility, or similar type bills, as noted above) of residency at his/her current address for the previous 12 months. </li>
				<li>Postmarked mail addressed to a student at a New York address more than 12 months immediately preceding the first day of classes (mail addressed to a P.O Box is not acceptable). </li>
			</ol>
			<p><b>Note:</b> In addition to the items indicated above, the college may—at its discretion—consider additional documentation from a student if it believes that an accurate residency determination may be rendered through the additional documentation. </p>


			<label>
				<input name="under18" type="checkbox" id="under18" value="under 18">
				<b>Students Under the Age of 18:</b> If you have a legal guardian other than your parents, or your parents are separated or divorced, a copy of the legal guardianship papers or court order indicating legal custodianship must be submitted.<br>
			</label>
			<label>
				<input name="under24" type="checkbox" id="under24" value="under 24">
				<b>Students Under the Age of 24:</b> A student under the age of 24 must submit sufficient evidence to determine whether the student is a resident of the parents’ state, or New York.
			</label>


			<!-- <div class="office">
				<div class="row1">
					<label>
						<input name="studentType" type="radio" id="student-type" value="freshman">
						Freshman
					</label>
					<label>
						<input name="studentType" type="radio" id="student-type" value="transfer">
						Transfer
					</label>
					<label>
						<input name="studentType" type="radio" id="student-type" value="seek">
						SEEK
					</label>
					<label>
						<input name="studentType" type="radio" id="student-type" value="ace/leap">
						ACE/LEAP
					</label>
					<label>
						<input name="studentType" type="radio" id="student-type" value="non-degree">
						Non-Degree
					</label>
					<label>
						<input name="studentType" type="radio" id="student-type" value="reenter">
						Reenter
					</label>


					<label for="semester-id"> Semester:
						<input name="semester" type='text' style='border:none;border-bottom:black solid 1px'>
					</label>
				</div>




				<div class="row2">
					Requested By:
					<input name="requestby" type="text" style="border:none;border-bottom:black solid 1px">

					Date:
					<input name="date" type="text" style="border:none;border-bottom:black solid 1px">

				</div>
			</div> -->


			<br>
			<div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 text-center">
			
				<div class="col-lg-4 col-12">
				<b>1.</b>
					<label for="last"> Last Name:
						<input required name="lastName" type="text">
					</label>
				</div>

				<div class="col-lg-4 col-12">
					<label for="first">First Name:
						<input required name="firstName" type="text">
					</label>
				</div>

				<div class="col-lg-4 col-12">
					<label for="middle">Middle Initial:
						<input maxlength="1" name="mi" type="text">
					</label>
				</div>

				<div class="col-lg-4 col-12">
					<label for="id">Student Id No.:
						<input required maxlength="8" name="Emplid2" type="text">
					</label>
				</div>

				<div class="col-lg-4 col-12">
					<label for="dob">Date of Birth:
						<input required maxlength="10" name="dob" type="text" placeholder="06/18/2000">
					</label>
				</div>

				<div class="col-lg-4 col-12">
					<label for="phone">Phone Number:
						<input required maxlength="10" name="phone" type="text" placeholder="7186284678">
					</label>
				</div>
			</div>

			<div class="radios row  row-cols-md-2 row-cols-lg-2">
				<div class="col-xl-4 col-lg-6 col-md-6">
					<label for="citizen"><b>2.</b> Are you a U.S. citizen?</label>
					<input name="citizen" type="radio" id="radio-1" value="yes"> Yes
					<input name="citizen" type="radio" id="radio-2" value="no"> No
				</div>

				<div class="col-xl-4 col-lg-6 col-md-6">
					<label for="alien">Are you a permanent resident alien?</label>
					<input type="radio" id="radio-1" name="alien" value="yes"> Yes
					<input type="radio" id="radio-2" name="alien" value="no"> No
				</div>
			</div>

			<div>
				<label for="address"><b>3.</b> Current Address:</label>
				<input required name="currentAdd" type="text">
			</div>
			
			<div>
				<label for="list"><b>4.</b> List below all your addresses, including temporary addresses and summer addresses during the past 12 months, starting from your current address and working backwards</label>
				<br>
			</div>
			

			<table class="table">
				<thead>
					<tr class="text-center">
						<th>From</th>
						<th>To</th>
						<th>Complete Address</th>
					</tr>
				</thead>
				<tbody>
					<tr class="text-center">
						<td>
							<select name="fromm1">
								<option value=""></option>
								<option value="January">Jan.</option>
								<option value="February">Feb.</option>
								<option value="March">Mar.</option>
								<option value="April">Apr.</option>
								<option value="May">May</option>
								<option value="June">June</option>
								<option value="July">July</option>
								<option value="August">Aug.</option>
								<option value="September">Sep.</option>
								<option value="October">Oct.</option>
								<option value="November">Nov.</option>
								<option value="December">Dec.</option>
							</select>
							<select name="fromy1">
								<option value=""></option>
								<option value="2021">2021</option>
								<option value="2020">2020</option>
							</select>
						</td>
						<td>
							<select name="tom1">
								<option value=""></option>
								<option value="January">Jan.</option>
								<option value="February">Feb.</option>
								<option value="March">Mar.</option>
								<option value="April">Apr.</option>
								<option value="May">May</option>
								<option value="June">June</option>
								<option value="July">July</option>
								<option value="August">Aug.</option>
								<option value="September">Sep.</option>
								<option value="October">Oct.</option>
								<option value="November">Nov.</option>
								<option value="December">Dec.</option>
							</select>
							<select name="toy1">
								<option value=""></option>
								<option value="2021">2021</option>
								<option value="2020">2020</option>
							</select>
						</td>
						<td><input type="text" class="addy" name="add1" placeholder="Street City State Zip"></td>
					</tr>

					<tr class="text-center">
						<td>
							<select name="fromm2">
								<option value=""></option>
								<option value="January">Jan.</option>
								<option value="February">Feb.</option>
								<option value="March">Mar.</option>
								<option value="April">Apr.</option>
								<option value="May">May</option>
								<option value="June">June</option>
								<option value="July">July</option>
								<option value="August">Aug.</option>
								<option value="September">Sep.</option>
								<option value="October">Oct.</option>
								<option value="November">Nov.</option>
								<option value="December">Dec.</option>
							</select>
							<select name="fromy2">
								<option value=""></option>
								<option value="2021">2021</option>
								<option value="2020">2020</option>
							</select>
						</td>
						<td>
							<select name="tom2">
								<option value=""></option>
								<option value="January">Jan.</option>
								<option value="February">Feb.</option>
								<option value="March">Mar.</option>
								<option value="April">Apr.</option>
								<option value="May">May</option>
								<option value="June">June</option>
								<option value="July">July</option>
								<option value="August">Aug.</option>
								<option value="September">Sep.</option>
								<option value="October">Oct.</option>
								<option value="November">Nov.</option>
								<option value="December">Dec.</option>
							</select>
							<select name="toy2">
								<option value=""></option>
								<option value="2021">2021</option>
								<option value="2020">2020</option>
							</select>
						</td>
						<td><input type="text" class="addy" name="add2" placeholder="Street City State Zip"></td>
					</tr>
					<tr class="text-center">
						<td>
							<select name="fromm3">
								<option value=""></option>
								<option value="January">Jan.</option>
								<option value="February">Feb.</option>
								<option value="March">Mar.</option>
								<option value="April">Apr.</option>
								<option value="May">May</option>
								<option value="June">June</option>
								<option value="July">July</option>
								<option value="August">Aug.</option>
								<option value="September">Sep.</option>
								<option value="October">Oct.</option>
								<option value="November">Nov.</option>
								<option value="December">Dec.</option>
							</select>
							<select name="fromy3">
								<option value=""></option>
								<option value="2021">2021</option>
								<option value="2020">2020</option>
							</select>
						</td>
						<td>
							<select name="tom3">
								<option value=""></option>
								<option value="January">Jan.</option>
								<option value="February">Feb.</option>
								<option value="March">Mar.</option>
								<option value="April">Apr.</option>
								<option value="May">May</option>
								<option value="June">June</option>
								<option value="July">July</option>
								<option value="August">Aug.</option>
								<option value="September">Sep.</option>
								<option value="October">Oct.</option>
								<option value="November">Nov.</option>
								<option value="December">Dec.</option>
							</select>
							<select name="toy3">
								<option value=""></option>
								<option value="2021">2021</option>
								<option value="2020">2020</option>
							</select>
						</td>
						<td><input type="text" class="addy" name="add3" placeholder="Street City State Zip"></td>
					</tr>

				</tbody>
			</table>

			<div>
				<label for="parents"><b>5.</b> Parents' permanent address: </label>
				<input type="text" id="parents" name="parentsAdd"></input>
			</div>

			<div class="radios">
				<label for="age"><b>6.</b> Are you under the age of 18?</label>
				<input type="radio" id="radio-1" name="under182" value="yes"> Yes
				<input type="radio" id="radio-2" name="under182" value="no"> No
			</div>

			<div class="radios">
				<label for="guardian"><b></b><b></b> yes, does anyone other than your parents serve as your legal guardian?</label>
				<input type="radio" id="radio-1" name="guardian" value="yes"> Yes
				<input type="radio" id="radio-2" name="guardian" value="no"> No
			</div>

			<div>
				<label for="naa"><b></b><b></b>If yes, what is the name and address?</label>
				<input type="text" id="source" name="naa"></input>
			</div>
			
			<div>
				<label for="source"><b>7.</b> What is the source of your support?</label>
				<input type="text" id="source" name="source"></input>
			</div>
			
			<div class="radios">
				<label for="resident-income"><b>8.</b> Did you file a New York City/State resident income tax return during the past 12 months?</label>
				<input type="radio" id="radio-1" name="resident-income" value="yes"> Yes
				<input type="radio" id="radio-2" name="resident-income" value="no"> No
			</div>

			<div class="radios">
				<label for="federal-income"><b>9.</b> Did you file a Federal income tax return during the past 12 months?</label>
				<input type="radio" id="radio-1" name="federal-income" value="yes"> Yes
				<input type="radio" id="radio-2" name="federal-income" value="no"> No
			</div>

			<div class="radios">
				<label for="apply"><b>10.</b> Have you applied for any financial aid, scholarshops, or other benefits provided under the laws of the State of New York or the United States?</label>
				<input type="radio" id="radio-1" name="apply" value="yes"> Yes
				<input type="radio" id="radio-2" name="apply" value="no"> No
			</div>

			<div>
				<label for="benefits"><b></b><b></b>If yes, specify and indicate what benefits you are receiving.</label>
				<input type="text" id="benefits" name="benefits"></input>
			</div>

			<div class="radios">
				<label for="intend"><b>11.</b> Do you presently intend to permanently live in New York City or New York State?</label>
				<input type="radio" id="radio-1" name="intend" value="yes"> Yes
				<input type="radio" id="radio-2" name="intend" value="no"> No
			</div>


			<div>
				<label for="uncertain"><b></b><b></b>If uncertain, please explain:</label>
				<input type="text" id="uncertain" name="uncertain"></input>
			</div>


			<div>
				<p>I certify that I am not withholding any documetation relating to my immigration status that I intend to remain in New York State permanently</p>
				<p>I understand that if I provide false information or withhold relevant information in order to obtain residency status, The City University may revoke its determination of in-state residency, and that I will owe non-resident tuition to the University for each semester or session that I have attended under these circumstances. I also understand that I may be subject to disciplinary action.</p>
				<p>The above statements are true and correct to the best of my knowledge.</p>
			</div>

			<div class="nav justify-content-center">
				<label for="date">Date:</label>
				<input required maxlength="10" type="text" name="esignDate" placeholder="06/18/2000">

				<label for="signature">Student Signature:</label>
				<input required type="text" name="signature">
			</div>


			<div>
				<p><u>PLEASE NOTE: YOU HAVE A RIGHT TO APPEAL A NON-NEW YORK CITY/STATE RESIDENCY DETERMINATION</u></p>
				<p>If you wish to appeal, you must notify the Registrar's Office (or other designated college appeal office) in writing within ten days of being notified that you have been determined to be a non-resident. At that time you may submit a statement to the Registrar (or other designated official) indicating why you disagree with the College's decision. The Registrar (or other designated official) will submit the City University Residency Form, copies of all documentation provided by you and any statement made by you, along with the College's determination, to the University's Office of the Vice Chancellor for Legal Affairs and General Counsel</p>
			</div>
			<div class="Submit nav justify-content-center">
					<button name="submit" type="submit" class="btn1">Submit</button>
				</div>

				<div>
					<p style=text-align:center ;><b>Queens College, CUNY | 65-30 Kissena Boulevard | Flushing, New York 11367-1597</b></p>
				</div>
	</div>
	</form>
	</div>
	<script src="index.js"></script>

</body>
</html>