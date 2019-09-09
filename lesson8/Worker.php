<?php
class Worker {

    private $name = 'Name Worker';
    private $age = 'Age worker';
    private $salary = 'salary worker';
//public методы setName, getName, setAge, getAge, setSalary, getSalary

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge(int $age)
    { if ($this->checkAge($age)) {
        $this->age = $age;
        }
    }


    public function getAge()
    {
        return $this->age;
    }




    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }


    private function checkAge($age)
    {
        if ($age > 1 && $age < 100){
            return true;
        }else {return false;
        }
    }

}
