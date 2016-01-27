var Email = "lea@gmail.com";
var mdp = "12345";

function verifmail(){
  var login = prompt("Entrez votre adresse mail !");
  if(login.indexOf("@") <= -1){
    alert("Ce n'est pas une adresse mail !");
  } else if(login.length < 4) {
    alert("Vous devez saisir une adresse mail de plus de 4 caractéres !");
  } else if(login != Email){
    alert("Adresse mail invalide");
  } else {
    var Pass = prompt("Saissisez votre mot de passe !");
    if(Pass != mdp){
      alert("Mot de passe incorrect !");
    } else {
      alert("BIENVENUE");
    }
  }
}

verifmail();
