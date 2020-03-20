<?php
$str="The is the string to test for counting words and this is the long string";
function countWords($str)
{
 $str = strtolower($str);
 $strArr = preg_split("/[\s,.)(]+/", $str);
 return $strArr;
}
$result=countWords($str);
print_r(array_count_values($result));
?>