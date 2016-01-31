<?php
include 'recupID.php';

$newPassword = $_GET['pass'];
$newName = $_GET['name'];

if($newPassword){
	try
	{
  		$connect = new PDO ('mysql:host=localhost; dbname=todlc;charset-utf8', 'root', 'Simplon69');
	} catch ( Exeption $e)
	{
  	die('ERROR : '.$e->getMessage());
	}

	$request = "UPDATE `user` SET `password`='".$newPassword."' WHERE `id`=".$userId;
	$result = $connect->query($request);

	echo "Votre mot de passe à bien ête modifié";
}else if($newName){
	try
        {
                $connect = new PDO ('mysql:host=localhost; dbname=todlc;charset-utf8', 'root', 'Simplon69');
        } catch ( Exeption $e)
        {
        die('ERROR : '.$e->getMessage());
        }

        $request = "UPDATE `user` SET `name`='".$newName."' WHERE `id`=".$userId;
        $result = $connect->query($request);

        echo "Votre identifiant à bien ête modifié";
}

?>
