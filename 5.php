<?php
$schools = array("GBS","SOS","Amarsingh");
sort($schools);

$clength = count($schools);
for($s = 0; $s < $clength; $s++) {
	echo $schools[$s];
	echo "<br>";
}
?>
