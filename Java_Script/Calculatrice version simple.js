function Operation(){
  console.log("Je suis dans la fonction");
var Nombre1 = prompt('Choisissez un nombres !');
if(isNaN(Number(Nombre1)) === true){
  console.log("Je suis dans le if");
  alert(Nombre1+" N'est pas un nombre !");
  return;
} else {
  console.log("Je suis dans le esle du premier nombre !");
  Nombre1 = Number(Nombre1);
  var Nombre2 = prompt('Choisissez un deuxiéme nombres !');
  if(isNaN(Number(Nombre2)) === true){
    console.log("Je suis dans le if du Nombre 2");
    alert(Nombre2+" N'est pas un nombre !");
    return;
  } else {
    console.log("Je suis dans le else du Nombre 2");
    Nombre2 = Number(Nombre2);
    var Operateur = prompt("Choisissez un opérateur !");
    if(Operateur === "+"){
      console.log("Je suis dans l'addition");
      var Addition = Nombre1+Nombre2;
      alert("Le resulta de votre opération est : "+Addition);
    }else if(Operateur === "-"){
      console.log("Je suis dans la soustraction");
    var Soustraction = Nombre1-Nombre2;
    alert("Le resulta de votre opération est : "+Soustraction);
  } else if (Operateur === "*"){
    console.log("Je suis dans la multiplication");
    var Multiplication = Nombre1*Nombre2;
    alert("Le resultat de votre opération est : "+Multiplication);
  } else if (Operateur === "/"){
    console.log("Je suis dans la division !");
    var Division = Nombre1/Nombre2;
    alert("Le resultat de votre opération est : "+Division);
  } else {
    console.log("Je suis dans le esle de l'opérateur ");
    alert("Vous n'avez pas choisis d'opérateur !");
  }
  }
} 
}

Operation();
