var chiffres = ['a3', 'v5', 'e2', 'g6', 'I8'];
function sorted(tab) {
for(i=0; i<tab.length; i++){
  for(j=i+1; j<tab.length; j++){
    if(tab[i].charAt(1)>tab[j].charAt(1)){
      var inverse = tab[j];
      tab[j] = tab[i];
      tab[i] = inverse;
      
    }
  }
  
}
console.log(tab);
  return tab;
}

sorted(chiffres);
