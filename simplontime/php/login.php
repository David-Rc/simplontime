<?php
$login = $_GET['name'];
$password = $_GET['password'];
        if($password&&$login){
                $password = crypt($password, '$2a$');
                try{
        echo $password;
         $connect = new PDO('mysql:host=localhost; dbname=todlc;charset=utf8', 'root', 'Simplon69');
                        } catch ( Exeption $e)
                        {
                        die('ERROR : '.$e->getMessage());
                        }
         $request = "SELECT * FROM `user` WHERE `name`='$login' AND `password`='$password'";
                echo $request;
         $result = $connect->query($request);
         $user = $result->fetch();
                if($login == $user['name'] && $password == $user['password']){
                        session_start();
                        $_SESSION['login'] = $login;
                        $_SESSION['id'] = $id;
                        header('Location: acceuil.php');
                }else{
                        echo $request;
                }
        }

?>

