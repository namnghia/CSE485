<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];
$valueB = $a['b']['o']['b'];
echo "Giá trị = $valueB có key là 'b'\n";

$valueC = $a['a']['c'];
echo "Giá trị = $valueC có key là 'c'\n";

$infoA = $a['a'];
echo "Thông tin của phần tử có key là 'a':\n";
print_r($infoA);