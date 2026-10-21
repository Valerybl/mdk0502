<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ПР3</title>
</head>
<body>
    <h1>Практическая работа 3. Циклы.</h1>
    <h2>Задача 1</h2>

    <?php
    echo "startNumber = 2; multiplier = 3; quantity = 10;<br>";

$startNumber = 2;
$multiplier = 3;
$quantity = 10;

$currentNumber = $startNumber;

for ($i = 0; $i < $quantity; $i++) {
    $currentNumber = $currentNumber * $multiplier;
    echo $currentNumber . " ";
}
?>

    <h2>Задача 2</h2>

    <?php
$lastnum = 18;
$sum = 0;
    echo "lastsum = 18; sum = 0;<br>";
for($i = 1;$i <= $lastnum;$i++) {
    $sum = $sum+$i;
}

    echo "Итоговая сумма: $sum";
?>

    <h2>Задача 3</h2>

    <?php
$lastnum = 10;
$sum = 0;
    echo "lastsum = 10; sum = 0;<br>";
for($i = 2;$i <= $lastnum;$i+=2) {
    $sum = $sum+$i;
}
    echo "Итоговая сумма: $sum";
?>

    <h2>Задача 4</h2>
    <?php

$days = 13;
$kmin1d = 10;
$totalsum = 0;
    echo "days = 13; kmin1d = 10; totalsum = 0 <br>";
for ($i = 1; $i <= $days;$i++){
    $totalsum = $totalsum + $kmin1d;
    $kmin1d = $kmin1d * 1.1;
}

    echo "На $days день суммарный километраж составил " . round($totalsum, 2);
?>
    <h2>Задача 5</h2>

    <?php
$totalPaws = 64;
$maxRabbits = $totalPaws / 4;

echo "totalPaws = 64; maxRabbits = $totalPaws / 4; <br>";

for ($rabbits = 0; $rabbits <= $maxRabbits; $rabbits++) {
    $rabbitPaws = $rabbits * 4;
    $goosePaws = $totalPaws - $rabbitPaws;
    $goose = $goosePaws / 2;
    
    echo "Кроликов: $rabbits, Гусей: $goose <br>";
}
?>

    <h2>Задача 6</h2>

$amoeba = 1     
for($hour = 0; $hour <= 24; $hour+3)
    $total = $total + $amoeba
    $amobea = $amobea / 2
    
    echo "на $hour амеба из $total клеток"
</body>
</html>