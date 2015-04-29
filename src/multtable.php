<?php 

$tracker = 0;

if ((int) $_GET['min-multiplicand'] > (int) $_GET['max-multiplicand']) {
	echo "Minimum multiplicand larger than maximum<br>";
	$tracker++;
}
if ((int) $_GET['min-multiplier'] > (int) $_GET['max-multiplier']) {
	echo "Minimum multiplier larger than maximum<br>";
	$tracker++;
}
if (!ctype_digit($_GET['min-multiplicand'])) {
	echo "Minimum multiplicand must be a non-negative integer<br>";
	$tracker++;
}
if (!ctype_digit($_GET['max-multiplicand'])) {
	echo "Maximum multiplicand must be a non-negative integer<br>";
	$tracker++;
}
if (!ctype_digit($_GET['min-multiplier'])) {
	echo "Minimum multiplier must be a non-negative integer<br>";
	$tracker++;
}
if (!ctype_digit($_GET['max-multiplier'])) {
	echo "Maximum multiplier must be a non-negative integer<br>";
	$tracker++;
}
if (empty($_GET['min-multiplicand']) && (int) $_GET['min-multiplicand'] != 0) {
	echo "Missing parameter minimum multiplicand<br>";
	$tracker++;
}
if (empty($_GET['max-multiplicand']) && (int) $_GET['max-multiplicand'] != 0) {
	echo "Missing parameter maximum multiplicand<br>";
	$tracker++;
}
if (empty($_GET['min-multiplier']) && (int) $_GET['min-multiplier'] != 0) {
	echo "Missing parameter minimum multiplier<br>";
	$tracker++;
}
if (empty($_GET['max-multiplier']) && (int) $_GET['max-multiplier'] != 0) {
	echo "Missing parameter maximum multiplier<br>";
	$tracker++;
}


if ($tracker == 0) {
	$tall = (int) $_GET['max-multiplicand'] - (int) $_GET['min-multiplicand'] + 2;
	$wide = (int) $_GET['max-multiplier'] - (int) $_GET['min-multiplier'] + 2;
	echo "<table width=\"400\" border=\"1\">";
	for ($i = 0; $i < $tall; $i++) {
		echo "<tr>";
		for ($ii = 0; $ii < $wide; $ii++) {
			if ($i == 0 && $ii == 0) {
				echo "<td></td>";
			}
			elseif ($i == 0 && $ii != 0) {
				$temp = $min-multiplier + $ii + 1;
				echo "<td>$temp</td>";
			}
			elseif ($i != 0 && $ii == 0) {
				$temp = $min-multiplicand + $i;
				echo "<td>$temp</td>";
			}
			else {
				$temp = ($min-multiplicand + $i) * (min-multiplier + $ii + 1);
				echo "<td>$temp</td>";
			}
		}
		echo "</tr><br>";
	}
	echo "</table>";
}

?>