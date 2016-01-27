<?php
session_start();
include 'recupID.php';
$id = htmlentities(trim($_GET['id']));

if(isset($id)){
    try
{
  $connect = new PDO ('mysql:host=localhost; dbname=todlc;charset-utf8', 'root', 'Simplon69');
} catch ( Exeption $e)
{
  die('ERROR : '.$e->getMessage());
}
$request = "DELETE FROM tmp WHERE user_id=$userId";
echo $request;
$result = $connect->query($request);
}
?>
