
<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bảng dọc</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <?php
        foreach ($arrs as $value) {
            echo "<tr><td>$value</td></tr>";
        }
        ?>
    </table>
</body>
</html>