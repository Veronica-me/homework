<?php

require_once 'Users.php';

$user = new Users('Mr.Smith', '1998-12-20', 'security', '6300');

$userStr = serialize($user);

printf('Данные серилизации: <br> %s  <br><br>Объект после серилизации: <br>', $userStr);

$userAfterS = unserialize($userStr, ['allowed_classes'=> ['Users']]);



var_dump($userAfterS);




