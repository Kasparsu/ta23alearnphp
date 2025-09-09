<?php

$bool = true && false;
$bool = true || false;
$bool = !false;
$bool = (true && false || false) && !(true || false && true);
$bool = 10 > 5;
$bool = 10 < 5;
$bool = 10 > 10;
$bool = 10 < 10;
$bool = 10 == 10;
$bool = 10 >= 10;
$bool = 10 <= 10;
$bool = 10 == '10';
$bool = 10 === '10';
$bool = 10 !== '10';
$bool = 10 != '10';
var_dump($bool);