<?php

$a = mt_rand(0, 15);

// Вариант №1.
switch ($a) {
    case 0: echo $a++ . "<br>";
    case 1: echo $a++ . "<br>";
    case 2: echo $a++ . "<br>";
    case 3: echo $a++ . "<br>";
    case 4: echo $a++ . "<br>";
    case 5: echo $a++ . "<br>";
    case 6: echo $a++ . "<br>";
    case 7: echo $a++ . "<br>";
    case 8: echo $a++ . "<br>";
    case 9: echo $a++ . "<br>";
    case 10: echo $a++ . "<br>";
    case 11: echo $a++ . "<br>";
    case 12: echo $a++ . "<br>";
    case 13: echo $a++ . "<br>";
    case 14: echo $a++ . "<br>";
    case 15: echo $a++ . "<br>";
}

// Вариант №2.
//function foo($a) {
//    echo $a++ ."<br>";
//    if ($a <= 15) foo($a);
//}
//
//foo($a);