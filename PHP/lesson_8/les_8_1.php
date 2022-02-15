<?php
require "index8_1.php";

$pupkin = new Student;

$lupkin = new Student;


$pupkin->setName("Вася");
$pupkin->setAge(20);
$pupkin->setGroup("U1002");


$lupkin->setName("Иван");
$lupkin->setAge(21);
$lupkin->setGroup("U1001");

echo $pupkin->getName();
echo $lupkin->getName();


