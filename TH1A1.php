<?php
function sumArray($arr)
{
    return array_sum($arr);
}
function multiplyArray($arr)
{
    return array_product($arr);
}

function subtractArray($arr)
{
    return $arr[0] - array_sum(array_slice($arr, 1));
}

function divideArray($arr)
{
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] != 0) {
            $result /= $arr[$i];
        } else {
            return 0;
        }
    }
    return $result;
}

$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];

echo "Tổng các phần tử   = 2+5+6+9+2+5+6+12+5 = " . sumArray($arrs) . "\n";
echo "Tích các phần tử   = 2*5*6*9*2*5*6*12*5 = " . multiplyArray($arrs) . "\n";
echo "Hiệu các phần tử   = 2-5-6-9-2-5-6-12-5 = " . subtractArray($arrs) . "\n";
echo "Thương của các phần tử   = 2/5/6/9/2/5/6/12/5 = " . divideArray($arrs) . "\n";

