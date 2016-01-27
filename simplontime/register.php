<?php
	$login = htmlentities($_GET['name']);
	$password = htmlentities($_GET['password']);
		
		
			
			try
			{
  			$connect = new PDO ('mysql:host=localhost; dbname=todlc;charset-utf8', 'root', 'Simplon69');
			} catch ( Exeption $e)
			{
  			die('ERROR : '.$e->getMessage());
			}
			$date = new DateTime();
                        $date1 = $date->format('Y-m-d');
			$request = "SELECT * FROM  `user` WHERE `name`='".$login."'";
                        $query_date = "ALTER TABLE user ADD `date` DATE";
			$result = $connect->query($request);
			$user = $result->fetch();
			echo $user['name'];	
			if($login != $user['name']){
				session_start();
				try{$connect = new PDO ('mysql:host=localhost; dbname=todlc;charset-utf8', 'root', 'Simplon69');}
				catch (Exeption $e){die('ERROR : '.$e->getMessage());}
				$query_date = "ALTER TABLE user ADD `date` DATE";
				$request = "INSERT INTO `user` (`id`, `name`, `password`, `date`) VALUE ('', '$login', '$password', '$date1')";
				$result = $connect->query($request);
				
				echo $request;
			} else{
			echo 'Change your login';
			}

	
		
		


?>
