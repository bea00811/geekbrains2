<?php
function checkAuth(string $login, string $password): bool 




{


	/*Устанавливает соединение с локальным хостом */
    $connection = mysqli_connect('localhost', 'root', '', 'photo_bd') or die('Ошибка подключения к БД');

    $sql = "SELECT * FROM users ";
    $result1 = mysqli_query($connection, $sql);


/*выбирает с помощью встроенной функции mysqli_fetch_all   все строки из переменной $res и помещает их в массив, с помощью MYSQLI_ASSOC делаем из простого ассоциативный массив  */
$users = mysqli_fetch_all($result1, MYSQLI_ASSOC);
    // $users = require __DIR__ . '/users.php';

    foreach ($users as $user) {     
       if ($user['login'] === $login && $user['password'] === $password )


        {
            return true;
        }
    }

    return false;
}




function getUserLogin(): ?string
{
    $loginFromCookie = $_COOKIE['login'] ?? '';
    $passwordFromCookie = $_COOKIE['password'] ?? '';

    if (checkAuth($loginFromCookie, $passwordFromCookie)) {
        return $loginFromCookie;
    }

    return null;
}