
<?php
// формула 1
$a = 5;
$b = 6;
$c = 7;
$d = 8;
$result1 = $a / $c * $b / $d - ($a * $b - $c) / ($c * $d);

echo "Формула 1. <br><br>a = $a <br>b = $b <br>c = $c <br>d = $d<br> Результат: $result1 <br><br><br>";

// формула 2

$x = 1;
$y = 12;
$result2 = ($x + $y) / ($y + 1) - ($x * $y - 12) / (34 + $x);

echo "Формула 2. <br><br>x = $x <br>y = $y <br> Результат: $result2 <br><br><br>";

// формула 3.1

$x2 = 2;
$y2 = 4;
$result3 = (($x2 + 1) / ($x2 - 1)) ** $x2 + 18 * $x2 * $y2 ** 2;

echo "Формула 3,1. <br><br>x = $x2 <br>y = $y2 <br> Результат: $result3 <br><br><br>";

// формула 3.2

$x3 = 1;
$y3 = 2;
$result4 = (1 + (1 / $x3 ** 2)) ** $x3 - 12 * $x3 ** 2 * $y3;

echo "Формула 3,2. <br><br>x = $x3 <br>y = $y3 <br> Результат: $result4 <br><br><br>";

?>
