<?php

$string1 = "Who the heck is Rasmus Lerdorf?";
$string2 = "Razmus Lehrdorf is some dude.";
$common = similar_text($string1, $string2, $percent);
printf("They have %d chars in common (%.2f%%).", $common, $percent);

?>