<?php
include "inc.php";
echo $angka;
echo "<br>";
if ($angka==100){
	echo "Excellent";
} elseif ($angka<100&&$angka>=85) {
	echo "Very Good";
} elseif ($angka<85&&$angka>=70) {
	echo "Good";
} elseif ($angka<70&&$angka>=55) {
	echo "Fair";
} elseif ($angka<55&&$angka>=0 {
	echo "Poor";
}
?>