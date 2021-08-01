<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="icon" href="{{ asset('image/favicon.png') }}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap');

        body {
            background: #2b5876;  /* fallback for old browsers */
            color: white;
            font-family: "Work Sans", sans-serif;
        }
        
        .heading {
            text-shadow: 0px 0px 15px gray;
        }
    </style>
    
     <!-- Add AOS-->
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     <!-- End AOS -->

    <title>Han Web | Home</title>
  </head>
  <body>
      {{-- Navbar --}}
     @include('partials.navbar')


    {{-- Top Wrapper --}}
      <section id="about" data-aos="fade-right">
        <div class="container">
          <div class="row text-center mb-5">
            <div class="col mt-5 heading">
              <h2>Welcome</h2>
            </div>
          </div>
          <div class="row justify-content-center fs-5 text-center">
            <div class="col-md-5">
              <p>Welcome To My Website Guys</p>
              <p>Hi {{ Auth::user()->name }}</p>
              <a href="https://github.com/Ryhann"><button type="button" class="btn btn-info mt-3">See More</button></a>
            </div>
            <div class="col-md-5 img" data-aos="fade-up">
              <a href="{{ asset('/') }}"><img src="{{ asset('image/right_img.PNG')}}"></a>
            </div>
          </div>
        </div>
      </section>

      <section id="about       {{-- About Web --}}
" data-aos="fade-up">
        <div class="container">
          <div class="row text-center mb-5">
            <div class="col mt-5 heading">
              <h2>About This Website</h2>
            </div>
          </div>
          <div class="row justify-content-center fs-5 text-center">
            <div class="col-md-5 mt-2 me-auto">
              <a href="{{ asset('/') }}"><img src="{{ asset('image/left_image.PNG')}}" width="600px" height="400px"></a>
            </div>
            <div class="col-md-5 mt-5" data-aos="fade-up">
              <p>Website ini dibuat untuk membantu orang orang yang ingin menjual product teknologi kekinian</p>
            </div>
          </div>
        </div>
      </section>
     
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


