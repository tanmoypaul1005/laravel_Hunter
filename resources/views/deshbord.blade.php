@extends('welcome')
@section('content')
 <div class="jumbotron">
    <h1>This is Deshborad Page<h1>

     //current url
     {{url()->current();}} 


    //full url
   {{url()->full();}} 
  </div>
@endsection