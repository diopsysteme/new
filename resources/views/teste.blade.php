<!DOCTYPE html>
<html lang="en" class="ht">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('storage/css/projet.css')}}">
    <script src="/storage/jquery.js"></script>
    
    <title>projet</title>
</head>

{{$num}}
<body class="box">
    <div style="left:50% ;" id="teste" class="" >
        <div class="chronometre" style="left:70%; position:absolute; position:fixed;">
            <div class="temps">
                <span>0h:</span>
                <span>0min:</span>
                <span>0s</span>
            </div>
            <div class="bouton" >
                <button id="start" onclick="start()">Dem</button>
                <button id="stop" onclick="stop()">Takhaw</button>
                <button id="reset" onclick="reset()">Dellou</button>
            </div>
        </div>
            <img class="img2" id="imgs" src=""  alt="kholal chemin bi bou bkh"><br>
         
            <div class="inp" >
                <table >
                    <tr>
                        <td >A</td><td><input type="checkbox" value="A" name="A" class="coche" id="A"></td>
                    </tr>
                    <tr>
                        <td >B</td><td><input type="checkbox" value="B" name="B" class="coche" id="B"></td>
                    </tr>
                    <tr>
                        <td >C</td><td><input type="checkbox" value="C" name="C" class="coche" id="C"></td>
                    </tr>
                    <tr>
                        <td >D</td><td><input type="checkbox" value="D" name="D" class="coche" id="D"></td>
                    </tr>
                </table><br><br><br>
                
            </div>  
            <div id="buts" class="buts">
                <button class="sp" onclick="p_img()">PREVIOUS  </button> <button class="sp" onclick="s_img()"> NEXT</button>
                
                
            </div>
        
               
                 <button onclick="finish()" class="finish">FINISH</button> 
          
           
                  
        </div>
        
</body>
  <script> 
  let l
var c=1
let v=0
let last=0
let mnn
let ln=0
T=[]
let n=0
let curseur2=0
repAr=["","","","","","","","","","","","","","","","","","","","","","","","",""]
let repBr="" 
  var i = "{{ $num }}";
   img=document.getElementById("imgs")
   switch(Number(i))
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
   img.src="/storage/teste/teste"+i+"/B"+i+"-"+c+".JPG"
    function s_img()
    {
        
    
    c++
    if(c>25){
      
        c=25
        img.src="/storage/teste/teste"+i+"/B"+i+"-"+c+".JPG"
    }    
    
    else
    {
        img.src="/storage/teste/teste"+i+"/B"+i+"-"+c+".JPG"
    } 
    
        recup()
        curseur2++
        if(curseur2>=24)
        curseur2=24
        cocheAB()
    
        inputAdapt()
        
}   
function p_img()
  { 
    
    c--
    if (c<1){
        c=1
         img.src="/storage/teste/teste"+i+"/B"+i+"-"+c+".JPG"
    }
    else {
        img.src="/storage/teste/teste"+i+"/B"+i+"-"+c+".JPG"
    }
    
        recup()
        curseur2--
        if(curseur2<0)
       curseur2=0
   
        cocheAB()
        
        inputAdapt()
    
   
    
}
function inputAdapt(){
    if(c==25)
     c=25
    if(T[c-1].split("").length>1){
        document.getElementById("C").parentNode.parentNode.classList.remove("hide")
        document.getElementById("D").parentNode.parentNode.classList.remove("hide")
    }
    else  if(T[c-1].indexOf("C")>=0)
    {
        document.getElementById("C").parentNode.parentNode.classList.remove("hide")
        document.getElementById("D").parentNode.parentNode.classList.add("hide")
    }
   
   else if(T[c-1].indexOf("C")<0)
   {
    document.getElementById("C").parentNode.parentNode.classList.add("hide")
    document.getElementById("D").parentNode.parentNode.classList.add("hide")
}
    
   
}
function finish(){
    recup()
    stop()
    localStorage.setItem('nomVariable', repAr);
    window.location.href="/exam/correction-B"+i
}
   
function recup(){
    coche=document.querySelectorAll(".coche")
    coche.forEach(element => {
        if(element.checked==true){
            repBr=repBr+element.value
            repAr[curseur2]=repBr 
        } else
            repAr[curseur2]=""
       })
       repAr[curseur2]=repBr 
   // repAr=repBr
    repBr="" 
  // curseur2++
}//@ccessPointFASTEF Ubnt@COUD2014!                         
function cocheAB(){
    for(co of coche)
        co.checked=false
    tassTab=repAr[curseur2].split("")
    for(ln=0;ln<tassTab.length;ln++)
        document.getElementById(tassTab[ln]).checked=true
}
/////////////////////////////////BODY final\\\\\\\\\\\\\\\\\\\\\\\\


    var sp, btn_start, btn_stop, t, s, mn, h;
    sp = document.getElementsByTagName('span');
    btn_start = document.getElementById('start');
    btn_stop = document.getElementById('stop');
    s = 0, mn = 0, h = 0;
function update_chrono(){
    s+=1;
    if(s == 60){
        s = 0;
        mn+=1
    }
    if(mn == 60){
        mn = 0;
        h+=1;
    }
    sp[0].innerHTML = h + "h:";
    sp[1].innerHTML = mn + "min:";
    sp[2].innerHTML = s + "s";
}
function start(){
    t = setInterval(update_chrono,1000);
    btn_start.disabled = true
}
function stop(){
    clearInterval(t);
    btn_start.disabled = false;
}
function reset(){
    clearInterval(t)
    btn_start.disabled = false;
   s=0, mn=0, h=0;
    sp[0].innerHTML = h + "h";
    sp[1].innerHTML = mn + "min";
    sp[2].innerHTML = s + "s";
}

  </script>
</html>