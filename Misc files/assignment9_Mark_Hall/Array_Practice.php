Array practicing, Pages 127-134  // Place these in one program (Array_Practice.php), be sure to include all examples

<?php

//addresses not defined before this point
echo $addresses[0]; //prints nothing
echo $addresses; //prints nothing

$addresses[0] = "spam@cyberpromo.net";
$addresses[1] = "abuse@example.com";
$addresses[2] = "root@example.com";

$price['gasket'] = 15.29;
$price['wheel'] = 75.25;
$price['tire'] = 50.00;

$addresses = array("spam@cyberpromo.net", "abuse@example.com", "root@example.com");

$price = array('gasket' => 15.29, 'wheel' => 75.25, 'tire' => 50.00);

$price = ['gasket' => 15.29, 'wheel' => 75.25, 'tire' => 50.0];
$addresses = array();

$days = array(1 => "mon", "tue", "wed", "thur", "fri", "sat", "sun");
// 2 is Tue. 3 is Wed, etc. 

$whoops = array('fri' => "black", "brown", "green");

//same as
$whoops = array('fri' => "black", 0 => "brown", 1 => "green");

$family = array("fred", "wilma");

$family[] = "pebbles"; //$family[2] is pebbles

$person = array('name' => "fred");
$person[] = "wilma"; //person[0] is now "wilma"

$numbers = range(2, 5); 
$letters = range('a', 'z');
$reversedNumbers = range(5, 2);

$family = array("fred", "wilma", "pebbles");
$size = count($family); //size is 3

$confusion = array( 10 => "ten", 11 => "eleven", 12 => "twelve");
$size = count($confusion); //size is 3

$scores = array(5, 10);
$padded = array_pad($scores, 5, 10); //padded array is now (5, 10, 0, 0, 0);

$padded = array_pad($scores, -5, 0); //padded array is now (0, 0, 0, 5, 10);

$row0 = array(1, 2, 3);
$row1 = array(4, 5, 6);
$row2 = array(7, 8, 9);
$multi = array($row0, $row1, $row2);

$value = $multi[2][0]; // row 2, column 0. $value = 7

echo("the value at row 2, column 0 is {$multi[2][0]}\n");

$person = array("fred", 35, "betty");
list($name, $age, $wife) = $person;
// $name is "fred", $age is 35, $wife is "betty"

$person = array("fred", 35, "betty");
list($name, $age) = $person;

$values = array("hello", "world");
list($a, $b, $c) = $values;

$values = range('a', 'e');
list($m, , $n, , $o)

$subset = array_slice(array, offset, length);
$people = array("tom", "dick", "harriet", "brenda", "jo");
$middle = array_slice($people, 2, 2) //$middle is array ("harriet", "brenda")

//this use of array_slice makes no sense
$person = array('name' => "fred", 'age' => 35, 'wife' => "betty");
$subset = array_slice($person, 1, 2);

$order = array("tom", "dick", "harriet", "brenda", "jo");
list($second, $third) = array_slice($order, 1, 2);
//second is "dick", $third is "harriet"

$nums = range(1, 7);
$rows = array_chunk($nums, 3);
print_r($rows);

$arrayOfKeys = array_keys(array);

$person = array('name' => "fred", 'age' => 35, 'wife' => "wilma");
$keys = array_keys($person);

$arrayOfValues = array_values(array);

$values = array_values($person);

if ($person['name']) { ... } //this can be misleading

$person['age'] = 0; //unborn?

if ($person['age']) {
	echo "true!\n";
}
if (array_key_exists('age', $person)) {
	echo "exists!\n"
}
$a = array(0, NULL, '');
function tf($v) {
	return $v ? 'T' : 'F';
	
	for ($i=0; $i < 4; i++) {
		printf("%d: %s %s\n", $i, tf(isset($a[$i])), tf(array_key_exists($i, $a)));
	}
$subjects = array("physics", "chem", "math", "bio", "cs", "drama", "classics");
$removed = array_splice($subjects, 2, 3);

$removed = array_splice($subjects, 2);

array_splice($subjects, 2);

$new = array("law", "business", "IS");
array_splice($subjects, 4, 3, $new);
// $subjects is array("physics", "chem", "math", "bio", "law", "business", "IS")

$new = array("law", "business", "IS");
array_splice($subjects, 3, 4, $new);
// $subjects is array("physics", "chem", "math", "law", "business", "IS")

$subjects = array("physics", "chem", "math");
$new = array("law", "business");
array_splice($subjects, 2, 0, $new);
// $subjects is array("physics", "chem", "law", "business", "IS")

$capitals = array(
'USA' => "washington"
'great britain' => "london"
'new zealand' => "wellington"
'australia' => "canberra"
'italy' => "rome"
'canada' => "ottawa"
);

$downUnder = array_splice($capitals, 2, 2);
$france = array('france' => "paris");

array_splice($capitals, 1, 0, $france) //inseret france between USA and GB

}

?>



