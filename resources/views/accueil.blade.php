<!DOCTYPE html>
<html lang="en" class="ht">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('storage/css/projet.css') }}">
    
    <title>projet</title>
</head>

        <body class="box">
            <div  id="bod" >
                <div class=""> <h1>EXAMEN PERMIS DE CONDUIRE</h1>
                    <form action="" method="POST">
                        @csrf
                        <button name="" onclick="changeTeste()" style="width: 20%;height: 35px;">valider</button><br><br>
                        <select  name="choose"  id="teste-select">
                            <option id="" value="vide">faites votre choix</option>
                            <option id="1" value="1">teste1</option>
                            <option id="2" value="2">teste2</option>
                            <option id="3" value="3">teste3</option>
                            <option id="4" value="4">teste4</option>
                            <option id="5" value="5">teste5</option>
                            <option id="6" value="6">teste6</option>
                            <option id="7" value="7">teste7</option>
                            <option id="8" value="8">teste8</option>
                            <option id="9" value="9">teste9</option>
                            <option id="10" value="10">teste10</option>
                            <option id="11" value="11">teste11</option>
                            <option id="12" value="12">teste12</option>
                        </select>   
                    </form>  
                </div class="">
            </div>
        </body>
        <script>
            function changeTeste(){
  nv=document.getElementById('teste-select').value
  if(nv=="bod.html")
  window.location.href='/exam/accueil'
  else
  window.location.href='/exam/couv-B'+nv
  mnn=document.getElementById('teste-select').value
  l=document.getElementById('teste-select').value
  i=document.getElementById('teste-select').value
  document.getElementById("couv").src="teste/teste"+l+"/B"+l+" couv.JPG"
  img.src='teste/teste'+i+'/B'+i+'-'+c+'.JPG'
  Number(mnn)
  switch(Number(mnn))
{
  case 1 : T=["BD", "AD", "B", "BC", "B", "A", "B", "B", "AD", "B", "C", "BC", "AD", "AC", "B", "B", "B", "A", "B", "B", "A", "B", "A", "B", "B"];break;
  case 2 : T=["AD", "BD", "BD", "B", "AD", "A", "AD", "B", "BD", "B", "B", "BD", "A", "B", "A", "B", "B", "BC", "A", "B", "A", "A", "AC", "BD", "BC"];break;
  case 3 : T=["BD", "BC", "B", "BD", "B", "A", "BC", "B", "A", "BC", "A", "AD", "B", "BC", "B", "A", "BC", "A", "B", "B", "A", "A", "AC", "BD", "B"];break;
  case 4 : T=["BD", "AD", "B", "AD", "AC", "A", "B", "A", "B", "BC", "B", "B", "A", "B", "A", "B", "B", "A", "BC", "AD", "C", "A", "BC", "BD", "BC"];break;
  case 5 : T=["AD", "BD", "BD", "BC", "AD", "B", "B", "B", "C", "B", "B", "A", "A", "B", "B", "B", "A", "A", "BD", "B", "A", "A", "BC", "AD", "AD"];break;
  case 6 : T=["AD", "BD", "B", "A", "B", "A", "B", "B", "AD", "A", "B", "B", "A", "B", "A", "A", "BD", "AC", "BC", "AD", "AC", "A", "A", "A", "AD"];break;
  case 7 : T=["AD", "BD", "BD", "A", "A", "B", "BD", "B", "B", "A", "B", "B", "B", "BC", "A", "A", "BC", "B", "A", "A", "B", "B", "B", "AD", "AC"];break;
  case 8 : T=["BD", "A", "BC", "BC", "AD", "B", "A", "B", "B", "A", "AD", "A", "BC", "A", "A", "B", "B", "B", "B", "BC", "A", "BD", "A", "B", "B"];break;
  case 9 : T=["AC", "BD", "AC", "B", "BD", "A", "A", "A", "B", "B", "BC", "A", "AD", "B", "AD", "B", "AD", "BC", "B", "A", "B", "BC", "A", "BC", "B"];break;
  case 10 : T=["AD", "B", "BD", "B", "BC", "BC", "AD", "B", "B", "B", "BC", "B", "BC", "BD", "BC", "B", "BD", "B", "BC", "B", "B", "B", "BC", "A", "BD"];break;
  case 11 : T=["AD", "BD", "BD", "AD", "A", "B", "A", "B", "BC", "B", "B", "B", "AC", "A", "B", "AC", "A", "BC", "A", "BC", "B", "A", "AD", "B", "A"];break;
  case 12 : T=["AD", "BD", "B", "BC", "B", "A", "A", "A", "B", "B", "B", "B", "BC", "AD", "B", "BC", "BC", "A", "A", "B", "A", "A", "B", "BC", "B"];break;
}

}
        </script>


</html>





