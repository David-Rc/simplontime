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
                <li id='li-b'><a href='userList.php'>Ma Liste</a></li>
                <li id='li-c'><a href='userPrimary.html'>Prioritées</a></li>
                <li id='li-d'><a href='userPage.php'>Mon compte</a></li>
                <li><input type='text' id='name' class='text' name='name' placeholder='recherche'/><input type='date' id='date' name='date'/><input type='button' id='recherche' class='recherche' name='recherche' value='rechercher'/></li>
                <li><a href='logout.php'>Deconnexion</a></li>
            </ul>
        </nav>
            <?php
            echo "<h1 id='welcome'>Bienvenue ".$userName."</h1>";
        ?>
            <form>
            <label for 'text'>Saisie : </label><input class='first text' type='text'/>
            <label for 'dlc'>Echéance : </label>
            <input type='date' class='first' id='dlc'/>
            <input class='first butt' type='button' onclick='insert()' name='submit' value='Ajouter'/>
            </form>
        <section id='section'>
            <div id='res'></div>
        </section>
        <script>
            
            var request = new XMLHttpRequest;
            
            var affichage = function(){
              var data = this.responseText;
              document.getElementById('res').innerHTML = data;
              
            }
            
            var afficheTemporaire = function() {
                request.onload = affichage;
                request.open('GET', 'afficheTempo.php', true);
                request.send();
            }
            var traiteResultat = function(){
                var data = this.responseText;
                console.log(data);
            }
            var insert = function(){
                var dateLimit = document.getElementById('dlc').value;
                var nom = document.getElementsByClassName('text')[1].value;
                request.onload = afficheTemporaire;
                request.open('GET', 'insert.php?date='+dateLimit+'&name='+nom, true);
                request.send();
            }
            
            var supprimeTempo = function(){
                request.open('GET', 'supprimeTempo.php', true);
                request.send();
            }
            supprimeTempo();
            
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
            
            
            
      ///////////////////////////////////////////////////////////////////////////////////////////      
            
            /*var supp;
            
                var afficheCarte = function(){
                var div = document.createElement('div');
                document.getElementById('section').appendChild(div)
                div.classList.add('card');
                supp = document.createElement('input');
                var produit = document.createElement('h1');
                div.appendChild(supp);
                supp.setAttribute('type', 'button')
                supp.setAttribute('value', 'X');
                supp.classList.add('close');
                supp.setAttribute('onclick', 'supprime(i)');
                supp.style.display = 'inline-block';
                div.appendChild(produit);
                produit.textContent = nom;
                produit.classList.add('produit');
                produit.style.display = 'inline-block';
                date_du_jour = document.createElement('p');
                produit.appendChild(date_du_jour);
                date_du_jour.textContent = day;
                calculDate();
            }


            var diff;

            var calculDate = function(){

               var tmp = Date.parse(dateLimit) - now;

                diff = {}                           // Initialisation du retour

                tmp = Math.round(tmp/1000);             // Nombre de secondes entre les 2 dates
                diff.sec = tmp % 60;                    // Extraction du nombre de secondes

                tmp = Math.round((tmp-diff.sec)/60);    // Nombre de minutes (partie entière)
                diff.min = tmp % 60;                    // Extraction du nombre de minutes

                tmp = Math.round((tmp-diff.min)/60);    // Nombre d'heures (entières)
                diff.hour = tmp % 24;                   // Extraction du nombre d'heures

                tmp = Math.round((tmp-diff.hour)/24);   // Nombre de jours restants
                diff.day = tmp + 1;

                afficheJours(i);
            }


            var afficheJours = function(i){
                if(diff.day <= 7){
                    document.getElementsByClassName('card')[i].style.backgroundColor = 'red';
                    /*supp.classList.add('closeBad');*/
                /*} else{
                var jourRestant = document.createElement('p');
                jourRestant.style.color = 'white';
               // supp.classList.add('closeGood');
                date_du_jour.appendChild(jourRestant);
                jourRestant.textContent = "Il vous reste "+diff.day+" jours pour consommer votre produit";
                }
            }*/


        </script>
    </body>
</html>
