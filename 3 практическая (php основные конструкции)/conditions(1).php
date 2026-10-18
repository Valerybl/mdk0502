<?php

// задача 1

echo "Задача 1 <br><br>";

$a = 9;
$b = 7;

echo "a = $a <br> b = $b<br><br>";

if ($a < $b) {
    $result = $a + $b;
    echo "a < b => a + b = $result";
} else {
    $result = $a * $b;
    echo "a > b => a * b = $result";
}

// задача 2

echo "<br><br><br>Задача 2 <br><br>";

$angle1 = 60;
$angle2 = 30;
$angle3 = 180 - ($angle1 + $angle2);
$SumAngles = $angle1 + $angle2 + $angle3;

echo "angle1 = $angle1 <br>
angle2 = $angle2 <br>
angle3 = 180 - (angle1 + angle2) ($angle3) <br>
SumAngles = angle1 + angle2 + angle3 ($SumAngles) <br><br>";

if (($SumAngles == 180) && ($angle1 != 0) && ($angle2 != 0) && ($angle3 != 0) ) {
    echo "Да, такой треугольник может существовать. ";
    $test = ($angle1 == 90)||($angle2 == 90)||($angle3 == 90);
    if ($test == TRUE) {
        echo "Также этот треугольник будет прямоугольным.<br>";
    } else {
        echo "Но этот треугольник не прямоугольный.<br>";
    }
} else {
    echo "Нет, таких треугольников не бывает.<br>";
}

// задача 3 

echo "<br><br>Задача 3 <br><br>";

$age = 7;
 if ($age <= 1) {
    $ageGroupe = "Котенок";
 } elseif ($age <= 3) {
    $ageGroupe = "Молодой кот";
 } elseif ($age <= 7) {
    $ageGroupe = "Кот средних лет";
 } else {
    $ageGroupe = "Почтенный кот";
 }
echo "age = $age <br>ageGroupe = меняется по ходу ветвления<br><br>";
echo "Если коту $age то он в группе $ageGroupe.<br>";

// задача 4

echo "<br><br>Задача 4 <br><br>";

$a1 = 4;
$b1 = 3;
$c1 = 5;

echo "
a1 = $a1<br>
b1 = $b1<br>
c1 = $c1<br><br>
";

if ($a1 + $b1 > $c1 && $b1 + $c1 > $a1 && $c1 + $a1 > $b1) {
    echo "Да, такой треугольник существует.";
} else {
    echo "Нет, таких треугольников не существует.";
}

// задача 5

echo "<br><br><br>Задача 5 <br><br>";

$year = 2000;

echo "year = $year<br><br>";

if (($year % 100 != 0) && ($year % 4 == 0)) {
    echo "$year год високосный.";
} elseif ($year % 400 == 0) {
    echo "$year год високосный.";
} else {
    echo "$year год не високосный."  ;  
}

// задача 6

echo "<br><br><br>Дополнительно<br>Задача 6 <br><br>";

$a2 = 16749;
$b2 = 19275;
$sum = $a2 + $b2;

echo "a = $a2 <br>
b = $b2 <br>
sum = a + b <br><br>";

if ($sum < 32767) {
    echo "сумма a и b равна $sum";
} else {
    echo "Сумма больше 32767 ($sum)";
}

// задача 7

echo "<br><br><br>Задача 7 <br><br>";

$h = 17;
$w = 15;
$x3 = 8;
$y3 = 25;
$z3 = 11;

echo "
h = $h <br>
w = $w <br><br>
x3 = $x3 <br>
y3 = $y3 <br>
z3 = $z3 <br><br>";

if (($x3 <= $h && $y3 <= $w) || ($y3 <= $h && $x3 <= $w)) {
    echo "Кирпич пройдет через отверстие.";
} elseif (($x3 <= $h && $z3 <= $w) || ($z3 <= $h && $x3 <= $w)) {
    echo "Кирпич пройдет через отверстие.";
} elseif (($z3 <= $h && $y3 <= $w) || ($y3 <= $h && $z3 <= $w)) {
    echo "Кирпич пройдет через отверстие.";
} else {
    echo "Кирпич не пройдет через отверстие.";
}

// задача 8

echo "<br><br><br>Задача 8 <br><br>";

$months = [
    "января"   => 31,
    "февраля"  => 28,
    "марта"    => 31,
    "апреля"   => 30,
    "мая"      => 31,
    "июня"     => 30,
    "июля"     => 31,
    "августа"  => 31,
    "сентября" => 30,
    "октября"  => 31,
    "ноября"   => 30,
    "декабря"  => 31
];

$days = 193;
$copyDays = $days;

foreach ($months as $month_name => $days_count) {
    if ($copyDays <= $days_count) {
        echo "$days день в году это $copyDays $month_name";
        break;
    } else {
        $copyDays = $copyDays - $days_count;
    }
}

// задача 9

echo "<br><br><br>Задача 9 <br><br>";

$number = 26;

if ($number % 4 == 0 && $number % 6 == 0 ) {
    echo "Да, $number делится и на 4, и на 6.";
} else {
    echo "Нет, $number не делится и на 4, и на 6.";
}

// задача 10

echo "<br><br><br>Задача 10 <br><br>";

$x4 = -19;
$y4 = 6;

$x0 = -20;
$y0 = 5;
$r = 8;

if (($x4 - $x0) ** 2 + ($y4 - $y0) ** 2 <= $r ** 2) {
    echo "Да, эта точка в кругу.";
} else {
    echo "Нет, эта точка не в кругу.";
}

?>