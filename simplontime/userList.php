<?php
session_start();
include 'recupID.php';
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
                <li id='li-a'><h1>SimplOnTime</h1></li>
                <li><a href='ToDLC.php'>Acceuil</a></li>
                <li><a href='userPrimary.html'>Prioritées</a></li>
                <li><a href='userPage.php'>Mon compte</a></li>
		<li><input type='text' id='name' class='text' name='name' placeholder='recherche'/><input type='date' id='date' name='date'/><input type='button' id='recherche' class='butt' name='recherche' value='rechercher'/></li>
            </ul>
        </nav>
        <section id='section'>
            <h1>Liste complétes</h1>
            <div id='res'></div>
        </section>
        <script>
            
            var request = new XMLHttpRequest;

            
            var affichage = function(){
              var data = this.responseText;
              document.getElementById('res').innerHTML = data;
            }
               
            var afficheTout = function(el){
            request.onload = affichage;
            request.open('GET', 'process.php', true);
            request.send();
            }
            afficheTout();
            
            var supprime = function(el){ 
                request.open('GET', 'supprime.php?id='+el, true);
                request.send();
                setTimeout(function(){return afficheTout();}, 50);
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
                    var date = document.getElementById('date').value;
                    var name = document.getElementById('name').value;
                    document.location = 'search.php?date='+date+'&&name='+name;
                }else{
                    console.log('Error');
                }
                
            }
            
            document.getElementById('recherche').addEventListener('click', search);
        </script>
    </body>
</html>
