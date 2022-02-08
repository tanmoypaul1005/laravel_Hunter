<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SecondController extends Controller
{
   public function test(){
    return "hhhhhhhhhhhhhhhh";
   }

  public function store(Request $request){
    $validated = $request->validate([
        'name' => 'required|max:255',
        'name' => 'required|max:255',
        'password' => 'required|min:4|max:12',
    ]);
   \Log::channel('contuctstore')->info('the contuct form submited by'.rand(1,20)); //1
   return redirect()->back();
   // dd($request->all());
  }




  //index method for all class from database
   public function index(){
    $class=DB::table('students')->get();
    // dd($class);
    return view('user',compact('class'));
   }


   public function create(){
   return  view('create');
   }

   public function createstore(Request $request){
   $request->validate([
    'name'=>'required|unique:students',
   ]);
   $data=array('name'=>$request->name,);
   DB::table('students')->insert($data);
   return redirect()->back()->with('success','succfully inserted');
   }




   public function delete($id){
   DB::table('students')->where('id',$id)->delete();
   return redirect()->back()->with('success','succfully Delete');
   }
}
