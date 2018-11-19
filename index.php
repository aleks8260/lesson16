<?php
//require_once "db.php";
//
//$db = new Database('localhost','root','','cms');
//
//$users = $db->selectAll('SELECT * FROM users');
//echo '<pre>';
//    print_r($users);
//echo '</pre>';
if(isset($_GET['msg'])){
    echo $_GET['msg'];
}
?>