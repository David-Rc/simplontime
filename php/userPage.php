<?php
include 'recupID.php';
if($userId == null){
    header("Location: login.html");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <link rel="stylesheet" type="text/css" href='desing.css'>
    </head>
    <body>
        <nav>
            <ul id='list'>
                <li ><div id='li-a'><h1>SimplOnTime</h1></div></li>
		<li><a href='ToDLC.php'>Acceuil</a></li>
                <li id='li-b'><a href='userList.php'>Ma Liste</a></li>
                <li id='li-c'><a href='userPrimary.html'>Prioritées</a></li>
                <li><a href='logout.php'>Deconnexion</a></li>
            </ul>
        </nav>
	<?php
	echo "<div id='form'>";
	echo "<form>";
	echo "<input id='name' class='txt' style='display: none; margin:auto' type='text' placeholder='Votre nouvel identifiant'></br>";
        echo "<input class='confirm butt' style='display: none; margin:auto' onclick='modifName()' type='button' value='Confirmer'/>";
	echo "<input class='modif butt' style='width: 12%; margin:auto' type='button' onclick='viewModif(0)' value='Modifier Identifiant' />";

	echo "<input id='password' class='txt' style='display: none; margin:auto' type='password' placeholder='nouveau mot de passe'></br>";
	echo "<input id='confPass'style='display: none; margin: auto' type='password' placeholder='confirmer votre mot de passe'></br>";
	echo "<input class='confirm butt' style='display: none; margin: auto' onclick='modifPass()' type='button' value='Confirmer'/>";
	echo "<input class='modif butt' style='width: 12%' type='button' onclick='viewModif(1)'value='Modifier Mot de passe'/></br>";
	echo "<input type='button' style='width: 12%; margin: 1% 0' class='butt' onclick='supprimeCompte()' value='Supprimer le compte'/>";
	echo "</form>";
	echo "</div>";
	?>
	<div id='res'></div>
	<script>
		var request = new XMLHttpRequest;
		
		var viewModif = function(i){
			document.getElementsByClassName('txt')[i].style.display = 'block';
			if(i===1){
			document.getElementById('confPass').style.display = 'block';
			}
			document.getElementsByClassName('confirm')[i].style.display = 'block';
			document.getElementsByClassName('modif')[i].style.display= 'none';
		}	

		var afficheResultat = function(){
			var data = this.responseText;
			document.getElementById('res').innerHTML = data;
		}

		var modifPass = function(){
			var pass = document.getElementById('password').value;
			var confPass = document.getElementById('confPass').value;
			if(pass === confPass){
			request.onload = afficheResultat;
			request.open('GET', 'modif.php?pass='+pass, true);
			request.send();
			}else{
				document.getElementById('res').textContent = "Vos mot de passe ne correspondent pas !"
			}
		}
		
		var modifName = function(){
			var name = document.getElementById('name').value;
                        request.onload = afficheResultat;
                        request.open('GET', 'modif.php?name='+name, true);
                        request.send();
		}
		var traiteResultat = function(){
			var data = this.responseText;
			console.log(data);
		}

		var supprimeCompte = function(){
			var confirme = confirm('Voulez vous vraiment supprimer le compte dans son intégralité ?');
			if(confirme === true){
			request.onload = traiteResultat;
			request.open('GET', 'delete.php', true);
			request.send();
			}else{
			return;
			}
		}
	</script>
   </body>
</html>
