array_walk practice, Pages 138-139 // Place all of these examples in the same file, Array_Walk.php.  Use the first sample code section on page 138, the second array_walk example at the top of page 139 (use _printRow as the function name and the last example in the middle of page 139.

<?php

$addresses = array("spam@cyberpromo.net", "abuse@example.com");
$addressCount = count($addresses);

for ($i = 0; $i < $addressCount; $i++) {
	$value = $addresses[i];
	echo "{$value}\n"
}

//prints spam@cyberpromo.net
//prints abuse@example.com

function printRow($value, $key, $color) {
	echo "<tr>\n<td bgcolor=\"{$color}\">{$value}</td>;
	echo "<td bgcolor=\"{$color}\">{$key}</td>\n</tr>n;
	
}

$person = array('name' => "fred", 'age' => 35, 'wife' => "wilma");

echo "<table border=\"1\">";

array_walk($person, "printRow", "lightblue");
echo "</table>";


$extraData = array('border' => 2, 'color' => "red");
$baseArray = array("ford", "chrysler", "volkswagon", "honda", "toyota");

array_walk($baseArray, "walkFunction", $extraData);

function walkFunction($item, $index, $data) {
	echo "{$item} <- item, then border: {$data['border']}";
	echo " color->{$data['color']}<br />";
}



?>