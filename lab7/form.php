<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>
	<table border="2">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Date Of Birth</th>
			<th>Gender</th>
			<th>Email</th>
			<th>Security Question</th>
			<th>Security Answer</th>
			<th>Address</th>
			<th>City</th>
			<th>State</th>
			<th>Zip Code</th>
			<th>Phone</th>
		</tr>
		<tr>
			<td>
				<?php
					echo $_POST["fname"];
				?>
			</td>
			<td>
				<?php
					echo $_POST["lname"];
				?>
			</td>
			<td>
				<?php
					echo $_POST["dob"];
				?>
			</td>
			<td>
				<?php
					echo $_POST["gender"];
				?>
			</td>
			<td>
				<?php
					echo $_POST["email"];
				?>
			</td>
			<td>
				<?php
					echo $_POST["question"];
				?>
			</td>
			<td>
				<?php
					echo $_POST["answer"];
				?>
			</td>
			<td>
				<?php
					echo $_POST["address"];
				?>
			</td>
			<td>
				<?php
					echo $_POST["city"];
				?>
			</td>
			<td>
				<?php
					echo $_POST["state"];
				?>
			</td>
			<td>
				<?php
					echo $_POST["zip"];
				?>
			</td>
			<td>
				<?php
					echo $_POST["contact"];
				?>
			</td>
		</tr>
	</table>
</body>
</html>