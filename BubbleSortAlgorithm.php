<?php
$arr = array(4,6,8,3,9,1,5,2,7);
echo "Входной массив: " . implode(',',$arr) . "<br>";
echo "Иттераций: " . (count($arr) - 1) * (count($arr) / 2) . "<br><br>";

$outer_itteration = 1;
$inner_itteration = 1;

for ($i = 0; $i < count($arr) -1 ; ++$i){
    echo "\n == Внешняя иттерация: " . $outer_itteration++ . "<br><br>";
    $flag = 0;
    for ($a = 0; $a < count($arr) - $i - 1; ++$a){
        echo "Внутренняя иттерация: " . $inner_itteration++ . "<br>";
        $element1 = $arr[$a];
        $element2 = $arr[$a + 1];
        if ($element1 > $element2){
            echo "$element1 > $element2" . "<br>";
            echo "Переставляем элементы" . "<br>";
            $arr[$a] = $element2;
            $arr[$a + 1] = $element1;
            $flag = 1;
        } else {
            echo "$element1 < $element2" . "<br>";
            echo "Не трогаем элементы" . "<br>";
        }
    echo "Получили: " . implode(',', $arr) . "<br><br>";
    }
    if ($flag == 0)  {break;}
}
