<?php
$count = 0;
$name = $_GET['name'] ?? null;
if ($name) {
    setcookie('name', $_GET['name']);
    $count++;
}
if (array_key_exists('name', $_COOKIE)) {
    printf('Имя: %s', $_COOKIE['name']);

}
echo '<br>';
printf('Страница показана: %s раз', $count);
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