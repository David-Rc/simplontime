function Questions(){
var Question1 = prompt("Quel est la couleur du cheval blanc d'henri 4");
if(Question1 === "blanc".toLowerCase()){
  var Question2 = prompt("Bonne réponse, combien sont les 7 nains ?");
  if(Question2 === "7"){
    alert("Bonne réponse !");
  } else {
    alert("Mauvaise réponse !");
    return Question2;
  }
} else {
  alert("Mauvaise réponse !");
  return Question1;
}
}

Questions();
