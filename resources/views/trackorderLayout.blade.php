<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <!-- Styles --> 
    <link href="{{ asset('/app.css') }}" rel="stylesheet">
    
    <style>
       

  html {
    background: url({{url('img/495.jpg')}});
}




    </style>
</head>
<body>
    <div id="app" >
       
        <nav class="navbar navbar-expand-lg navbar-light bg-light h-100">
            <div class="container-fluid">
              <a class="navbar-brand" href="#" style="margin-left: 50px; color:#104E8B; font-size: 28px; font-weight:bold">KLIMER</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="font-size: 23px">{{ __('Categories') }}</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#" style="font-size: 23px">Electronic Devices</a></li>
                          <li><a class="dropdown-item" href="#" style="font-size: 23px">Fashion</a></li>
                          <li><a class="dropdown-item" href="#" style="font-size: 23px">Grocerry & Pets</a></li>
                          <li><a class="dropdown-item" href="#" style="font-size: 23px">TV & Home appliance</a></li>
                          <li><a class="dropdown-item" href="#" style="font-size: 23px">Health & Beauty</a></li>
                          <li><a class="dropdown-item" href="#" style="font-size: 23px">Sports</a></li>
                          <li><a class="dropdown-item" href="#" style="font-size: 23px">Babies & Toys</a></li>
                          <li><a class="dropdown-item" href="#" style="font-size: 23px">Sports</a></li>
                          <li><a class="dropdown-item" href="#" style="font-size: 23px">Grocerry & Pets</a></li>
                          
                        </ul>
                      </li>
                  <a class="nav-link" href="/trackorder" style="font-size: 23px">{{ __('Track My Order') }}</a>

                  @guest
                            @if (Route::has('login'))
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="font-size: 23px">{{ __('Login') }}</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{route('login')}}" style="font-size: 23px">User Login</a>
                                        <a class="dropdown-item" href="#" style="font-size: 23px">Seller Login</a>
                                    </li>
                                </ul>    
                            </li>    
                               

                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="font-size: 23px">{{ __('Register') }}</a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="{{route('register')}}" style="font-size: 23px">User Registeration</a>
                                        <a class="dropdown-item" href="/becomeaseller" style="font-size: 23px">Seller Registration</a>
                                    </li>
                                </ul>    
                            </li> 
                            @endif
                            
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="font-size: 23px"> {{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu">
                               <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                                 
                                 </a>
                                
                                </li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </ul>
                        </li>      



                        <!--
                            <li class="nav-item dropdown">
                               

                                <ul class="dropdown-menu ">
                                    <li>
                                       
                                    </li>
                                   
                                </ul> 
                            -->   
                                <!--
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <li>
                                    
                                    </li>

                                    
                                </ul>
                            -->
                            </li>
                        @endguest
                </div>
              </div>
            </div>
          </nav>
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       <!--
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categories</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Electronic Devices</a></li>
              <li><a class="dropdown-item" href="#">Fashion</a></li>
              <li><a class="dropdown-item" href="#">Grocerry & Pets</a></li>
              <li><a class="dropdown-item" href="#">TV & Home appliance</a></li>
              <li><a class="dropdown-item" href="#">Health & Beauty</a></li>
              <li><a class="dropdown-item" href="#">Sports</a></li>
              <li><a class="dropdown-item" href="#">Babies & Toys</a></li>
              <li><a class="dropdown-item" href="#">Sports</a></li>
              <li><a class="dropdown-item" href="#">Grocerry & Pets</a></li>
              
            </ul>
          </li>

        -->
       
       
       
    </div>

    <main >
        @yield('content')
    </main>

      <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>


</html>
