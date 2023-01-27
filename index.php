Regex PHP replace char x when between digits
Scripting & Automation Posted Jan 28, 2023
AXK260X290X5

Should become AXK260 290 5
So, X or x is replaced with space.

And for example 123X 123 should not change
Or 123XBC should not change.

Something like /\dx\d/gi but replace the x's in the string.

<?php
$str = 'AXK260X290X5';
$str = 'AxK260x290x5';
$str = 'AxK260x 290x5';
$str = 'AxK260x290XBC';
echo $str . "<br/>";

$pattern = '/(\d)X(\d)/i';
echo preg_replace($pattern, '$1*$2', $str);
?>