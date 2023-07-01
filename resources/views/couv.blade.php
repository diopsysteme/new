<!DOCTYPE html>
<html lang="en" class="ht">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('storage/css/projet.css') }}">
    
    <title>projet</title>
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>

  <body class="box">
    <div id="acceuil" class="" style="top: 5%;" align="center">
        <h1>Bienvenue vous allez effectuer le teste B{{$num}}</h1>
        <img id="couv" src="" alt="" style="width: 45%;">
        <br>
        
        <div class="but"><a href="/exam/accueil"><button  style="width: 22%;height: 50px;">  CANCEL </button> </a>     <a href="/exam/teste-B{{$num}}"><button class="b1" onclick="Start()" style="width: 22%;height: 50px;">  START  </button></a></div>
</div>
  </body>
<script>
    var val = "{{ $num }}";
   document.getElementById("couv").src="/storage/teste/teste"+val+"/B"+val+" couv.JPG"
</script>
</html>