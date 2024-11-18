
<?php
function strcat($left, $right)
{
$combinedString = $left . $right;

return $combinedString;
}
$first = "Bob ";
$middle = "Larry ";
$last = "Smith"

echo strcat($first, $middle, $last);
?>