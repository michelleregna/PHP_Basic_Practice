<?php

$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "<br><br>";

echo "2." . str_replace("-", "/", $date) . "<br>";

echo "3.";
if (strcmp($date, $tar) > 0) {
	echo "The future";
} else if (strcmp($date, $tar) < 0) {
	echo "The past" . "<br>";
} else {
	echo "Oops";
}



?>