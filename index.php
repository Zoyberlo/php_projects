<?php

$ExampleNumb = 1;

echo "<h1>Задача $ExampleNumb.</h1> Дана строка 'minsk'. Сделайте из нее строку 'MINSK'.<br><br>

    Решение:<br><br>"; 

$str = 'minsk';

echo  'Было: ' . $str . '<br>Стало: ' . strtoupper($str) . '<br>';

$ExampleNumb++;   

//Example 1

echo "<h1>Задача $ExampleNumb.</h1> Дана строка 'минск'. Сделайте из нее строку 'МИНСК'.<br><br>

    Решение:<br><br>"; 

$str = 'минск';

echo  'Было: ' . $str . '<br>Стало: ' . mb_strtoupper($str) . '<br>';

$ExampleNumb++;  

//Example 2

echo "<h1>Задача $ExampleNumb.</h1> Дана строка 'MINSK'. Сделайте из нее строку 'Minsk'.<br><br>

    Решение:<br><br>";
    
$str = 'MINSK';

echo  'Было: ' . $str . '<br>Стало: ' . ucfirst(strtolower($str)) . '<br>';

$ExampleNumb++;  

//Example 3

echo "<h1>Задача $ExampleNumb.</h1> В переменной \$date лежит дата в формате '31-12-2030'. Преобразуйте эту дату в формат '2030.12.31''.<br><br>

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

unset($date, $arr, $ExampleNumb, $str);  

//Example 4


