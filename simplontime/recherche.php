<?php

	include 'recupID.php';

	session_start();
	$today = date("Y-m-d");
	$day = date("d-m-Y");

		if(htmlentities(trim($_GET['date']))){
		echo "i'm here date";
		$newDate = htmlentities(trim($_GET['date']));
		try
		{	
  			$connect = new PDO ('mysql:host=localhost; dbname=todlc;charset-utf8', 'root', 'Simplon69');
		} catch ( Exeption $e)
		{
  			die('ERROR : '.$e->getMessage());
		}

		$request = "SELECT * FROM `date` WHERE `date`=".$newDate." BETWEEN '".$newDate."' AND '".$today."' AND `user_id`=".$userId;
		$result = $connect->query($request);

				$dlc = date('d-m-Y', strtotime($user['dlc']));
  				$jours = (strtotime($user['dlc']) - strtotime($today))/(24*3600);
			echo $request;
			while($user = $result->fetch()){
				if($jours <= 7){
				  echo "<div class='card'>";
  				  echo "<h1 class='produit'>".$user['name']."</h1><input type='button' class='close' onclick='supprime(".$user['id'].")' value='x'/>";
  				  echo "<p> Nous somme le ".$day."</p>";
  				  echo "<p> La Date limite de consomation est : ".$dlc."</p>";
  				  echo "<p> Il vous reste <span style='color: red'>".$jours." jours</span> pour consommer votre produit</p>";
  				  echo "</div>";
				}else{
				  echo "<div class='card'>";
  				  echo "<h1 class='produit'>".$user['name']."</h1><input type='button' class='close' onclick='supprime(".$user['id'].")' style='display: inline-block; float: right' value='x'/>";
  				  echo "<p> Nous somme le ".$day."</p>";
  				  echo "<p> La Date limite de consomation est : ".$dlc."</p>";
  				  echo "<p> Il vous reste <span style='color: green'>".$jours." jours</span> pour consommer votre produit</p>";
  				  echo "</div>";	
				}
			}	
		}else if(htmlentities(trim($_GET['name']))){
	
			$name = htmlentities(trim($_GET['name']));
			try
                	{       
                        	$connect = new PDO ('mysql:host=localhost; dbname=todlc;charset-utf8', 'root', 'Simplon69');
                	} catch ( Exeption $e)
                	{
                        	die('ERROR : '.$e->getMessage());
                	}

                	$request = "SELECT * FROM `date` WHERE `name`='".$name."' AND `user_id`=".$userId;
                	$result = $connect->query($request);
                        	while($user = $result->fetch()){
					$dlc = date('d-m-Y', strtotime($user['dlc']));
                                        $jours = (strtotime($user['dlc']) - strtotime($today))/(24*3600);
                                	if($jours <= 7){
                                  echo "<div class='card'>";
                                  echo "<h1 class='produit'>".$user['name']."</h1><input type='button' class='close' onclick='supprime(".$user['id'].")' value='x'/>";
                                  echo "<p> Nous somme le ".$day."</p>";
                                  echo "<p> La Date limite de consomation est : ".$dlc."</p>";
                                  echo "<p> Il vous reste <span style='color: red'>".$jours." jours</span> pour consommer votre produit</p>";
                                  echo "</div>";
                                }else{
                                  echo "<div class='card'>";
                                  echo "<h1 class='produit'>".$user['name']."</h1><input type='button' class='close' onclick='supprime(".$user['id'].")' style='display: inline-block; float: right' value='x'/>";
                                  echo "<p> Nous somme le ".$day."</p>";
                                  echo "<p> La Date limite de consomation est : ".$dlc."</p>";
                                  echo "<p> Il vous reste <span style='color: green'>".$jours." jours</span> pour consommer votre produit</p>";
                                  echo "</div>";
				  }
				}
		}if(htmlentities(trim($_GET['name']))&&htmlentities(trim($_GET['date']))){
			try
                        {
                                $connect = new PDO ('mysql:host=localhost; dbname=todlc;charset-utf8', 'root', 'Simplon69');
                        } catch ( Exeption $e)
                        {
                                die('ERROR : '.$e->getMessage());
                        }

                        $request = "SELECT * FROM `date` WHERE `name`=".$name." AND `date`=".$date." BEETWEEN '".$date."' AND '".$today." AND `user_id`='$userId ";
                        $result = $connect->query($request);
					
                                        $dlc = date('d-m-Y', strtotime($user['dlc']));
                                        $jours = (strtotime($user['dlc']) - strtotime($today))/(24*3600);

                                while($user = $result->fetch()){
                                        if($jours <= 7){
                                  echo "<div class='card'>";
                                  echo "<h1 class='produit'>".$user['name']."</h1><input type='button' class='close' onclick='supprime(".$user['id'].")' value='x'/>";
                                  echo "<p> Nous somme le ".$day."</p>";
                                  echo "<p> La Date limite de consomation est : ".$dlc."</p>";
                                  echo "<p> Il vous reste <span style='color: red'>".$jours." jours</span> pour consommer votre produit</p>";
                                  echo "</div>";
                                }else{
                                  echo "<div class='card'>";
                                  echo "<h1 class='produit'>".$user['name']."</h1><input type='button' class='close' onclick='supprime(".$user['id'].")' style='display: inline-block; float: right' value='x'/>";
                                  echo "<p> Nous somme le ".$day."</p>";
                                  echo "<p> La Date limite de consomation est : ".$dlc."</p>";
                                  echo "<p> Il vous reste <span style='color: green'>".$jours." jours</span> pour consommer votre produit</p>";
                                  echo "</div>";
                                  }

				}
		}else{
			echo 'ERROR';
		}
?>
