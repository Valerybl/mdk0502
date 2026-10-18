<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Практическая 3, задание 3: вложенные циклы.</title>
</head>
<body>
    
<h1>Практическая работа 3. Основный конструкции. Вложенные циклы.</h1>
<h2>Задача 1.</h2>
<p> С помощью вложенных циклов вывести на экран таблицу умножения. </p>
<h4>Ответ:</h4>

<?php
 for ($i = 1; $i < 10; $i++) {
    echo "<div style='display: inline-block; padding: 10px; margin: 5px;'>";
    for ($j = 2; $j <10; $j++) {
        echo "$j * $i = " . $i * $j . " <br>";
    }
    echo "<br>";
    echo "</div>";
}

?>

<h2>Задача 2.</h2>
<p>Даны размеры прямоугольника a и b. Вывести на экран прямоугольник, состоящий из символов Х <br>
пример: а=4 в=3<br>
ХХХХ<br>
ХХХХ<br>
ХХХХ</p>
<h4>Ответ:</h4>

<?php

$a = 8;
$b = 6;

for ($i=1; $i <= $b; $i++) { 
    for ($j=1; $j <= $a; $j++) { 
        echo "X";
    }
    echo " <br>";
}

?>

<h2>Задача 3.</h2>
<p>Реализовать задачу 1 в виде именно HTML таблицы, ИСПОЛЬЗУЯ теги table tr td. 
    <br>Размеры ячеек должны быть равными и у них должны быть границы.</p>
<h4>Ответ:</h4>

<?php
echo "<table border='1' style='border-collapse: collapse;'>";
 for ($i = 1; $i < 10; $i++) {
    echo "<tr>";
    for ($j = 2; $j <10; $j++) {
        echo "<td style='padding: 5px 10px;'>";
        echo " $j * $i = " . $i * $j ;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<h2>Задача 4.</h2>
<p>Вывести в виде HTML таблицу квадратов двузначных чисел.</p>
<h4>Ответ:</h4>

<?php

echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr>";
echo"<td style='padding: 5px 10px;'>";
echo "Десятки и <br>Единицы";
echo "</td>";
for ($tr0 = 0; $tr0 <= 9; $tr0++) {   
        echo"<td style='padding: 5px 10px;'>";
        echo "$tr0";
        echo "</td>";
    } 
echo "</tr>";
for ($i=1; $i <= 9; $i++) { 
    echo "<tr>";
    echo "<td style='padding: 5px 10px;'>";
    echo $i * 10;
    echo "</td>";
    for ($j=0; $j <= 9; $j++) { 
        echo "<td style='padding: 5px 10px;'>";
        $result = (($i * 10) + $j)**2;
        echo "$result";
        echo "</td>";
    }
        echo "</tr>";
}
echo "</table>";

?>

<h2>Задача 5.</h2>
<p>Вывести на экран «прямоугольник», образованный из двух видов символов. <br>
Контур прямоугольника должен состоять из одного символа, а в «заливка» — из другого. <br>
Даны размеры прямоугольника а и в.</p>
<h4>Ответ:</h4>

<?php

$a1 = 20;
$b1 = 5;

for ($i=1; $i <= $b1; $i++) { 
    for ($j=1; $j <= $a1; $j++) { 
        if (($i == 1 || $i == $b1) || ($j == 1 || $j == $a1) ) {
            echo "O";
        } else {
        echo "X";
        }
    }   
    echo " <br>";
}

?>

<h2>Задача 6.</h2>
<p>Найти все делители натурального числа n.</p>
<h4>Ответ:</h4>

<?php
$n = 35;

for ($i=1; $i <= $n; $i++) { 
    $test = $n % $i;
    if ($test == 0) {
        echo "$i является делителем $n <br>";
    } 
}

?>

<h2>Дополниельно: задача 7.</h2>
<p>Найти произведение цифр заданного к-значного числа.</p>
<h4>Ответ:</h4>

<?php

$number = 285;
$number_copy = $number;
$result = 1;
if ($number == 0) {
    echo "Вы ввели 0. Что считать то?";
} else {
    while ($number_copy != 0) {
    $test = $number_copy % 10;
    if ($test != 0) {
    $result = $result * $test;
    } 
    $number_copy = (int)($number_copy / 10);
}
echo "Произведение цифр числа $number это $result";
}






?>

</body>
</html>
