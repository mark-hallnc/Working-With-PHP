
<?php
function strcat($first, $middle, $last)
{
$combinedString = $first . $middle . $last;

return $combinedString;
}
$first = "Bob ";
$middle = "Larry ";
$last = "Smith";

echo strcat($first, $middle, $last);
?>