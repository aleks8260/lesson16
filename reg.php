<?php
    require_once "reg.class.php";
    require_once "db.php";
    require_once "password.class.php";
    $form = new regisration($_POST);
    $db = new Database('localhost','root','','cms');
    if($_POST){
        if($form->validate()){
            //$db->insertUser();
            $name = $db->escape($form->getName());
            $email = $db->escape($form->getEmail());
            //$password = $db->escape($form->getPassword());
            $password = new Password($db->escape($form->getPassword()),'lorem ipsum dollor1');
                                     
            //Выбрать всех юзеров
            //var_dump($name);
            $res = $db->selectAll("SELECT * FROM users WHERE username = '$name'");
//            var_dump($res);
//            die();
            if($res){
                echo $msg = 'Такой пользователь уже есть';
            }else{
                $db->action("INSERT INTO users(username, password, email) VALUES('{$name}', '{$password}', '{$email}')");
//                $db->selectAll("INSERT INTO users(username, email, password) VALUES('{$name}', '{$password}', '{$email}')");
                header("Location: index.php?msg='Рег успешно'");
            }
            //echo "Регистрация успешна";
        }else{
            echo $form->passwordMatch() ? 'Не все поля заполнены' : "Пароли не совпадают";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       <!--Для того чтобы данные оставались, которые пытались отправить, при том что не отрпавилось-->
        <input type="text" name="name" placeholder="name" value="<?=$form->getName();?>">
        <input type="text" name="email" placeholder="email" value="<?=$form->getEmail();?>">
        <input type="text" name="password" placeholder="password">
        <input type="text" name="confirPassword" placeholder="confirPassword">
        <input type="submit">
    </form>
</body>
</html>