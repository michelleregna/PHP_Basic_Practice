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

echo "4. The positions of '-': " . strpos($date, "-") . " " . strrpos($date, "-"). "<br>"; 

echo "5. The number of words in \$date is: " . str_word_count($date, 0) . "<br>";
echo "6. The length of \$str is: " . strlen($str) . "<br>";
echo "7. The ASCII value of the first character in \$str: " . ord($str) . "<br>";
echo "8. The last two characters in \$date are: " . substr($date, -2) . "<br>";

echo "9. \$date as an array: ";
print_r(explode ("-", $date));
echo "<br>";

echo "10. "



?>