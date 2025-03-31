<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .board {
            display: grid;
            grid-template-columns: repeat(8, 50px); /* 8 cột, mỗi cột rộng 50px */
            grid-template-rows: repeat(8, 50px);    /* 8 hàng, mỗi hàng cao 50px */
            gap: 0;
            margin: 40px auto;
            border: 5px solid black;
            width: 400px;
        }
        .cell {
            width: 50px;
            height: 50px;
        }
        .white {
            background-color: white;
            width: 50px;
        }
        .black {
            background-color: black;
            width: 50px;
        }
    </style>
</head>
<body>
<h2 style="text-align: center;">Bàn Cờ Vua</h2>

<div class="board">
    <?php
    // Duyệt qua các ô trên bàn cờ
    for ($row = 0; $row < 8; $row++) {
        for ($col = 0; $col < 8; $col++) {
            // Nếu tổng chỉ số hàng và cột là số chẵn, thì ô là trắng, ngược lại là đen
            if (($row + $col) % 2 == 0) {
                echo '<div class="cell white"></div>';
            } else {
                echo '<div class="cell black"></div>';
            }
        }
    }
    ?>
</div>
</body>
</html>