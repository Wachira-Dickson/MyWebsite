<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math.php" method="post">
       <label>X:</label>
       <input type="text" name="x">
       <label>Y:</label>
       <input type="text" name="y">
       <label>Z:</label>
       <input type="text" name="z">
       <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    //$total = abs($x);
    //$total = round($x);
    //$total = floor($x);
    //$total = ceil($x);
    //$total = pow($x, $y);
    //$total = sqrt($x);
    //$total = max($x, $y, $z);
    //$total = pi();
    //$total = min($x, $y, $z);
    $total = rand(1, 6);

    echo $total
?>
