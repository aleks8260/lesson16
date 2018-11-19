<?php

class Avtorization
{
    private $name;
    private $password;

    function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
        if(){
            echo "Добро пожаловать";
        }else{
            echo "Не успешный вход";
        }
    }
}

?>