<?php
require "user8_2.php"; 

class Worker extends User
{
    private $salary;

    public function setSalary($salary){
        $this->salary = $salary; 
    }
    public function getSalary(){
        return $this->salary;
    }


}

// Сделайте класс User, в котором будут следующие protected поля - name (имя),
// age (возраст), public методы setName, getName, setAge, getAge.
// Сделайте класс Worker, который наследует класс User и вносит
// дополнительное private поле salary (зарплата), а также методы public getSalary и
// setSalary.
// Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте
// второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму
// зарплат Ивана и Васи.