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
    <a href="{{route('man.create')}}" class="btn btn-sm btn danger" style="float:right;">Add</a>  
    <div class="card-header">{{__('All Man')}}</div>
    <div class="card-body">
    
      <table class="table">
  <thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">First</th>
    <th scope="col">Action</th>
  </tr>
  </thead>
  <tbody>

  @foreach($man as $key=>$row)
    <tr>
      <th scope="row">{{++$key}}</th>
      <td>{{$row->name}}</td>
      <td>
        <a href="" class="btn btn-sm btn info">Edit</a>
        <a href="{{route('delete.index',$row->id)}}" class="btn btn-sm btn danger">Delete</a>
      </td>
   
    </tr>
    @endforeach
  </tbody>
</table> 
    </div>     
    </div>     
    </div>    
    </div>  
    </div>  
      
  


   <!--  Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    </body>
</html>

