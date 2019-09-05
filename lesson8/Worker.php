<?php
class Worker {

    private $name = 'Name Worker';
    private $age = 'Age worker';
    private $salary = 'salary worker';
//public методы setName, getName, setAge, getAge, setSalary, getSalary

    public function setName(string $name)
    {
        return $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge(int $age)
    {
        return $this->age = $age;
    }


    public function getAge()
    {
        return $this->age;
    }




    public function setSalary(int $salary)
    {
        return $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }



}