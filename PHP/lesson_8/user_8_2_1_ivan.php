<?php

require "worker_8_2.php"; 

$name1 = new Worker;
$name2 = new Worker;

$name1->setName("Иван");
$name1->setAge(25);
$name1->setSalary(1000);

$name2->setName("Вася");
$name2->setAge(26);
$name2->setSalary(2000);


echo $name1->getSalary() + $name2->getSalary();
// Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте
// второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму
// зарплат Ивана и Васи.