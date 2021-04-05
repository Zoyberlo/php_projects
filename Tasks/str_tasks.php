<?php
require "header.php";
?>

<h1>Работа со строками</h>

<?php
$TaskNumb = 1;
echo "<h1>Задача $TaskNumb.</h1> Дана строка 'minsk'. Сделайте из нее строку 'MINSK'.<br><br>
    Решение:";
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

//Task 10

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

echo "<h1>Задача $TaskNumb.</h1> Дана строка 'html css php'. 
    С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.<br><br>
    Решение:<br><br>";

$str = 'html css php';

echo  'Было: ' . $str . '<br>';

$str = explode(' ', $str);
echo  'Стало:<br>';

for($i = 0; $i < 3; $i++){
    echo  $str[$i] . '<br>';
}

$TaskNumb++;

//Task 25

echo "<h1>Задача $TaskNumb.</h1> Дан массив с элементами 'html', 'css', 'php'. 
    С помощью функции implode создайте строку из этих элементов, разделенных запятыми.<br><br>
    Решение:<br><br>";

$str = ['html', 'css', 'php'];

$str = implode(', ', $str);

echo  $str . '<br>';

$TaskNumb++;

//Task 26

echo "<h1>Задача $TaskNumb.</h1> В переменной \$date лежит дата в формате '2013-12-31'. 
    Преобразуйте эту дату в формат '31.12.2013'.<br><br>
    Решение:<br><br>";

$date = '2013-12-31';

$date = explode('-', $date);

$counter = 2;

for($i = 0; $i < 3; $i++){
    $reverse_date[$i] = $date[$counter];
    $counter--;
}

$reverse_date = implode('.', $reverse_date);

echo  $reverse_date . '<br>';

$TaskNumb++;

//Task 27

echo "<h1>Задача $TaskNumb.</h1>Дана строка '1234567890'. 
    Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.<br><br>
    Решение:<br><br>";

$str = '1234567890';

echo "Было: $str<br>";

$arr = str_split($str, 2);

echo 'Стало:<br>';

for($i = 0; $i <= count($arr) - 1; $i++){
    echo  $arr[$i] . '<br>';
}

$TaskNumb++;

//Task 28

echo "<h1>Задача $TaskNumb.</h1>Дана строка '1234567890'. 
    Сделайте из нее строку '12-34-56-78-90' не используя цикл.<br><br>
    Решение:<br><br>";

$str = '1234567890';

echo "Было: $str<br>";

$str = implode('-', str_split($str, 2));

echo 'Стало: ' . $str . '<br>';

$TaskNumb++;

//Task 29

echo "<h1>Задача $TaskNumb.</h1>Дана строка '    12 345 678 90 '. 
    Очистите ее от концевых пробелов.<br><br>
    Решение:<br><br>";

$str = ' 12 345 678 90 ';

echo "Было:$str<br>";

$str = trim($str);

echo 'Стало:' . $str . '<br>';

$TaskNumb++;

//Task 30

echo "<h1>Задача $TaskNumb.</h1>Дана строка '/php/'. 
    Сделайте из нее строку 'php', удалив концевые слеши.<br><br>
    Решение:<br><br>";

$str = '/php/';

echo "Было: $str<br>";

$str = trim($str, '/');

echo 'Стало: ' . $str . '<br>';

$TaskNumb++;

//Task 31

echo "<h1>Задача $TaskNumb.</h1>Дана строка 'слова слова слова.'. 
    В конце этой строки может быть точка, а может и не быть.<br>
    Сделайте так, чтобы в конце этой строки гарантировано стояла точка. 
    То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать.<br>
    Задачу решите через rtrim без всяких ифов.<br><br>
    Решение:<br><br>";

$str = 'слова слова слова.';

echo "Было: $str<br>";

$str = rtrim($str, '.') . '.';

echo 'Стало: ' . $str . '<br>';

$TaskNumb++;

//Task 32 //////////////////?!?!?!?!?!?!?!?!?!?!?!?!?!?!?!?!

echo "<h1>Задача $TaskNumb.</h1>Дана строка '12345'. 
    Сделайте из нее строку '54321'.<br><br>
    Решение:<br><br>";

$str = '12345';

echo "Было: $str<br>";

$str = strrev($str);

echo 'Стало: ' . $str . '<br>';

