<?php
session_start();
include "recupID.php";
	try
	{
        	$connect = new PDO ('mysql:host=localhost; dbname=todlc;charset-utf8', 'root', 'Simplon69');
	} catch ( Exeption $e )
	{       die ('ERROR : '.$e->getMessage());
	}
		$request = "DELETE FROM `user` WHERE `id`=".$userId;
		$result = $connect->query($request);
		echo "Premiere request : ".$request;

	try
        {
                $connect = new PDO ('mysql:host=localhost; dbname=todlc;charset-utf8', 'root', 'Simplon69');
        } catch ( Exeption $e )
        {       die ('ERROR : '.$e->getMessage());
        }
                $request = "DELETE FROM `date` WHERE `user_id`=".$userId;
                $result = $connect->query($request);
		echo "Deuxiéme requete : ".$request;

?>
