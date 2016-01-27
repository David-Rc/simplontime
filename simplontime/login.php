<?php
$login = htmlentities($_GET['name']);
$password = htmlentities($_GET['password']);
		try{
	 $connect = new PDO('mysql:host=localhost; dbname=todlc;charset-utf8', 'root', 'Simplon69');
                        } catch ( Exeption $e)
                        {
                        die('ERROR : '.$e->getMessage());
                        }
	 $request = "SELECT * FROM `user` WHERE `name`='$login' AND `password`='$password'";
	 $result = $connect->query($request);
	 $user = $result->fetch(); 
		if($login == $user['name'] && $password == $user['password']){
			session_start();
			$_SESSION['login'] = $login;
                	$_SESSION['id'] = $id;
			echo $request;
	        }else{
			echo $request;
		}
?>
