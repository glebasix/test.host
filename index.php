<?php
// task 1
$x = 6;
$y = 15;
$z = 4;
$x += $y - $x++ * $z;
echo "task 1 <br /> $x <br />";
$z = - $x - $y * 5;
echo $z, "<br />";
$y /= $x + 5 % $z;
echo $y, "<br />";
$z = $x++ + $y * 5;
echo $z, "<br />";
$x = $y - $x++ * $z;
echo $x, "<br />";

/////////////////////////
// task 2

$a = mt_rand(0,100);
$b = mt_rand(0,100);
$c = mt_rand(0,100);
$sarf = ($a + $b + $c) / 3;
echo " task 2 <br /> $sarf <br />";

/////////////////////////
// task 3

$r = mt_rand(0,10);
$h = mt_rand(0,10);
$v = pi() * $r * 2 * $h;
$s = 2 * pi() * $r * ($r + $h);
echo "task 3 <br /> $v <br />";
echo $s, "<br />";

/////////////////////////
// task 4

$a = mt_rand(0,10);
echo "task 4 <br /> $a A";
$b = mt_rand(11,20);
echo "$b B <br />";
for ($a; $a <= $b; $a++) {
    $sum += $a;
    if ($a % 2 != 0) {
        echo "$a ,";
    }
}
echo "<br /> $sum сумма <br />";

/////////////////////////
// task 7

$n = mt_rand(5,15);
for ($j = 0; $j < $n; $j++) {
    $arr[$j] = mt_rand(0,100);
}
echo "task 7 <br /> массив <br />";
print_r($arr);
$car = count($arr);
$max = 0;
$min = 1000000;
$summ = 0;
for ($i = 0; $i < $car; $i++) {
    $summ += $arr[$i];
    if ($arr[$i] > $max) {
        $max = $arr[$i];
    } elseif ($arr[$i] < $min) {
        $min = $arr[$i];
    } elseif ($arr[$i] % 2 != 0) {
        echo "<br />$arr[$i] ,";
    } else {
        $max = $max;
        $min = $min;
    }
}
$sarff = $summ / $car;

echo "<br /> $max max";
echo "<br /> $min min";
echo "<br /> $summ sum";
echo "<br /> $sarff sred arefm<br />";

////////////////////////////
// task 8

$arrt = array(array(mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10)),
    array(mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10)),
    array(mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10)),
    array(mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10)),
    array(mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10)));
echo "task 8 <br /> massiv do<br /> ";
print_r($arrt);
for ($i = 0; $i < 5; $i++) {
    if ($arrt[$i][$i] < 0) {
        $arrt[$i][$i] = 0;
    } elseif ($arrt[$i][$i] > 0) {
        $arrt[$i][$i] = 1;
    }
}
echo "<br /> massiv posle<br /> ";
print_r($arrt);
echo "<br /> proverka elementov<br /> ";
print_r($arrt[0][0]);
print_r($arrt[1][1]);
print_r($arrt[2][2]);
print_r($arrt[3][3]);
print_r($arrt[4][4]);