<?php
function convertToUppercaseArray($arr) {
    return array_map('strtoupper', $arr);
}
$arr1 = ['a', 'b', 'ABC'];
$result1 = convertToUppercaseArray($arr1);
print_r($result1);

$arr2 = ['1', 'b', 'c', 'd'];
$result2 = convertToUppercaseArray($arr2);
print_r($result2);

// Test với mảng 3
$arr3 = ['a', 0, null, false];
$result3 = convertToUppercaseArray($arr3);
print_r($result3);
?>
