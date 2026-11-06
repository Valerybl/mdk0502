<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWITCH</title>
</head>
<body>
    
<h1>Операторы выбора</h1>

<p>Основные условия на все задачи: <br>
Сделайте так, чтобы все данные вводились из форм. <br>
В задаче 5 сделайте чекбокс с единицами измерения </p>

<h2><br>Задание 1.</h2>
<p><br> Для каждой введенной цифры (0 — 9) вывести соответствующее<br>
ей название на английском языке (0 — zero, 1 — one, 2 — two,... ).  </p>
<h3><br>Ответ: <br></h3>

<form method="POST">
    <label for="digit">Введите цифру (0-9):</label>
    <input type="number" id="digit" name="digit" min="0" max="9" required>
    <button type="submit" name="submit_task1">enter</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_task1'])) {

    $number = (int)$_POST['digit'];

    switch ($number) {
        case 0:
            echo "Результат: zero";
            break;
        case 1:
            echo "Результат: one";
            break;
        case 2:
            echo "Результат: two";
            break;
        case 3:
            echo "Результат: three";
            break;
        case 4:
            echo "Результат: four";
            break;
        case 5:
            echo "Результат: five";
            break;
        case 6:
            echo "Результат: six";
            break;
        case 7:
            echo "Результат: seven";
            break;
        case 8:
            echo "Результат: eight";
            break;
        case 9:
            echo "Результат: nine";
            break;
        
        default:
            echo "Как ты это ввел?";
            break;
    }
}

?>

<h2><br>Задание 2.</h2>
<p><br> Написать программу, которая по введенному числу от 1 до 12 <br>
(номеру месяца) выдает все приходящиеся на этот месяц праздничные дни <br>
(например, если введено число 1, то должно получиться 1 января — Новый год, 7 января — Рождество)</p>
<h3><br>Ответ: <br></h3>


<form method="POST">
    <label for="digit">Введите цифру (1-12):</label>
    <input type="number" id="digit" name="digit" min="1" max="12" required>
    <button type="submit" name="submit_task2">enter</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_task2'])) {
    $number = (int)$_POST['digit'];
    switch ($number) {
        case 1:
            echo "1–6 и 8 января – Новогодние каникулы, 7 января – Рождество Христово";
            break;
        case 2:
            echo "23 февраля – День защитника Отечества";
            break;
        case 3:
            echo "8 марта – Международный Женский день";
            break;
        case 4:
        case 7:
        case 8:
        case 9:
        case 10:
        case 12:
            echo "Официальных праздников нет";
            break;
        case 5:
            echo "1 мая – Праздник Весны и Труда, 9 мая – День Победы";
            break;
        case 6:
            echo "12 июня – День России";
            break;
        case 11:
            echo "4 ноября – День народного единства";
            break;
        
        default:
            echo "Как ты это ввел?";
            break;
    }
}

?>

<h2><br>Задание 3.</h2>
<p><br> Написать программу, позволяющую по последней цифре числа <br>
определить последнюю цифру его квадрата.  </p>
<h3><br>Ответ: <br></h3>

<form method="POST">
    <label for="digit">Введите число: (1-200)</label>
    <input type="number" id="digit" name="digit" min="1" max="200" required>
    <button type="submit" name='submit_task3'>enter</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_task3'])) {
    $num = (int)$_POST['digit'];
    $last_num = $num % 10;

switch ($last_num) {
    case 1:
    case 9:
        echo "Последняя цифра квадрата числа $num : 1";
        break;
    case 2:
    case 8:
        echo "Последняя цифра квадрата числа $num : 4";
        break;
    case 3:
    case 7:
        echo "Последняя цифра квадрата числа $num : 9";
        break;
    case 4:
    case 6:
        echo "Последняя цифра квадрата числа $num : 6";
        break;
    case 0:
        echo "Последняя цифра квадрата числа $num : 0";
        break;
    case 5:
        echo "Последняя цифра квадрата числа $num : 5";
        break;
    default:
        echo "Ты как это ввел?";
        break;
}
}
?>

<h2><br>Задание 4.</h2>
<p><br> Для целого числа к от 1 до 99 напечатать фразу «Мне к лет», <br>
учитывая при этом, что при некоторых значениях к слово «лет» надо заменить<br>
на слово «год» или «года». Например, 11 лет, 22 года, 51 год. </p>
<h3><br>Ответ: <br></h3>

<form method="POST">
    <label for="digit">Введите число: (1-99)</label>
    <input type="number" id="digit" name="digit" min="1" max="99" required>
    <button type="submit" name='k'>enter</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['k'])) {
    $k = (int)$_POST['digit'];
    $k10 = $k %10;

switch (TRUE) {
    case (($k == 11) || ($k == 12) || ($k == 13) || ($k == 14)):
        echo "Мне $k лет.";
        break;
    case ($k10 == 1):
        echo "Мне $k год.";
        break;
    case (($k10 == 2)||($k10 == 3)||($k10 == 4)):
        echo "Мне $k года.";
        break;
    default:
        echo "Мне $k лет.";
        break;
}
}


?>

<h2><br>Задание 5.</h2>
<p><br> Написать программу, которая бы по введенному номеру единицы измерения <br>
(1 — килограмм, 2 — миллиграмм, 3 — грамм, 4 — тонна, 5 — центнер) и массе М выдавала <br>
бы соответствующее значение массы в килограммах. </p>
<h3><br>Ответ: <br></h3>

<form method="POST">
    <label for="digit">Введите число: (1-100000)</label>
    <input type="number" id="digit" name="mass" min="1" max="100000" required>
    <input type="checkbox" name="unit[]" value="1"> Килограмм
    <input type="checkbox" name="unit[]" value="2"> Миллиграмм
    <input type="checkbox" name="unit[]" value="3"> Грамм
    <input type="checkbox" name="unit[]" value="4"> Тонна
    <input type="checkbox" name="unit[]" value="5"> Центнер
    <button type="submit" name='submit_task5'>enter</button>
</form>



<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_task5'])) {

$mass = (int)$_POST['mass'];  

if (isset($_POST['unit'])) {
    if (count($_POST['unit']) === 1) {

    $selected_unit = (float)$_POST['unit'][0];
    
switch ($selected_unit) {
    case 1:
        echo "$mass кг.  = $mass кг.";
        break;
    case 2:
        $result_kg = $mass / 1000000;
        echo "$mass мг. = $result_kg кг.";
        break;
    case 3:
        $result_kg = $mass / 1000;
        echo "$mass гр. = $result_kg кг.";
        break;
    case 4:
        $result_kg = $mass * 1000;
        echo "$mass т. = $result_kg кг.";
        break;
    case 5:
        $result_kg = $mass * 100;
        echo "$mass ц. = $result_kg кг.";
        break;
    
    default:
        echo "Ты как это сделал?";
        break;
}
} else {
    echo "Пожалуйста, выберите строго ОДНУ единицу измерения.";
}
} else {
    echo "Вы не выбрали единицу измерения!";
}









}

?>

</body>
</html>