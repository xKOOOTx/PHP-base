<?php

$a = 0;

do {
    if ($a == 0) {
        echo $a . " - это ноль<br>";
    } elseif (($a & 1) == 1) {
        echo $a . " - нечетное число<br>";
    } else {
        echo $a . " - четное число<br>";
    }

    $a++;
} while ($a <= 10);