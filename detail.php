<?php
require_once("./Employee.php");
require_once("./Company.php");

$gces = new Company;
$gces->name = "Gandaki College Of Engineering And Science";
$gces->address = "Lamachour";
array_push($gces->emlpoyees, new employee("ram","pokhara"));
array_push($gces->emlpoyees, new employee("Subi","lamachour"));
array_push($gces->emlpoyees, new employee("Sujata","Masbar"));

?>
<!DOCTYPE html>
<html>
<head>
	<title>table</title>
</head>
<body>
<table border="1px">
	<tr>
		<th>Name</th>
		<th>Address</th>
	</tr>
	<tr>
		<?php
		foreach ($gces->emlpoyees as $employee) {
			?>
			<tr>
				<td><?=$employee->name?></td>
				<td><?=$employee->address?></td>
			</tr>
	<?php	}?>
	</tr>
</body>
</html>