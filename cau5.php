<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>tính uscln và bscnn</h2>
    <form method="post">
        số thứ 1:<input type="number" name="so1" require><br>
        số thứ 2:<input type="number" name="so2" require><br>
        <input type="submit" name="uscln" value="uscln">
        <input type="submit" name="bscnn" value="bscnn">
</form>
<?php 
function uscln($a,$b){
    while ($b !=0){
        $temp=$b;
        $b = $a%$b;
        $a = $temp;
    }
    return $a;
}
function bscnn( $a , $b ) {
    return ($a * $b )/ uscln($a,$b);
}

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $so1 = intval($_POST["so1"]);
    $so2 = intval($_POST["so2"]);
    if (isset($_POST["uscln"])){
        echo"ước số chung lớn nhất của $so1 và $so2 là:" . uscln($so1, $so2);

    }
    if (isset($_POST["bscnn"])){
        echo " bội số chung nhỏ nhất của $so1 và $so2 là:" . bscnn($so1,$so2);
    }
}
        ?>

    </body>
</html>