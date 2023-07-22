<?php
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];

$filteredNumbers = array_filter($array, function ($number) {
    return ($number >= 100 && $number <= 200 && $number % 5 === 0);
});
?>

<!DOCTYPE html>
<html>
<head>
    <title>Các số từ 100 đến 200 và chia hết cho 5</title>
</head>
<body>
    <pre>
        <?php print_r($filteredNumbers); ?>
    </pre>
</body>
</html>