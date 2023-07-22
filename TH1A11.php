<?php
$array = array(1, 2, 3, 4, 5);

$indexToDelete = 2;
array_splice($array, $indexToDelete, 1);

print_r($array);
?>
