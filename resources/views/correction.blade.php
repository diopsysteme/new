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
    <div align='center'  class='lastTab'>
        <h1>LES RESULTATS DE L'EXAM</h1>
        <h2> temps mis  ${mn} min:${s}:s <br>Vous avez ${v}/25</h2>
        <table class='lastTab' >
            <tr>
                <td><button class="butFin" id='1'>1</button></td><td><button class="butFin" id='2'>2</button></td><td><button class="butFin" id='3'>3</button></td><td><button class="butFin" id='4'>4</button></td><td><button class="butFin" id='5'>5</button></td>
            </tr>
            <tr>
                <td><button class="butFin" id='6'>6</button></td><td><button class="butFin" id='7'>7</button></td><td><button class="butFin" id='8'>8</button></td><td><button class="butFin" id='9'>9</button></td><td><button class="butFin" id='10'>10</button></td>
            </tr>
            <tr>
                <td><button class="butFin" id='11'>11</button></td><td><button class="butFin" id='12'>12</button></td><td><button class="butFin" id='13'>13</button></td><td><button class="butFin" id='14'>14</button></td><td><button class="butFin" id='15'>15</button></td>
            </tr>
            <tr>
                <td><button class="butFin" id='16'>16</button></td><td><button class="butFin" id='17'>17</button></td><td><button class="butFin" id='18'>18</button></td><td><button class="butFin" id='19'>19</button></td><td><button class="butFin" id='20'>20</button></td>
            </tr>
            <tr>
                <td><button class="butFin" id='21'>21</button></td><td><button class="butFin" id='22'>22</button></td><td><button class="butFin" id='23'>23</button></td><td><button class="butFin" id='24'>24</button></td><td><button class="butFin" id='25'>25</button></td>
            </tr>
        </table><br>
        <button class='last' onclick='cancel()' >ACCEUIL</button>
    </div>
   
</body>
   
  <script>
   
    var j = "{{ $num }}";

     switch(Number(j))
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

                ///////////////////CORRECTION\\\\\\\\\\\\\\\\\\\\\
    v=0 
    reponse=localStorage.getItem('nomVariable').trim().split(',')
    for(last=0;last<25;last++)
        if(T[last]==reponse[last])
            v++
           
    
    v=0
    for(last=0;last<25;last++){
        if(T[last]==reponse[last]){
            v++
            document.getElementById(last+1).style.backgroundColor="lightgreen" 
            
        }
        else
            document.getElementById(last+1).style.backgroundColor="rgba(245, 98, 98)" 
       
    }


fin=document.querySelectorAll("button.butFin")
fin.forEach(ele=>{
     ele.addEventListener("click",()=>
     {
        imn=ele.id
        tassTab2=T[Number(imn)-1].split("")
        if(tassTab2.length==2)
        document.body.innerHTML=`
        <img id="back" src="" alt="" style="width: 900px; height: 400px;">
        <div class="lastinp" >
            <table class='correct'>
                <tr>
                    <td >A:</td><td><div id="A" class="col"></div></td>
                </tr>
                <tr>
                    <td >B:</td><td><div id="B" class="col"></div></td>
                </tr>
                <tr>
                    <td >C:</td><td><div id="C" class="col"></div></td>
                </tr>
                    <tr>
                        <td >D:</td><td><div id="D" class="col"></div></td>
                </tr>
            </table>
            <br><br><br>
            <button onclick='finish()'>goBack</button>
        </div>`
        else if(tassTab2.length==1)
        document.body.innerHTML=`
        <img id="back" src="" alt="" style="width: 50%;left:100%; ">
        <div class="lastinp" >
            <table class='correct'>
                <tr>
                    <td >A:</td><td><div id="A" class="col"></div></td>
                </tr>
                <tr>
                    <td >B:</td><td><div id="B" class="col"></div></td>
                </tr>
            </table>
            <br><br><br>
            <button  onclick='finish()'>goBack</button>
        </div>`
    document.getElementById("back").src="/storage/teste/teste"+j+"/B"+j+"-"+Number(imn)+".JPG"
            if("A"==tassTab2[0] || "A"==tassTab2[1])
                document.getElementById("A").parentElement.style.backgroundColor="lightgreen"
            else
                document.getElementById("A").parentElement.style.backgroundColor="rgb(243, 131, 131)"
            if("B"==tassTab2[0] || "B"==tassTab2[1])
                document.getElementById("B").parentElement.style.backgroundColor="lightgreen"
            else
                document.getElementById("B").parentElement.style.backgroundColor="rgb(243, 131, 131)"
            if("C"==tassTab2[0] || "C"==tassTab2[1])
                document.getElementById("C").parentElement.style.backgroundColor="lightgreen"
            else
                document.getElementById("C").parentElement.style.backgroundColor="rgb(243, 131, 131)"
            if("D"==tassTab2[0] || "D"==tassTab2[1])
                document.getElementById("D").parentElement.style.backgroundColor="lightgreen"
            else
                document.getElementById("D").parentElement.style.backgroundColor="rgb(243, 131, 131)"
    })
})



    
  </script>

</html>