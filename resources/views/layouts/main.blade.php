<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- Add AOS-->
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     <!-- End AOS -->

    <style>
       @import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap');

    .container {
         font-family: "Work Sans",sans-serif;
    }

    a {
        text-decoration: none;
    }
    body {
            background: #2b5876;  /* fallback for old browsers */
            color: white;
            font-family: "Work Sans", sans-serif;
    }

    
    </style>
    
    <link rel="icon" href="{{ asset('image/favicon.png') }}">

    <title>Han Web | @yield('title')</title>
  </head>
  <body>
    @include('partials.navbar')

    <div class="container mt-3">
        @yield('container')
    </div>

    <!-- Option 1: Bootstrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
      AOS.init({
         offset: 120, // offset (in px) from the original trigger point
         delay: 0, // values from 0 to 3000, with step 50ms
         duration: 1000 
      });
    </script>
  </body>
</html>