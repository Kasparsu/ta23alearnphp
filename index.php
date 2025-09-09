<?php

for($i=0;$i<10;$i++){
    var_dump($i);
}

for($i=10;$i>0;$i--){
    var_dump($i);
}

for($i=1;$i<1_000_000;$i*=2){
    var_dump($i);
}
$time = time();
$i = 0;
while(time() < $time+1){
    var_dump(time());
    $i++;
}
var_dump($i);

$i = 10;
while($i < 10){
    var_dump('WHILE');
}
do {
    var_dump('DO');
} while($i < 10);

$array = [1,2,3];

foreach($array as $key=>$value){
    var_dump($key, $value);
}

foreach(array_keys($array) as $value){
    var_dump($value);
}

$a = 1;
$b = &$a;
$b = 2;
var_dump($a);

$array = [1,2,3];

for($i=0;$i<count($array);$i++){
    $value= &$array[$i];
    $value *= 2;
}

foreach($array as $value){
    $value *= 2;
}

var_dump($array);

foreach($array as &$value){
    $value *= 2;
}

var_dump($array);

