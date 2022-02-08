@extends('welcome')
@section('content')
 <div class="row">
   <div class="col-lg-3"></div>
     <div class="card col-lg-6 ml-4">

      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
      @endif

       <div class="card-bord">
        <form action="{{ route ('store.contuct')}}" method="post">
         @csrf
            <div class="mb-3">
            <label class="form-label">Your Name</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
            value="{{old('name')}}" >
            @error('name')
            <strong class="text-danger">{{ $message }}</strong>
            @enderror
            </div>

            <div class="mb-3">
            <label class="form-label">Email address</label>
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" aria-describedby="emailHelp" value="{{old('email')}}">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            @error('email')
           <strong class="text-danger">{{ $message }}</strong>
            @enderror
            </div>

            <div class="mb-3">
            <label class="form-label">Password</label>
         <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}">
         @error('password')
          <strong class="text-danger">{{ $message }}</strong>
          @enderror
         </div>
  
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
     </div>
  </div>
  </div>
@endsection