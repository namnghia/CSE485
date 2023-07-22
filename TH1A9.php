<?php
function convertToLowerCase($arr)
{
    return array_map('strtolower', $arr);
}

$array1 = ['a', 'b', 'ABC'];
$convertedArray1 = convertToLowerCase($array1);

// In mảng gốc
echo "Mảng gốc: ";
print_r($array1);

// In mảng sau khi chuyển
echo "Mảng sau khi chuyển: ";
print_r($convertedArray1);
?>