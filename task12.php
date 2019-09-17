<?php

$name = $_GET['name'] ?? null;
if ($name) {
    setcookie('name', $_GET['name']);
    $count = $_COOKIE['visit'] += 1;
    setcookie('visit', $count);
}
else {
    setcookie('visit', '1');
}

if (array_key_exists('name', $_COOKIE)) {
    printf('Имя: %s', $_COOKIE['name']);
}
echo '<br>';
printf('Страница показана: %s раз', $_COOKIE['visit']);
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <title>cockie</title>
</head>
<body>
<p>если это не вы, то:</p>
<form action="task12.php" method="get">
    Введите имя: <input type="text" name="name" />
    <input type="submit" />
</form>

</body>

</html>
