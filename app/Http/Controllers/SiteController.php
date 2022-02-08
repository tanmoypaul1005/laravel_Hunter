<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class SiteController extends Controller
{

    public function Home(){
        return view('Home');
    }

   public function userAbout(){
        return view('About');
    }


    public function DeshBord(){
        return  view('deshbord',['name'=>'Deshborad']);
    }

  public function studentStore(Request $request){
       // dd($request->name);
        return redirect()->back()->with('success','Student Inserted');
       // return redirect()->action([SecondController::class,'test']);
    }


    public function Contuct(){
        return view('Contuct');
    }



}