$TaskNumb++;

//Task 33

echo "<h1>Задача $TaskNumb.</h1>Проверьте, является ли слово палиндромом 
    (одинаково читается во всех направлениях, примеры таких слов: madam, otto, kayak, nun, level).<br><br>
    Решение:<br><br>";

$str = 'madzam';

echo 'Проверяемое слово: ' . $str . '<br>';

if ($str == strrev($str)){
    echo 'Это палиндром<br>';
}else{
    echo 'Это не палиндром<br>';
}

$TaskNumb++;

//Task 34

echo "<h1>Задача $TaskNumb.</h1>Дана строка. 
    Перемешайте символы этой строки в случайном порядке.<br><br>
    Решение:<br><br>";

$str = 'привет';

echo 'Начальное слово: ' . $str . '<br>';

// echo str_shuffle($str) . '<br>'; для латинских символов

$tmp = mb_str_split($str, );
shuffle($tmp);
$str = implode("", $tmp);

echo $str . '<br>';

$TaskNumb++;

//Task 35

echo "<h1>Задача $TaskNumb.</h1>Создайте строку из 6-ти случайных маленьких латинских букв так, 
    чтобы буквы не повторялись. 
    Нужно сделать так, чтобы в нашей строке могла быть любая латинская буква, а не ограниченный набор.<br><br>
    Решение:<br><br>";

$characters = 'abcdefghijklmnopqrstuvwxyz'; 
$charactersLength = strlen($characters);
$randomString = '';

for ($i = 0; $i < 6; $i++) { // генерация рандомной строки
    $randomString .= $characters[rand(0, $charactersLength - 1)];
}

$str = $randomString;

echo 'Начальная строка: ' . $str . '<br>';

$counter = 0;
$doubleSymbols = true;

while(gmp_fact(strlen($str)) >= $counter){ // gmp_fact - факториал числа, для поиска числа перестановок
    $str = str_shuffle($str);
    for($i = 0; $i < strlen($str)-1; $i++){
        if($str[$i] == $str[$i+1]){
            break;
        } else if($i == strlen($str) - 2){
            $doubleSymbols = false;
        }
    }
    if($doubleSymbols == false){
        break;
    }
    $counter++;
}

echo $str . '<br>';

$TaskNumb++;

//Task 36

echo "<h1>Задача $TaskNumb.</h1>Дана строка '12345678'. Сделайте из нее строку '12 345 678'.<br><br>
    Решение:<br><br>";

$str = '12345678';

echo 'Начальная строка: ' . $str . '<br>';

$str = number_format($str); //отделение тройки чисел пробелами или округление дробной части

echo $str . '<br>';

$TaskNumb++;

//Task 37

echo "<h1>Задача $TaskNumb.</h1>Нарисуйте пирамиду, у вашей пирамиды должно быть 9 рядов. 
    Решите задачу с помощью одного цикла и функции str_repeat.<br><br>
    Решение:<br><br>";

$str = 'x';

for($i = 1; $i <=9; $i++){
    echo str_repeat($str, $i) . "<br>"; // повтор сторки
}

$TaskNumb++;

//Task 38

echo "<h1>Задача $TaskNumb.</h1>Дана строка 'html, <b>php</b>, js'. 
    Удалите теги из этой строки.<br><br>
    Решение:<br><br>";

$str = 'html, <b>php</b>, js';

echo 'Начальная строка: ' . $str . '<br>';

$str = strip_tags($str);

echo $str . '<br>';

$TaskNumb++;

//Task 39

echo "<h1>Задача $TaskNumb.</h1>Дана строка 'html, <i><b>php</b></i>, js'. 
    Удалите все теги из этой строки, кроме тега i.<br><br>
    Решение:<br><br>";

$str = 'html, <b>php</b>, <i>js</i>';

echo 'Начальная строка: ' . $str . '<br>';

$str = strip_tags($str, ['<i>']);

echo $str . '<br>';

$TaskNumb++;

//Task 40

echo "<h1>Задача $TaskNumb.</h1>Дана строка 'html, <b>php</b>, js'. 
    Выведите ее на экран 'как есть': то есть браузер не должен преобразовать < b > в жирный.<br><br>
    Решение:<br><br>";

$str = 'html, <b>php</b>, js';

echo 'Начальная строка: ' . $str . '<br>';

