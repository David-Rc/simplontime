<?php
session_start();
include 'recupID.php';
?>
<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" type="text/css" href='desing.css'>
        <meta charset='UTF-8'>      
    </head>
    <body>
        <nav>
            <ul id='list'>
                <li ><div id='li-a'><h1>SimplOnTime</h1></a></div></li>
		<li><a href='ToDLC.php'>Acceuil</a></li>
                <li id='li-b'><a href='userList.php'>Ma Liste</a></li>
                <li id='li-c'><a href='userPrimary.html'>Urgent</a></li>
                <li id='li-d'><a href='userPage.php'>Mon compte</a></li>
                <li><input type='text' id='name' name='name' placeholder='recherche'/></li>
                <li><input type='date' id='date' name='date'/></li>
                <li><input type='button' id='recherche' name='recherche' value='rechercher'</li>
            </ul>
        </nav> 
        <section id='section'>
	    <h1>Resultats de votre recherche</h1>
            <div id='res'></div>
        </section>
        <script>

	var request = new XMLHttpRequest;

	var affichage = function(){
              var data = this.responseText;
              document.getElementById('res').innerHTML = data;
              console.log(this.responseURL);
            }

	var search = function(){
                
                var name;
                var date;
                
                if(document.getElementById('date').value == false){
                    
                    name = document.getElementById('name').value;
                    document.location = 'search.php?name='+name;
                }else if(document.getElementById('name').value == false){
                    date = document.getElementById('date').value;
                    document.location = 'search.php?date='+date;
                }else if(document.getElementById('date').value != false && document.getElementById('name') != false){
                    name = document.getElementById('name').value;
                    date = document.getElementById('date').value;
                    document.location = 'search.php?date='+date+'&&name='+name;
                }else{
                    console.log('Error');
                }
                
            }

       	var supprime = function(el){ 
                request.open('GET', 'supprime.php?id='+el, true);
                request.send();
                setTimeout(function(){location.reload();}, 50);
            }
   
            document.getElementById('recherche').addEventListener('click', search)
	</script>
   </body>
</html>
