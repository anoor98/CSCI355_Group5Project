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
						<td><select name="fromm1">
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
						</select><select name="fromy1">
							<option value="2021">2021</option>
							<option value="2020">2020</option>
						</select></td>
						<td><select name="tom1">
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
						</select><select name="toy1">
							<option value="2021">2021</option>
							<option value="2020">2020</option>
						</select></td>
						<td><input type="text" class="addy" name="addy-1" placeholder="Street City State Zip"></td>
					</tr>
					
			
					</tr>
					
				</tbody>
		  </table>	
                <button name="submit"  type="submit" class="btn">Submit</button>
            </div>
            </form>
            
    </div>
</body>