<?php

class Box {
    public $width;
    public $heigth;
    public $length;
    
    public function __construct($w=0, $h=0, $l=0)
    {   
        $this->width = $w;
        $this->heigth = $h;
        $this->length = $l;
    }

    public function volume(){
        return $this->width * $this->heigth * $this->length;
    }
}

$box1 = new Box(10, 10, 10);



var_dump($box1);
var_dump($box1->volume());

$box2 = new Box(20, 20, 20);


var_dump($box2);
var_dump($box2->volume());
var_dump($box1);