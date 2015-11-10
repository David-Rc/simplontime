var Notes = [];

function calculMoyenne(){
  var User = prompt("Entrez 10 notes, entre 0 et 20");
  if((typeof User != "number")&&(isNaN(Number(User))=== true)){
    alert(User+" N'est pas un Nombre !");
    return;
  } else {
    User = Number(User);
  }
  if(User > 20 || User < 0){
    alert("Vous devez saisir une notes comprise entre 0 et 20");
    return;
  }
  while(Notes.length < 10){
    Notes.push(User);
    return calculMoyenne();
  }
  var total = Notes.reduce(function(a, b){
    return a+b;
  });
  console.log(Notes);
  console.log("La moyenne des 10 notes est de : "+total/Notes.length);
}

calculMoyenne();
