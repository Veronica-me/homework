<?php
require_once 'InterfaceReadUser.php';
require_once 'InterfaceWriteUser.php';
require_once 'csv/Read.php';
require_once 'csv/Write.php';


$file = 'csv/data.csv';
$newUser = [$_GET['name'], $_GET['dateOfBirthday']];
$addUser = new Write($file);
$addUser->setFile($newUser);

$csvData = new Read($file);
$getCsv = $csvData->getFileData();



?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <title>Работа с файлами</title>
</head>
<body>
<p>Добавьте пользователя и дату рождения :</p>
<form action="index.php" method="get">
    Введите имя: <input type="text" name="name" /><br>
    Введите дату рождения: <input type="date" name="dateOfBirthday" /><br>
    <input type="submit" />
</form>

</body>

</html>
