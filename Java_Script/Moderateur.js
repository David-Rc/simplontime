<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JS Bin</title>
  <style>
    #result-box{
      background-color:#DDD;
      width:340px;
      height:120px;
    }
  </style>
</head>
<body>
  <textArea id="text" cols="50" rows="4" />:') j'adore les  :) c'est trop :D ! </textArea>
  <button>Modérer</button>
  <div>Résultat</div>
  <div id="result-box"></div>
  <script>
  var interdits = [":)",":(",":|",":')", ":D", ":-)",":-(",":-|",":')", ":-D" ];
  function Moderateur(){
    var tab = document.getElementById("result-box").split();
    for (var i = 0, i < interdits.length, i++){
    if(interdit.indexOf(tab[i]) > 0){
      tab[i] = "--";
      var final = tab[i].join();

    }
    document.getElementById("result-box").textContent = document.getElementByID("text");
  }
  }
  </script>
</body>
</html>
