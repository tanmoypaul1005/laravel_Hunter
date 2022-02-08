@extends('welcome')
@section('content')
 <div class="jumbotron">
    <h1>This is About Page<h1>
   <form action="{{route('studentstore')}}" method="post">

   @if(session('success'))
  <div class="alert alert-success"> {{session('success')}}</div>
   @endif  
   @csrf
   <input type="text" name="name" placeholder="Name" ><br>
   <input type="text",name="email" placeholder="Email" ><br>
   <input type="submit" name="submit" value="Submit" ><br>
</form>
  </div>
@endsection