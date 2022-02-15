<?php
// Определение класса
class Student
{
    private $name;
    private $age;
    private $group;

    public function setName($name){
        $this->name = $name; 
    }
    public function getName(){
        return $this->name;
    }

    public function setAge($age){
        $this->age = $age;
    }
    public function getAge(){
        return $this->age;
    }

    public function setGroup($group){
        $this->group = $group;
    }
    public function getGroup(){
        return $this->group;
    }
}

?> 

<!-- Сделайте класс Student, в котором будут следующие private поля - name
(имя), age (возраст), group (группа) и следующие public методы setName, getName,
setAge, getAge, setGroup, getGroup.
Создайте 2 объекта этого класса: 'Иван', возраст 21, группа U1001 и 'Вася',
возраст 20, группа U1002.
Выведите на экран группы Ивана и Васи. Выведите на экран сумму
возрастов Ивана и Васи.  -->