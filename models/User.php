<?php

class User {
    public $name;
    public $email;
    private $password;

    function validate($value){
        switch ($value){
            case 'name':
                if (mb_strlen($value) > 8 && mb_strlen($value)< 255){
                    $name = $_POST['name'];
                    echo "Введённое имя пользователя: " . $name . "<br>";
                }
                else echo "Имя пользователя введено некорректно";
                break;
            case 'email':
                $email = $_POST['email'];
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "Введённая эл.почта: " . $email . "<br>";
                }
                else echo "Эл. почта указана неверно" . "<br>";
                break;
            case 'password':

        }
    }
    //function output(){}
}