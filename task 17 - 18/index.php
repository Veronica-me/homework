<?php
require_once 'load.php';


const TYPE_FILE = 'csv'; // json xml
$select = new App\SelectType(TYPE_FILE, 'data/user.' . TYPE_FILE);
$read = $select->getRead();
if (!$read instanceof \App\ReadInterface) {
    echo 'Нет возможности прочитать файл!';
    exit();
}
$data = $read->read();
$write = $select->getWrite();


showTable($data);

$newUser = [$_GET['name'], $_GET['dateOfBirthday']];
$write->write($newUser);


function showTable ($data)
{
    echo '<table>';

    foreach ($data as $user){

        echo '<tr>';
        echo '<th>' .$user[0].'</th>';
        echo '<th>' .$user[1].'</th>';
        echo '</tr>';
    }

    echo '</table>';
}

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


