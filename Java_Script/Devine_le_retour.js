//noprotect

var hasard = Math.ceil(Math.random()*100);

alert(hasard);

function devineLeChiffre() {
  
  while(true){
    var reponse = prompt('Devinez le chiffre !');
    if(reponse == hasard){
      alert('Bien Joué !');
      break;
    } else if(reponse < hasard) {
      alert('Le chiffre est plus grand !');
    } else if(reponse > hasard){
      alert('Le chiffre est plus petit !');
    } 
  }
  alert('Bien Joué !');
}

devineLeChiffre();
