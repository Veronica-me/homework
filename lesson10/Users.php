<?php
 class Users
 {
     private $name;
     private $dateOfBirthday; //yyyy-mm-dd
     private $position;
     private $salary;
     private static $countUsers = 0;

     public function __construct($name, $dateOfBirthday, $position, $salary)
     {
         self::$countUsers++;
         $this->name = $name;
         $this->dateOfBirthday = $dateOfBirthday;
         $this->position = $position;
         $this->salary = $salary;

     }

     public static function getCountUsers()
     {

         return self::$countUsers;
     }

     public function __clone()
    {
        self::$countUsers++;
        $this->position = null;
        $this->salary = null;
        // TODO: Implement __clone() method.
    }


     public function setSalary ($salary)
     {
         $this->salary = $salary;
     }

     public function setPosition ($position)
     {
         $this->position = $position;
     }

     public static function __callStatic   ($name, $arguments)
     {  if ($name === 'setCountUsers') {
            self::$countUsers = $arguments[0];
            }
     }

     public function __sleep()
     {
         return array('name', 'dateOfBirthday');
         // TODO: Implement __sleep() method.
     }

     public function __wakeup()
     {
          $this->position = 'empty';
          $this->salary = 'empty';
     }

 }
