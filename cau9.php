<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            padding: 8px;
        }
    </style>
</head>
<body>
<h2 style="text-align: center;">Bảng Cửu Chương Từ 1 Đến 10</h2>

<?php
// Duyệt từ 1 đến 10
for ($i = 1; $i <= 10; $i++) {
    echo "<h3 style='text-align: center;'>Bảng Cửu Chương $i</h3>";
    echo "<table>";
    echo "<tr><th>Thực hiện phép tính</th><th>Kết quả</th></tr>";

    // In ra bảng cửu chương cho số $i
    for ($j = 1; $j <= 10; $j++) {
        echo "<tr><td>$i x $j</td><td>" . ($i * $j) . "</td></tr>";
    }

    echo "</table>";
}
?>
</body>
</html>