<?php

$str = "Hello world";

$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "<br><br>";

echo "2. The new value of date: " . str_replace("-", "/", $date) . "<br>";

echo "3. Comparing \$date and \$tar: ";
if (strcmp($date, $tar) > 0) {
	echo "The future";
} else if (strcmp($date, $tar) < 0) {
	echo "The past" . "<br>";
} else {
	echo "Oops";
}

echo "5." . "<br>";
echo "6." . "<br>";
echo "7.The ASCII value of the first character in \$str: " . ord($str) . "<br>";



?>