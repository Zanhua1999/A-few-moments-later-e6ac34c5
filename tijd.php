<?php


$input   = $argv[1];



$aantalSec = 0;

foreach ($argv as $value) {
    $getal = substr($value, 0, -1);
    $letter = substr($value, -1);
    switch ($letter) {
        case 's':
            $aantalSec += $getal;
            
            break;
        case 'm':
            $aantalSec += ($getal * 60);
            break;
        case 'u':
            $aantalSec += ($getal * 3600);
            break;
        case 'd':
            $aantalSec += ($getal * 86400 );
            break;
        default:
            
            break;
    }
  
}

echo $aantalSec . " seconden";

?>