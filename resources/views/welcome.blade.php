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
    <body class="antialiased">
      
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


        <li class="nav-item">
          <a class="nav-link active" href="{{url('/')}}" aria-current="page" >Home</a>
        </li>


        <li class="nav-item">
          <a class="nav-link active" href="{{url('/deshbord')}}">Deshboard</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="{{route('about')}}">About</a>
        </li>

    
       <li class="nav-item">
          <a class="nav-link active" href="{{url('/contuct')}}">Contuct</a>
        </li> 

       <li class="nav-item">
            <a href="{{route( 'class.index')}}" class="btn btn info btn-sm">class</a>
       </li> 

      <li class="nav-item">
        <a href="{{route('users.index')}}" class="btn btn info btn-sm">Users</a>
      </li> 

      <li class="nav-item">
        <a href="{{route('customer.index')}}" class="btn btn info btn-sm">Customer</a>
      </li> 

      <li class="nav-item">
        <a href="{{route('man.index')}}" class="btn btn info btn-sm">Man</a>
      </li> 
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
    @yield('content')
</div>



   <!--  Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    </body>
</html>
