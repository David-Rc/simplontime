//noprotect;
//fonction sans le while true;
var hasard = (Math.ceil(Math.random()*100));

alert(hasard);

function devineLeChiffre() {
while(reponse !== hasard){
  var reponse = prompt('Devinez le chiffre !');
  reponse = Number(reponse);
  if(isNaN(Number(reponse))===true){
    alert('Vous n\'avez pas saisi de chiffre !');
  }else{
    if(reponse > hasard){
      alert('Le chiffre est plus petit !');
    } else if(reponse < hasard){
      alert('Le chiffre est plus grand !');
    }
  }
}
  alert('Bien joué !');
}
devineLeChiffre();
