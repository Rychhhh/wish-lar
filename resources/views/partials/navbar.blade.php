{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:none;">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('image/favicon.png') }}" width="100px" height="50px" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link me-5" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link me-5" aria-current="page" href="{{url('admin')}}">Admin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link me-5" href="{{url('pembeli')}}">Pembeli</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link" href="{{ url('/profil') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Id : 
            {{ Auth::user()->name }}
          </a>
              <li class="nav-item dropdown btn btn-danger">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
              </li>
        </li>
      </ul>
    </div>
    </div>
  </div>
</nav>
