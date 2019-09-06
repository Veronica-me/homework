<?php
class Users
{
    const USER_MIN_SALARY = 100;

    private $name;

    private $age;

    private $salary = 0;

    private $data = [];

    protected static $countUsers = 0;

    public function __construct($name, $age)
    {
        self::$countUsers++;
        $this->name = $name;
        $this->age = $age;
        $this->salary = 100;
    }


    public function __destruct()
    {
        self::$countUsers--;
        // TODO: Implement __destruct() method.
    }

    public function __get($name): ?string
    {
        return $this->data[$name] ?: null ;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __isset($name) :string
    {
       return true;
    }

    /**
     * @return int
     */
    public static function getCountUsers(): int
    {

        return self::$countUsers;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getSalary(): ?int
    {
        return $this->salary;
    }

    public function setSalary(): void
    {
        $this->salary = $s;
    }


    function show ()
    {
        printf('Name: %s, Age: %s, Salary: %s <br>',
            $this->getName(),
            $this->getAge(),
            $this->getSalary()
        );
    }


}
