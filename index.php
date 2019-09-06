<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Users.php';
$countUsers = 0;

$user1 = new Users('Name1', 25);
$user2 = new Users('Name2', 67);



printf('<p style="color: aqua">U nas est: %s  userov </p><br>', $user1::getCountUsers());


$user1->year = 2000;
$user1->mounth = 12;
var_dump(isset($user1->year));

$year = $user1->year;

$user1->show();
printf('God na4ala raboty: %s, %s <br>', $year, $user1->mounth);


$user2->show();


unset($user1);
printf('<p style="color: greenyellow">U nas est: %s  userov </p><br>', Users::getCountUsers());