$str = htmlspecialchars($str);

echo $str . '<br>';

$TaskNumb++;

//Task 41

echo "<h1>Задача $TaskNumb.</h1>Узнайте ASCII-код символов 'a', 'b', 'c', пробела.<br><br>
    Решение:<br><br>";

$char_arr = ['a', 'b', 'c', 'пробела'];

for($i = 0; $i < count($char_arr); $i++){
    echo $char_arr[$i] . ' = ' . ord($char_arr[$i]) . '<br>';
}

$TaskNumb++;

//Task 42

echo "<h1>Задача $TaskNumb.</h1>Выведите на экран символ с кодом 33.<br><br>
    Решение:<br><br>";

echo chr(33) . '<br>';

$TaskNumb++;

//Task 43

echo "<h1>Задача $TaskNumb.</h1>Запишите в переменную \$str случайную строку \$len длиной, 
    состоящую из маленьких букв латинского алфавита. 
    Подсказка: воспользуйтесь циклом for или while.<br><br>
    Решение:<br><br>";

$len = 10;
$str = '';

for($i = 0; $i <= $len; $i++){
    $str .= chr(rand(97, 122));
}

echo $str . '<br>';

$TaskNumb++;

//Task 44

echo "<h1>Задача $TaskNumb.</h1>Дана буква английского алфавита. 
    Узнайте, она маленькая или большая.<br><br>
    Решение:<br><br>";

$character = 'a';

echo  'Дан символ: ' . $character . '<br>';

if(ord($character) >= 65 && ord($character) <= 90){
    echo 'Это большая/маленькая буква английского алфавита<br>';
}else if(ord($character) >= 97 && ord($character) <= 122){
    echo 'Это маленькая буква английского алфавита<br>';
}else{
    echo 'Это не буква английского алфавита<br>';
}

$TaskNumb++;

//Task 45

echo "<h1>Задача $TaskNumb.</h1>Дана строка 'ab-cd-ef'. 
    С помощью функции strchr выведите на экран строку '-cd-ef'..<br><br>
    Решение:<br><br>";

$str = 'ab-cd-ef';

echo  'Данна строка: ' . $str . '<br>';

echo  strchr($str, '-') . '<br>';

$TaskNumb++;

//Task 46

echo "<h1>Задача $TaskNumb.</h1>Дана строка 'ab-cd-ef'. 
    С помощью функции strrchr выведите на экран строку '-ef'.<br><br>
    Решение:<br><br>";

$str = 'ab-cd-ef';

echo  'Данна строка: ' . $str . '<br>';

echo  strrchr($str, '-') . '<br>'; // strstr - делает то же но со строкой

$TaskNumb++;

//Task 47

echo "<h1>Задача $TaskNumb.</h1>Дана строка 'ab-cd-ef'. 
    С помощью функции strrchr выведите на экран строку '-ef'.<br><br>
    Решение:<br><br>";

$str = 'ab-cd-ef';

echo  'Данна строка: ' . $str . '<br>';

echo  strrchr($str, '-') . '<br>';

$TaskNumb++;

//Task 48

echo "<h1>Задача $TaskNumb.</h1>Преобразуйте строку 'var_test_text' в 'varTestText'. 
    Скрипт, конечно же, должен работать с любыми аналогичными строками.<br><br>
    Решение:<br><br>";

$str = 'var_test_text';

echo  'Данна строка: ' . $str . '<br>';

$str = str_replace('_', ' ', $str);
$str = lcfirst(ucwords($str));
$str = str_replace(' ', '', $str);

echo  $str . '<br>';

$TaskNumb++;

//Task 49

echo "<h1>Задача $TaskNumb.</h1>Дан массив с числами. 
    Выведите на экран все числа, в которых есть цифра 3.<br><br>
    Решение:<br><br>";

$arr = [13, 12, 32, '37', '93', 212312, 9367, '90', '50'];

echo  'Данн массив: ';
for($i = 0; $i < count($arr); $i++){
    echo $arr[$i] . ' ';
}
echo '<br>';

echo  'Число с тройкой: ';
for($i = 0; $i < count($arr); $i++){
    if(strrpos($arr[$i], '3') !== false){ // !== не равно false учитывая его тип bool
        echo $arr[$i] . ' ';
    }
}
echo '<br>';

$TaskNumb++;

//Task 50
