function byId(elementId){
  if( typeof elementId != "string" ) {
    console.log('Erreur : elementId doit être une chaine de caractère.');
    return null;
  }
  return document.getElementById(elementId);
}

function byTag(elementTag, i){
  if(typeof elementTag != 'string' || typeof i != 'number'){
    console.log('Erreur : elementTag doit être une chaine de caractère et/ou i doit être un nombre !');
    return null;
  }
  if(i === undefined || i === null){
    return document.getElementsByTagName(elementTag);
  } else {
    return document.getElementsByTagName(elementTag)[i];
  }
}

function byClass(elementClass, i){
  if(typeof elementClass != 'string' || typeof i != 'number'){
    console.log('Erreur : elementClass doit être une chaine de caractère et/ou i doit être un nombre !');
    return null;
  }
  if(i === undefined || i === null){
    var element = document.getElementsByClassName(elementClass);
    return Array.prototype.slice.call(elements);
  }
    return document.getElementsByClassName(elementClass)[i];
}

function addClass(element, selected){
  element.classList.add(selected);
}

function removeClass(element, selected){
  element.classList.remove(selected);
}
