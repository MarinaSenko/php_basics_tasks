<?php
/*Задача №55
Выведите столбец четных чисел в промежутке от нуля до 100*/

for ($i=0; $i<=100; $i++){
    if ($i%2 == 0){
        echo $i.'<br>';
    }
}
echo '<hr>';

/*Задача №56
Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50.
Какое число получится? Посчитайте количество итераций, необходимых для этого
итерации — это количество проходов цикла), и запишите его в переменную $num*/

$n = 1000;

while ($n > 49){
    $n = $n/2;
    $num = $n;
}

echo $num;
echo '<hr>';

/*Задача №58
Дан массив с элементами 4, 2, 5, 19, 13, 0, 10.
С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4.
Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'*/

$arr = array(4, 2, 5, 19, 13, 0, 10);
$e = 4;
foreach ($arr as $value){
   if ($e==$value){
       echo 'Есть'.'<br>';
   }
   else {
       echo 'Нет'.'<br>';
   }
}
echo '<hr>';
/*Задача №64
Нарисуйте пирамиду, как показано ниже, только у вашей пирамиды должно быть 20 рядов, а не 5


x

xx

xxx

xxxx

xxxxx
*/

for ($i=0; $i<=20; $i++) {
    echo str_repeat("x", $i).'<br>';
}
echo '<hr>';
/*Задача №65
Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5

1

22

333

4444

55555
*/
for ($i=0; $i<=9; $i++) {
    echo str_repeat($i, $i).'<br>';
}
echo '<hr>';

/* Задача №67
Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.*/

$n = 555;
$arr = str_split($n);
$sum = array_sum($arr);
echo $sum;
echo '<hr>';
/*Задача №68
Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть 
выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза*/

$n = 237427562629307630;
$res = substr_count($n, 2);
echo $res;
echo '<hr>';

/* Задача №69
Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами*/

$mas = array();
for ($i=0; $i<10; $i++){
    $mas[$i] = rand(100, 200);
}
var_dump($mas);
echo '<br>';
$max = max($mas);
$min = min($mas);
echo 'min = '.$min.'<br>';
echo 'max = '.$max.'<br>';
$max_ind = array_search($max, $mas);
$min_ind = array_search($min, $mas);
$replace = list ($mas[$min_ind], $mas[$max_ind]) = array($mas[$max_ind],$mas[$min_ind]);
var_dump($mas);
echo '<hr>';

/*Задача №70
Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы.
После вывести на экран элементы, которые больше ноля и у которых не парный индекс*/

$arr_100 = array();
for ($i=0; $i<=5; $i++){
    $arr_100[$i] = rand(1, 100);
}
var_dump($arr_100);
echo '<br>';
$p = 1;
foreach($arr_100 as $key => $value) {
    if(!($key & 1) && $value>0) $p *= $value;
}
echo 'Произведение всех элементов с четным индеком в массиве: '. $p.'<br>';
echo 'Элементы с нечетным индексом: '.'<br>';
foreach($arr_100 as $key => $value){
    if (($key & 1) && $value>0)
        echo $value.'<br>';
}

echo '<hr>';