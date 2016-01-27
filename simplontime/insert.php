<?php
include 'recupID.php';
session_start();

$dlc = htmlentities(date($_GET['date']));
$newDate = date("Y-m-d", strtotime($dlc));
$nom = htmlentities($_GET['name']);
$date = date("Y-m-d");
$day = date("d-m-Y");
$jours = $date - $newDate;

try
{
     $connect = new PDO ('mysql:host=localhost; dbname=todlc;charset-utf8', 'root', 'Simplon69');
} catch ( Exeption $e )
{       die ('ERROR : '.$e->getMessage());
}
	$request = "INSERT INTO `date`(`id`, `name`, `date`, `dlc`, `user_id`) VALUES (NULL, '$nom','$date','$newDate' ,'$userId')";
	$result = $connect->query($request);
	echo $request;
try
{
     $connect = new PDO ('mysql:host=localhost; dbname=todlc;charset-utf8', 'root', 'Simplon69');
} catch ( Exeption $e )
{       die ('ERROR : '.$e->getMessage());
}
	$request = "INSERT INTO `tmp`(`id`, `name`, `date`, `dlc`, `user_id`) VALUES (NULL, '$nom','$date','$newDate' ,'$userId')";
	$result = $connect->query($request);

  ?>
