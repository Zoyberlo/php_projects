<?php

$TaskNumb = 1;

echo "<h1>Задача $TaskNumb.</h1> Дана строка 'minsk'. Сделайте из нее строку 'MINSK'.<br><br>

    Решение:<br><br>"; 

$str = 'minsk';

echo  'Было: ' . $str . '<br>Стало: ' . strtoupper($str) . '<br>';

$TaskNumb++;   

//Task 1

echo "<h1>Задача $TaskNumb.</h1> Дана строка 'минск'. Сделайте из нее строку 'МИНСК'.<br><br>

    Решение:<br><br>"; 

$str = 'минск';

echo  'Было: ' . $str . '<br>Стало: ' . mb_strtoupper($str) . '<br>';

$TaskNumb++;  

//Task 2

echo "<h1>Задача $TaskNumb.</h1> Дана строка 'MINSK'. Сделайте из нее строку 'Minsk'.<br><br>

    Решение:<br><br>";
    
$str = 'MINSK';

echo  'Было: ' . $str . '<br>Стало: ' . ucfirst(strtolower($str)) . '<br>';

$TaskNumb++;  

//Task 3

echo "<h1>Задача $TaskNumb.</h1> В переменной \$date лежит дата в формате '31-12-2030'. Преобразуйте эту дату в формат '2030.12.31''.<br><br>

    Решение:<br><br>";

echo 'Variant 1: <br><br>';    
$date = '31-12-2030';
echo  'Было: ' . $date;
$arr = explode('-', $date);
echo '<br>Стало: ' . $arr[2] . '.' . $arr[1] . '.' . $arr[0] . '<br><br>';

echo 'Variant 2: <br><br>';
$date = '31-12-2030';
echo  'Было: ' . $date;
$date[2] = '.';
$date[5] = '.';
echo '<br>Стало: ' . $date . '<br>';

unset($date, $arr, $str); 

//Task 4

echo "<h1>Задача $TaskNumb.</h1> Дана строка 'london'. Сделайте из нее строку 'London'.<br><br>

    Решение:<br><br>";
    
$str = 'london';

echo  'Было: ' . $str . '<br>Стало: ' . ucfirst($str) . '<br>';

$TaskNumb++;  

//Task 5

echo "<h1>Задача $TaskNumb.</h1> Дана строка 'London'. Сделайте из нее строку 'london'.<br><br>

    Решение:<br><br>";
    
$str = 'London';

echo  'Было: ' . $str . '<br>Стало: ' . lcfirst($str) . '<br>';

$TaskNumb++;  

//Task 6

echo "<h1>Задача $TaskNumb.</h1> Дана строка 'london is the capital of great britain'.<br>
    Сделайте из нее строку 'London Is The Capital Of Great Britain'.<br><br>
    Решение:<br><br>";
    
$str = 'london is the capital of great britain';

echo  'Было: ' . $str . '<br>Стало: ' . ucwords($str) . '<br>';

$TaskNumb++;  

//Task 7

echo "<h1>Задача $TaskNumb.</h1> Дана строка 'LONDON'. Сделайте из нее строку 'London'.<br><br>
    Решение:<br><br>";
    
$str = 'LONDON';

echo  'Было: ' . $str . '<br>Стало: ' . ucfirst(strtolower($str)) . '<br>';

$TaskNumb++;  

//Task 8