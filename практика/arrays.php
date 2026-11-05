<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAYS</title>
</head>
<body>

    <h1>Массивы</h1>
    <h2>Создание пустого массива</h2>
    <h3>($numbers = [];)</h3>
<?php
$numbers = [12, 5, 422, 7, 2];
?>
    <h2>Вывод массива на экран</h2>
<?php
var_dump($numbers);
?>
<p>var_dump(); - технический вывод, никогда основной.</p>

<h2>Перебор массива</h2>

<?php

for ($i=0; $i < count($numbers); $i++) { 
    echo $numbers[$i], ', ';
}

?>

<h2>Элемент массива</h2>

<?php

echo $numbers[0]; // 1ый элемент
echo "<br>";
$numbers[2] = '$$$';
echo $numbers[2];

?>

<h2>Добавление элемента</h2>
<?php

$numbers[] = 888;
var_dump($numbers);

?>

<h2>Цикл foreach</h2>

<?php

foreach ($numbers as $number) {
    echo $number, ' ';
}

?>

<h2>Цикл foreach c индексами</h2>

<?php

foreach ($numbers as $key => $number) {
    echo "$key - $number <br>";
}

?>














</body>
</html>