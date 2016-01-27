var operateur = Math.floor(Math.random()*3);
var Chiffre1 = Math.ceil(Math.random()*10);
var Chiffre2 = Math.ceil(Math.random()*10);
if(operateur === 0){
  operateur = "+";
  var Resultat = Chiffre1 + Chiffre2;
} else if(operateur === 1){
  operateur = "-";
  var Resultat = Chiffre1 - Chiffre2;
} else if(operateur === 2){
  operateur = "*";
  var Resultat = Chiffre1 * Chiffre2;
} else if(operateur === 3){
  operateur = "/";
  var Resultat = Chiffre1 / Chiffre2;
}

function CalculMental() {
var calcul = prompt("Calculez : "+Chiffre1+" "+operateur+" "+Chiffre2);
if((calcul = Number(calcul))&&(calcul === Resultat)){
  alert("Bien Joué !");
} else if(calcul != Number(calcul)) {
  alert("Vous n'avez pas saisi de chiffre !");
} else {
  alert("Mauvaise réponse; la bonne réponse était : "+Resultat);
}
}

CalculMental();
