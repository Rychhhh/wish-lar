<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap');
        
        h1 {
            color: white;
        }
        a{
            text-decoration: none;
            color: white;
        }
        body {
            background-image: url(https://images.unsplash.com/photo-1627391218592-47ad23054052?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=744&q=80);
            background-size: cover;
            font-family: 'Ubuntu', sans-serif;
        }
        form {
            color: white;
            border-radius: 25px;
            background-color: rgb(122, 118, 118);
            padding: 2rem 3rem;
            transition: 0.5s;   
        }
        form:hover {
            box-shadow: 0px 0px 10px 2px rgb(255, 255, 255);
        }
    </style>

    <title>Register</title>
  </head>
  <body>
      <div class="container">
    <h1 class="text-center mt-2">Register</h1>

    <form class="position-absolute top-50 start-50 translate-middle text-center" action="{{route('register')}}" method="POST">
        @csrf
 
        {{-- Label name --}}
        
        <label for="name" class="form-label text-center">Name</label> <br>
        <input type="text" name="name" class="mb-2"> <br>

        {{-- Alert Danger  --}}
        @error('name')
            <span class="alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        {{-- Label Email --}}
        
        <label for="email" class="form-label text-center">Email</label> <br>
        <input type="text" name="email" class="mb-2"> <br>
        
        {{-- Alert Danger  --}}
        @error('email')
            <span class="alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
        <br>
        {{-- Label Password --}}
        <label for="password" class="form-label text-center">Password</label> <br>
        <input type="password" name="password" class="mb-1"> <br>
        @error('password')
        <span class="alert-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <br>

        {{-- Label Confirmation Password --}}
        <label for="password" class="form-label text-center">Password Confirmation</label> <br>
        <input type="password" name="password_confirmation" class="mb-1"> <br>
        
       
        <br>
        <div class="form-group row mb-0">
            <div class="col-md">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>

        <p class="mt-3">You Have Account ? </p>
        <button class="btn btn-danger">
            <a href="{{ route('login') }}">Login</a>
        </button>
         
    </form>

    </div>


    {{-- Script Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>