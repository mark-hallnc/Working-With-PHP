<?php
//$string = substr_replace(original, new, start [, length]);

$greeting = "PHP is tough to learn";

$farewell = substr_replace($greeting, "easy", 7, 5);
 //farewell is "PHP is easy to learn"
 echo $farewell;

$farewell = substr_replace($farewell, "so ", 7, 0);
//farewell is "PHP is so easy to learn"
 echo $farewell;

$farewell = substr_replace($farewell, "", 14);
//farewell is "PHP is so easy"
 echo $farewell;
 
$farewell = substr_replace($farewell, "I'm lying when I say ", 0,0);
//farewell is "I'm lying when I say PHP is so easy"
 echo $farewell;

$farewell = substr_replace($farewell, "tough", -4);
//farewell is "I'm lying when I say PHP is so tough"
 echo $farewell;

$farewell = substr_replace($farewell, "", -36, -15);
//farewell is "PHP is so tough"
 echo $farewell;





?>