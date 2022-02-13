<?php

$a = "Теперь пора всем хорошим людям прийти на помощь стране";
// $b = "Пора теперь стране прийти на помощь всем хорошим людям";
// echo $a;

$array = explode(" ", $a);
$arrayB = array(strtoupper($array[1]), strtolower($array[0]), $array[8], $array[5], $array[6], $array[7], $array[2], $array[3], $array[4]);
// var_dump($arrayB);
echo implode(" ", $arrayB);