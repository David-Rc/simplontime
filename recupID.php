<?php
session_start();
try
{
        $connect = new PDO ('mysql:host=localhost; dbname=todlc;charset-utf8', 'root', 'Simplon69');
} catch ( Exeption $e )
{       die ('ERROR : '.$e->getMessage());
}

        $request = "SELECT * FROM `user` WHERE `name`='".$_SESSION['login']."'";
        $result = $connect->query($request);
        $user = $result->fetch();
        $_SESSION['name'] = $user['name'];
        $userName = $_SESSION['name'];
        $_SESSION['id'] = $user['id'];
        $userId = $_SESSION['id'];
?>
