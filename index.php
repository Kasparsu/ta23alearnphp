<?php
$num = 15;
if($num > 10) {
    var_dump('Suurem');
} elseif ($num < 10){

} else {

}

$day = date('w', strtotime('06.09.2025'));
var_dump($day);

switch($day) {
    case 1:
        var_dump('Esmaspäev');
        break;
    case 2:
        var_dump('Teisipäev');
        break;
    case 3:
        var_dump('Kolmapäev');
        break;
    case 4:
        var_dump('Neljapäev');
        break;
    case 5:
        var_dump('Õhtul ');
    case 6:
        var_dump('Piduuuu');
        break;
    case 7:
        var_dump('Pühapäev');
        break;
    default:
        var_dump('Imelikpäev');
}