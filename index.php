<?php

class Cat {
    public function __construct()
    {
        var_dump('Class was created');
    }
    public function __call($name, $args) {
        var_dump($name, $args);
    }

    public function __invoke($value)
    {
        var_dump($value);
    }

    public function __get($name){
        var_dump($name);
        return 'Cool shiiit';
    }

    public function __set($name, $value){
        var_dump($name, $value);
       
    }

    public function __toString()
    {
        return 'Mjäu';
    }

    public function __destruct()
    {
        var_dump('Class was destroyed');
    }
}

function makeCat(){
    $cat = new Cat();
}

makeCat();
$kitty = new Cat();
var_dump($kitty);
var_dump($kitty->mood);
$kitty->color = 'Rainbow';
$kitty->throwShit('many', 'smelly', 'poops', 1 , 2 , 3);
$kitty('something');
echo $kitty;
$kitty = 1;
var_dump('something');