 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>body {font-family: 'Nunito', sans-serif;}</style>
    </head>
    <body>

    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8"
    <div  class="card">
     <a href="{{route('class.index')}}" class="btn btn-sm btn danger" style="float:right;">All user</a>  
    <div class="card-header">{{__('Add New User')}}</div>

    <div class="card-body">
    @if(session()->has('success'))
    <strong class="text-success">{{session()->get('success')}}</strong>
    @endif 	
    <form action="{{route('store.index')}}" method="post">
    @csrf 	
    <div class="mb-3">
    <label class="form-label">User Name</label>
    <input name="name" type="text" class="form-control" value="{{old('name')}}" 
    placeholder="Enter User Name">
    @error('name')
    <spanc class="invalid-feedback" role="alert">
  <strong >{{$message}}</strong>
    </span>
    @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 


   <!--  Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    </body>
</html>


