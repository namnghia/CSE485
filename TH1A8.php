<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
$maxLength = 0;
$maxLengthString = '';
$minLength = PHP_INT_MAX;
$minLengthString = '';
foreach ($array as $str) {
    $length = strlen($str);

    if ($length > $maxLength) {
        $maxLength = $length;
        $maxLengthString = $str;
    }

    if ($length < $minLength) {
        $minLength = $length;
        $minLengthString = $str;
    }
}

echo "Chuỗi lớn nhất là $maxLengthString, độ dài = $maxLength<br>";
echo "Chuỗi nhỏ nhất là $minLengthString, độ dài = $minLength";
?>
