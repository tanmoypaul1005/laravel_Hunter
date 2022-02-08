<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
     $class=DB::table('students')->get();
    // dd($class);
    return view('user.index',compact('class'));

    // $students=DB::table('students')->join('classes','students.class_id','classes.id')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('user.usercreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $request->validate([
    'name'=>'required|unique:students',
   ]);
   $data=array('name'=>$request->name,);
   DB::table('students')->insert($data);
   return redirect()->back()->with('success','succfully inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user=DB::table('students')->pluck('name');
        // $user=DB::table('students')->find($id);
        $user=DB::table('students')->where('id',$id)->first();
        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $classes=DB::table('students')->get();
      $user=DB::table('students')->where('id',$id)->first();
      return view('user.edit',compact('classes','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'name'=>'required|unique:students',
        ]);
    $data=array('name'=>$request->name,);
   DB::table('students')->where('id',$id)->update($data);
   return redirect()->back()->with('success','succfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
   DB::table('students')->where('id',$id)->delete();
   return redirect()->back()->with('success','succfully Delete');
    }

      
}
