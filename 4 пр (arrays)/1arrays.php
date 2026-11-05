<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ПР4 ARRAYS</title>
</head>
<body>
    
<h1>Практическая 4. Массивы.</h1>

<h2>Задача 1</h2>
<p>Дан неупорядоченный массив целых чисел. <br>
Найти максимальный и минимальный элемент массива. <br>
Вывести их номера(индексы) и значения. <br>
</p>

<h3>Ответ:</h3>

<?php

$numbers = [84, 27, 49, 10, 32, 11, 28, 94, 2, 5, 73];
$max = 0;
$min = 0;
$key1 = 0;
$key2 = 0;

$max = $numbers[0];
foreach ($numbers as $key => $value) {
    if ($value > $max) {
        $max = $value;
        $key1 = $key;
    }
}
$min = $numbers[0];
foreach ($numbers as $key => $value) {
    if ($value < $min) {
        $min = $value;
        $key2 = $key;
    }
}
echo "Максимальное число - $max индекс - $key1, а минимальное - $min индекс - $key2";

?>

<h2>Задача 2</h2>
<p>Дан массив целых чисел. Найти сумму и произведение его элементов. 
Вывести на экран.
</p>

<h3>Ответ:</h3>

<?php

$result1 = 0;
$result2 = 1;


foreach ($numbers as $key => $value) {
    $result1 = $result1 + $value;
}

foreach ($numbers as $key => $value) {
    $result2 = $result2 * $value;
}

echo "Сумма - $result1 <br>
Произведение - $result2";

?>


<h2>Задача 3</h2>
<p>Дан массив целых чисел. Найти среднее арифметическое его элементов. <br>
Вывести на экран.</p>

<h3>Ответ:</h3>

<?php

$sum = 0;
$kolvo = 0;

foreach ($numbers as $key => $value) {
    $sum = $sum + $value;
    $kolvo++;
}
 
$result = $sum / $kolvo;
echo "Среднее арифметическое массива: $result";


?>


<h2>Задача 4</h2>
<p>Преобразовать массив вещественных чисел по правилу: положительные элементы<br>
 заменить их квадратами,  отрицательные - абсолютными величинами. <br>
 Для этого создайте еще один массив.<br>
Вывести на экран исходный и получившийся массивы.<br></p>

<h3>Ответ:</h3>

<?php
echo "старый массив: ";
$fractional_numbers = [-15.4, 7.2, -0.85, 42.1, -3.14, 11.9, 0, 0.5, -99.9, 8.63, -2.7];
$new_numbers = [];
foreach ($fractional_numbers as $key => $value) {
    echo $value . ', ';
}
echo "<br>";
foreach ($fractional_numbers as $key => $value) {
    if ($value > 0) {
        $squared = $value**2;
        $new_numbers[] = $squared;
    } elseif ($value < 0) {
        $absolute = $value * (-1);
        $new_numbers[] = $absolute;
    } else {
        $new_numbers[] = '0';
    }
}
echo "новый массив: ";
foreach ($new_numbers as $key => $value) {
    echo $value . ', ';
}

?>

<h2>Задача 5</h2>
<p>Дан массив, состоящий из целых чисел. Нумерация элементов начинается с 0.<br> 
Напишите программу, которая выведет элементы массива, номера которых четны (0, 2, 4...).<br></p>

<h3>Ответ:</h3>

<?php

echo 'Исходный массив: ';
foreach ($numbers as $key => $value) {
    echo $value, ', ';
}

echo ' <br>Четные по индексу элементы в массиве:  ';
foreach ($numbers as $key => $value) {
        if ($key % 2 == 0) {
        echo $value, ', ';
    }
}

?>


<h2>Задача 6</h2>
<p>Дан массив чисел. <br>
Выведите все элементы массива, которые больше предыдущего элемента.<br></p>

<h3>Ответ:</h3>

<?php

foreach ($numbers as $key => $value) {
    if (($key > 0 ) && ($numbers[$key] > $numbers[$key-1])) {
    echo $value, ', ';
}
}

?>


<h2>Задача 7</h2>
<p>Переставьте соседние элементы массива (A[0] c A[1], A[2] c A[3] и т.д.). <br>
Если элементов нечетное число, то последний элемент остается на своем месте.<br>
</p>

<h3>Ответ:</h3>

<?php

$numbers = [84, 27, 49, 10, 32, 11, 28, 94, 2, 5, 73];

echo "исходный массив: ";
foreach ($numbers as $key => $value) {
    echo $value . ', ';
}

$count = count($numbers) - 1;

for ($i=0; $i < $count; $i += 2) { 
    $i2 = $i + 1;
    [$numbers[$i], $numbers[$i2]] = [$numbers[$i2], $numbers[$i]];
}

echo "<br>новый массив: ";
foreach ($numbers as $key => $value) {
    echo $value . ', ';
}

?>


<h2>Задача 8</h2>
<p>Циклически сдвиньте элементы списка вправо (A[0] переходит на место A[1], <br>
A[1] на место A[2], ..., последний элемент переходит на место A[0]).<br>
</p>

<h3>Ответ:</h3>

<?php

$numbers = [84, 27, 49, 10, 32, 11, 28, 94, 2, 5, 73];

echo "исходный массив: ";
foreach ($numbers as $key => $value) {
    echo $value . ', ';
}

$last_num = array_pop($numbers);
array_unshift($numbers, $last_num);

echo "<br>новый массив: ";
foreach ($numbers as $key => $value) {
    echo $value . ', ';
}

?>


<h2>Задача 9</h2>
<p>Дан массив чисел. <br>
Посчитайте, сколько в нем пар элементов, равных друг другу. <br>
Считается, что любые два элемента, равные друг другу образуют одну пару, <br>
которую необходимо посчитать.<br></p>

<h3>Ответ:</h3>

<?php

$pairs_count = 0;

$numbers = [];
for ($h=0; $h < 16; $h++) { 
    $numbers[] = rand(1, 5);
}
echo "исходный массив: ";
foreach ($numbers as $key => $value) {
    echo $value . ', ';
}

for ($i=0; $i < count($numbers); $i++) { 
    for ($j= $i + 1; $j < count($numbers); $j++) { 
        if ($numbers[$i] == $numbers[$j]) {
            $pairs_count += 1;
        }
    }
}

echo "<br>Пар чисел в данном массиве $pairs_count";




?>

</body>
</html>