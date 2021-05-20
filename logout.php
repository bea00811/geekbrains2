<?php

if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
        unset($_COOKIE['login']); 
        unset($_COOKIE['password']); 
        setcookie('login', '', 0, '/');
        setcookie('password',  '', 0, '/');

    
} else {
    return false;
}


print_r($_COOKIE);