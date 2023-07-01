<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class autoEcole extends Controller
{
    public function couv($id){
        return view('couv',['num'=>$id]);
    }
    public function teste($id){
        return view('teste',['num'=>$id]);
    }
    public function correction($id){
       

        return view('correction',['num'=>$id]);
    }
    public function redirige(Request $request){
        $num=$request->input('choose');
        if($num=="vide")
        return redirect('/exam/accueil');
        else
        return redirect('/exam/couv-B'.$num)
        ->with('num',$num);
     }

     public function teste2($id,Request $request){
        $repAr = $request->input('variable');

        return view('correction',['num'=>$id,'repAr'=>$repAr]);
    }

    
}
