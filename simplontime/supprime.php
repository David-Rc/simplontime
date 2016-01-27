<?php
$id = htmlentities(trim($_GET['id']));

if(isset($id)){
    try
{
  $connect = new PDO ('mysql:host=localhost; dbname=todlc;charset-utf8', 'root', 'Simplon69');
} catch ( Exeption $e)
{
  die('ERROR : '.$e->getMessage());
}

$request = "DELETE FROM `date` WHERE `id`=".$id."";
$result = $connect->query($request);


try
{
  $connect = new PDO ('mysql:host=localhost; dbname=todlc;charset-utf8', 'root', 'Simplon69');
} catch ( Exeption $e)
{
  die('ERROR : '.$e->getMessage());
}

$request = "DELETE FROM `tmp` WHERE `id`=".$id."";
$result = $connect->query($request);
}
?>
