<?php
$a = '-9';
$b = '20';
if ($a >= 0 && $b >= 0) {
    echo $a - $b;
} elseif ($a < 0 && $b < 0) {
    echo $a * $b;
} elseif (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
    echo $a + $b;
} else {
    echo 'Неправильный ввод данных!';
}