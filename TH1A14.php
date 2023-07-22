<?php
$array1 = [
    [77, 87],
    [23, 45]
];
$array2 = [
    'giá trị 1', 'giá trị 2'
];

// Khởi tạo mảng kết quả
$result = [];

// Gộp hai mảng dựa vào key của từng mảng
for ($i = 0; $i < count($array1); $i++) {
    // Lấy giá trị từ mảng thứ nhất và thêm vào mảng kết quả
    $result[$i][] = $array2[$i];

    // Lấy các giá trị từ mảng thứ hai và thêm vào mảng kết quả
    foreach ($array1[$i] as $value) {
        $result[$i][] = $value;
    }
}

// In kết quả
print_r($result);
?>
