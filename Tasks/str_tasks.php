<?php
require "header.php";
?>

<h1>Работа со строками</h>

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

echo "<h1>Задача $TaskNumb.</h1> В переменной \$date лежит дата в формате '31-12-2030'.
    Преобразуйте эту дату в формат '2030.12.31''.<br><br>
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

unset($date, $arr);

$TaskNumb++;

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

echo "<h1>Задача $TaskNumb.</h1> Дана строка 'html css php'.
    Найдите количество символов в этой строке.<br><br>
    Решение:<br><br>";

$str = 'html css php';

echo  'Количество символов в строке равно: ' . strlen($str) . '<br>';

$TaskNumb++;

//Task 9

echo "<h1>Задача $TaskNumb.</h1> Дана переменная \$password, в которой хранится пароль пользователя.<br>
    Если количество символов пароля больше 5-ти и меньше 10-ти, то выведите пользователю сообщение о том,<br>
    что пароль подходит, иначе сообщение о том, что нужно придумать другой пароль.<br><br>
    Решение:<br><br>";

$password = '1279sdf2';

if (strlen($password) > 5 && strlen($password) < 10) {
    echo  'Пароль подходит.<br>';
} else if (strlen($password) > 10) {
    echo  'Пароль слишком длинный.<br>';
} else {
    echo  'Пароль слишком короткий.<br>';
}

$TaskNumb++;

//Task 10 ///////////////////////////////сделать попозже с полем ввода!!!!!!

echo "<h1>Задача $TaskNumb.</h1> Дана строка 'html css php'. 
    Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.<br><br>
    Решение:<br><br>";

$str = 'html css php';

echo  substr($str, 0, 4) . '<br>';
echo  substr($str, 5, 3) . '<br>';
echo  substr($str, 9, 3) . '<br>';

$TaskNumb++;

//Task 11

echo "<h1>Задача $TaskNumb.</h1> Дана строка. 
    Вырежите и выведите на экран последние 3 символа этой строки.<br><br>
    Решение:<br><br>";

echo  'Строка с которой нужно вырезать: ' . $str . '<br>';
echo  'Последние 3 символа: ' . substr($str, strlen($str) - 3, 3) . '<br>';

$TaskNumb++;

//Task 12

echo "<h1>Задача $TaskNumb.</h1> Дана строка. Проверьте, что она начинается на 'http://'. 
    Если это так, выведите 'да', если не так - 'нет'.<br><br>
    Решение:<br><br>";

$str = 'http:// html css php';
echo  'Строка которую будет проверять: ' . $str . '<br>';
$cutSymbols = substr($str, 0, 7);

if ($cutSymbols == 'http://') {
    echo  'Да<br>';
} else {
    echo  'Нет<br>';
}

$TaskNumb++;

//Task 13

echo "<h1>Задача $TaskNumb.</h1> Дана строка.
    Если в этой строке более 5-ти символов - вырежите из нее первые 5 символов,<br>
    добавьте троеточие в конец и выведите на экран.
    Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.<br><br>
    Решение:<br><br>";

$str = 'http:// html css php';

echo  'Строка которую будет проверять: ' . $str . '<br>';

$cutSymbols = substr($str, 0, 5);

if (strlen($str) > 5) {
    $cutSymbols = substr($str, 0, 5);
    $cutSymbols .= "...";
    echo   "$cutSymbols <br>";
} else if (strlen($password) < 5) {
    echo  "$str <br>";
}

$TaskNumb++;

//Task 14

echo "<h1>Задача $TaskNumb.</h1> Дана строка '31.12.2013'. Замените все точки на дефисы.<br><br>
    Решение:<br><br>";

$str = '31.12.2013';

echo  'Было: ' . $str . '<br>';
$str = str_replace('.', '-', $str);
echo  'Стало: ' . $str . '<br>';

$TaskNumb++;

//Task 15

echo "<h1>Задача $TaskNumb.</h1> Дана строка \$str. 
    Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.<br><br>
    Решение:<br><br>";

$str = '1a2b3c4b5d6e7f8g9h0';

