<!DOCTYPE html>
<title>Mark Hall: Device Showcase</title>
<body>
<h1>My Samsung J7 Smartphone</h1>
<h2>Physical Features</h2>
<b>

<?php
//create an associative array with all the physical phone features.
$physical_feat = array("Display" => '139.77 mm Super AMOLED', "Height" => '151.6mm', "Width" => '76.2mm', "Depth" => '8.6mm', "Weight" => '170g');

//create a function to loop through the array and display results.
function _myfeatures($physical_feat){
	foreach ($physical_feat as $key => $x) {
		echo $key .': '. $x .'<br>';	
  }
}
_myfeatures($physical_feat); //call the function.
?>
</b>

<h2>Internal Capabilities</h2>
<b>

<?php
//create an associative array with all the internal phone features.
$internal_cap = array("Ram" => '2 GB', "ROM" => '16 GB', "Processor" => '1.5 GHz Octo-Core', "Battery" => '3000 Mah Li-ion', "Storage" => '64 GB(Expandable to 256 GB'); 

//create a function to loop through the array and display results.
function _mycapabilities($internal_cap) {
	foreach ($internal_cap as $key => $y) {
		echo $key .': '. $y . '<br>';
  }
}
_mycapabilities($internal_cap);//call the function.
?>
</b>
<br>

<?php
//Display the current time and date.
date_default_timezone_set('America/New_York');
$date = date('m/d/Y h:i:s a', time());
echo $date
?> 

</body>
</html> 