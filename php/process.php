<?php
include 'recupID.php';
//include 'supprime.php';
session_start();
try
{
  $connect = new PDO ('mysql:host=localhost; dbname=todlc;charset-utf8', 'root', 'Simplon69');
} catch ( Exeption $e)
{
  die('ERROR : '.$e->getMessage());
}

$request = "SELECT * FROM `date` WHERE `user_id`='".$userId."'";
//$row = $request->rowCount();
$result = $connect->query($request);

$date = date("Y-m-d");
$day = date("d-m-Y");

while($user = $result->fetch()){
  $dateCreate = date('d-m-Y', strtotime($user['date']));
  $dlc = date('d-m-Y', strtotime($user['dlc']));
  $jours = (strtotime($user['dlc']) - strtotime($date))/(24*3600);
if($jours <=7){
  echo "<div class='card'>";
  echo "<h1 class='produit'>".$user['name']."</h1><input type='button' class='close' onclick='supprime(".$user['id'].")' value='x'/>";
  echo "<p> Date de création : ".$dateCreate."</p>";
  echo "<p> Echéance : ".$dlc."</p>";
  echo "<p> Il vous reste <span style='color: red'>".$jours." jours</span> avant échéance.</p>";
  echo "</div>";
}else{
  $dlc = date('d-m-Y', strtotime($user['dlc']));
  echo "<div class='card'>";
  echo "<h1 class='produit'>".$user['name']."</h1><input type='button' class='close' onclick='supprime(".$user['id'].")' style='display: inline-block; float: right' value='x'/>";
  echo "<p> Date de création : ".$dateCreate."</p>";
  echo "<p> Echéance : ".$dlc."</p>";
  echo "<p> Il vous reste <span style='color: green'>".$jours." jours</span> avant échéance.</p>";
  echo "</div>";
}
}
echo $user['id'];


  //echo  $jours = $date - $userDate['dlc'];
  //if( !empty($userDate['id'])){
    //echo "NOT FOUND !";
  //}else
  //{

      //echo "<div class='card'>
            //<h1 class='produit'>".$userDate['name']."</h1>
            //<p>".$day."</p>
            //<p>".$userDate['dlc']."</p>
            //<p>Il vous reste : ".$jours." jours, pour consommer votre produit</p>
            //</div>";
    //};




?>