echo  'Было: ' . $str . '<br>';
$str = str_replace(['a', 'b', 'c'], [1, 2, 3], $str);
echo  'Стало: ' . $str . '<br>';

$TaskNumb++;

//Task 16

echo "<h1>Задача $TaskNumb.</h1> Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. 
    Удалите из нее все цифры.<br>
    То есть в нашем случае должна получится строка 'abcbdefgh'.<br><br>
    Решение:<br><br>";

$str = '1a2b3c4b5d6e7f8g9h0';

echo  'Было: ' . $str . '<br>';

for ($i = 0; $i < 10; $i++) {
    $str = str_replace($i, '', $str);
}

echo  'Стало: ' . $str . '<br>';

$TaskNumb++;

//Task 17

echo "<h1>Задача $TaskNumb.</h1> Дана строка \$str. Замените в ней все буквы 'a' на цифру 1, 
    буквы 'b' - на 2, а буквы 'c' - на 3. 
    Решите задачу двумя способами работы с функцией strtr (массив замен и две строки замен).<br><br>
    Решение:<br><br>";

$str = '1a2b3c4b5d6e7f8g9h0';

echo  'Было: ' . $str . '<br>';

$str = strtr($str, ['a' => '1', 'b' => '2', 'c' => '3']);

echo  'Стало: ' . $str . '<br>';

$TaskNumb++;

//Task 18

echo "<h1>Задача $TaskNumb.</h1> Дана строка \$str. 
    Вырежите из нее подстроку с 3-го символа (отсчет с нуля), 
    5 штук и вместо нее вставьте '!!!'.<br><br>
    Решение:<br><br>";

$str = '1a2b3c4b5d6e7f8g9h0';

echo  'Было: ' . $str . '<br>';

$str = substr_replace($str, '!!!', 2, 5);

echo  'Стало: ' . $str . '<br>';

$TaskNumb++;

//Task 19

echo "<h1>Задача $TaskNumb.</h1> Дана строка 'abc abc abc'. 
    Определите позицию первой буквы 'b'.<br><br>
    Решение:<br><br>";

$str = 'abc abc abc';

$str = strpos($str, 'b', 0); // если начинать с 0, то третий параметр не обязателен

echo  'Позиция первой буквы "b": ' . $str . '<br>';

$TaskNumb++;

//Task 20

echo "<h1>Задача $TaskNumb.</h1> Дана строка 'abc abc abc'. 
    Определите позицию последней буквы 'b'.<br><br>
    Решение:<br><br>";

$str = 'abc abc abc';

$str = strrpos($str, 'b');

echo  'Позиция последней буквы "b": ' . $str . '<br>';

$TaskNumb++;

//Task 21

echo "<h1>Задача $TaskNumb.</h1> Дана строка 'abc abc abc'. 
    Определите позицию первой найденной буквы 'b', 
    если начать поиск не с начала строки, а с позиции 3.<br><br>
    Решение:<br><br>";

$str = 'abc abc abc';

$str = strpos($str, 'b', 2);

echo  'Позиция буквы "b" после 3 символа: ' . $str . '<br>';

$TaskNumb++;

//Task 22

echo "<h1>Задача $TaskNumb.</h1> Дана строка 'aaa aaa aaa aaa aaa'. 
    Определите позицию второго пробела.<br><br>
    Решение:<br><br>";

$str = 'aaa aaa aaa aaa aaa';
$counter = 0;
$position = 0;

while ($counter < 2){
    $position = strpos($str, ' ', $position + 1);
    $counter++;   
}

echo  'Позиция второго пробела: ' . $position . '<br>';

$TaskNumb++;

//Task 23

echo "<h1>Задача $TaskNumb.</h1> Проверьте, что в строке есть две точки подряд. 
    Если это так - выведите 'есть', если не так - 'нет'<br><br>
    Решение:<br><br>";

$str = 'aaa aaa. .aaa ..aaa aaa';

$counter = 0;
$position = 0;

$two_points = str_replace(' ', '', $str);

if(strrpos($two_points, '..')){        
    echo  'есть <br>';
}else{
    echo  'нету <br>';
}

$TaskNumb++;

//Task 24
