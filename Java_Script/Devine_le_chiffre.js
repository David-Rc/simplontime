function Devinelechiffre(){
var hasard = Math.floor(Math.random()*10);
var User = prompt("Devinez mon chiffre !");
if(isNaN(Number(User))===true){
  alert("Vous n'avez pas saisi de chiffre !");
  return;
} else if((User > 9)||(User < 0)){
  alert("Vous devez choisir une chiffre entre 0 et 9 !");
  return Devinelechiffre();
}else {
  if(User < hasard){
    var User2 = prompt("Choisissez un chiffre plus grand !");
    if((User2 > hasard)||(User2 < hasard)){
      alert("Perdu le chiffre était"+hasard);
    }else{
      alert("Bien joué !");
    }
  } else if(User > hasard){
    var User3 = prompt("Choisissez un chiffre plus petit");
    if((User3 < hasard)||(User3 > hasard)){
      alert("Perdu le chiffre était"+hasard);
    } else {
      alert("Bien joué");
    }
  } else {
    alert("Bien joué !");
  }
  console.log(hasard);
}
}

Devinelechiffre();
