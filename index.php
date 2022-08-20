<?php
include_once 'models/User.php';
include_once 'views/form.php';

    $user = new User();

    if (isset($_POST) && count($_POST) > 0) {
        $user->validate($_POST);

        /* ПЕРЕНЕСТИ В функции
         * $name = $_POST['name'];
        echo "Введённое имя пользователя: " . $name . "<br>";

        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Введённая эл.почта: " . $email . "<br>";
        }
        else echo "Эл. почта указана неверно" . "<br>";

        $password = $_POST['password'];
        echo "Введённый пароль: " . md5($password) . "<br>";*/

    }
