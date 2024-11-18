<?php
$string = substr_replace(original, new, start [, length]);

$greeting = "good morning citizen";
$farewell = substr_replace($greeting, "bye", 5, 7);
 //farewell is "good bye citizen"
 
 
$farewell = substr_replace($farewell, "kind", 9, 0);
//farewell is "good bye kind citizen"


$farewell = substr_replace($farewell, "", 8);
//farewell is "good bye"

$farewell = substr_replace($farewell, "now its time to say ", 0,0);
//farewell is "now its time to say good bye"

$farewell = substr_replace($farewell, "riddance", -3);
//farewell is "now its time to say good riddance"

$farewell = substr_replace($farewell, "", -8, -5);
//farewell is "now is time to say good dance"






?>