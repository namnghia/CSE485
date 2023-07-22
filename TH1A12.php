<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];


$firstElement = reset($numbers);
$lastElement = end($numbers);


$maxValue = max($numbers);
$minValue = min($numbers);
$sumValues = array_sum($numbers);


$ascendingValues = $numbers;
asort($ascendingValues);
$descendingValues = $numbers;
arsort($descendingValues);


$ascendingKeys = $numbers;
ksort($ascendingKeys);
$descendingKeys = $numbers;
krsort($descendingKeys);


echo "Phần tử đầu tiên: " . $firstElement . PHP_EOL;
echo "Phần tử cuối cùng: " . $lastElement . PHP_EOL;
echo "Số lớn nhất: " . $maxValue . PHP_EOL;
echo "Số nhỏ nhất: " . $minValue . PHP_EOL;
echo "Tổng các giá trị: " . $sumValues . PHP_EOL;

echo "Mảng sắp xếp tăng dần theo giá trị: ";
print_r($ascendingValues);

echo "Mảng sắp xếp giảm dần theo giá trị: ";
print_r($descendingValues);

echo "Mảng sắp xếp tăng dần theo key: ";
print_r($ascendingKeys);

echo "Mảng sắp xếp giảm dần theo key: ";
print_r($descendingKeys);
?>
