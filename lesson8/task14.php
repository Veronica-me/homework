<?php
require_once 'Worker.php';

$worker1 = new Worker();
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new Worker();
$worker2->setName('Вася');
$worker2->setAge(26);

$worker2->setSalary(2000);


var_dump($worker1);
var_dump($worker2);

echo '<br>';
$sum1 = $worker1->getSalary() + $worker2->getSalary();

echo 'Сумма зарплат: '.$sum1.'<br>';
$sum2 = $worker1->getAge() + $worker2->getAge();
echo 'Сумма возрастов: '.$sum2.'<br>';

showWorkers($worker1);
showWorkers($worker2);

function showWorkers(Worker $worker){
    printf('Работник: %s; Возраст: %s <br>', $worker->getName(), $worker->getAge());
}
