<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Функции</title>
</head>
<body>
    
<h1>4. Задание -функции</h1>

<h2>Задача 1</h2>
<p>Условие:  Дан радиус окружности. Составить функцию для вычисления длины окружности. <br>
Вызвать функцию и вывести результат на экран.</p>
<h3>Ответ:</h3>

<form method="POST">
    Радиус: <input type="number" step="any" name="radius" required>
    <input type="submit" value="Вычислить">
</form>

<?php
function getCircleLength($radius)
{
    return 2 * 3.14 * $radius;
}

if (isset($_POST["radius"])) {
    $radius = (float)$_POST["radius"];
    echo "Длина окружности: " . getCircleLength($radius);
}

?>


<h2>Задача 2</h2>
<p>Условие:  Даны три стороны треугольника. Составить <br>
функцию для вычисления его площади. Вернуть 0, если это невозможно. <br>
Сделать так, чтобы данные заданий вводились из формы. <br>

Выбирайте названия функций соответственно тому, что они делают.</p>
<h3>Ответ:</h3>

<form method="POST">
    Сторона A: <input type="number" step="any" name="a" required><br><br>
    Сторона B: <input type="number" step="any" name="b" required><br><br>
    Сторона C: <input type="number" step="any" name="c" required><br><br>
    <input type="submit" value="Вычислить">
</form>

<?php
function getTriangleArea($a, $b, $c)
{
    if ($a <= 0 || $b <= 0 || $c <= 0 || $a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
        return 0;
    }
    $p = ($a + $b + $c) / 2;
    return sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
}

if (isset($_POST["a"], $_POST["b"], $_POST["c"])) {
    $a = (float)$_POST["a"];
    $b = (float)$_POST["b"];
    $c = (float)$_POST["c"];
    echo "Площадь треугольника: " . getTriangleArea($a, $b, $c);
}
?>



<h2>Задача 3</h2>
<p>Условие:  Сделать функцию для нахождения наибольшего делителя заданного числа (кроме его самого).</p>
<h3>Ответ:</h3>

<form method="POST">
    Число: <input type="number" name="number" required>
    <input type="submit" value="Найти">
</form>

<?php

function MaxDivisor($num) {
 if ($num <= 1) {
        return 0; 
    }

    for ($i=($num-1); $i = 1; $i--) { 
        # code...
    }
                return $i;
}

if (isset($_POST['number'])) {
    $number = (int)$_POST['number'];
    echo "Наибольший делитель: " . MaxDivisor($number);
    }
?>




<h2>Задача 4</h2>
<p>Условие:  Сделать функцию для нахождения всех делителей заданного числа. Функция должна вернуть массив с делителями.</p>
<h3>Ответ:</h3>

<?php

?>



<h2>Задача 5</h2>
<p>Условие:  Функция принимает массив чисел. Сделайте так, чтобы она возвращала сумму квадратов этих чисел.</p>
<h3>Ответ:</h3>

<?php

?>



<h2>Задача 6</h2>
<p>Условие:  Сделайте функцию convertToString, которая будет готовить данные для вывода на экран с помощью echo. <br>
    Функция принимает массив и возвращает строку. В функции сделайте проверку, на вложенные массивы. <br>
    Если внутренний элемент является также массивом, выведите 'array'. <br> </p>
<h3>Ответ:</h3>

<?php

?>



<h2>Задача 7</h2>
<p>Условие: Прочитайте в приложенных материалах про функции с переменным количеством параметров. <br>
Сделайте функцию, которая принимает переменное количество строк и возвращает их общую длину.</p>
<h3>Ответ:</h3>

<?php

?>



<h2>Дополнительно: <br>
    Задача 8</h2>
<p>Условие:  Рекурсия. Сделайте функцию convertToString рекурсивной.  <br>
    Если внутренний элемент является также массивом вызывайте её рекурсивно.</p>
<h3>Ответ:</h3>

<?php

?>

</body>
</html>