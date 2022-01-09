<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @stack('css')
    
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
        <link href="{{ asset('/sellerDashboardCSS.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

        
    
       
    </head>
    <body style="background-image: url('/uploads/bkgrndImg.jpg')">
        <div id="app" >
           
            <nav class="navbar navbar-expand-lg navbar-light bg-light h-100">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/" style=" color:#104E8B; font-size: 28px; font-weight:bold">KLIMER</a> 
                   
                </div>
            </nav> 
            

            <div class="container">
                <div class="row ">
                    <ul>
                            <a class="link-x" href="/seller"> Home</a>
                            <a class="link-x" href="/addProduct">Add New </a>
                            <a class="link-x" href="/allProduct">Products</a>
                            <a class="link-x" href="#">Orders</a>
                            <a class="link-x" href="#">Campaign</a>
                            <a class="link-x" href="#">Revenue</a>
                            <span class="dropdown">
                            <a class="link-x" href="#">More</a>
                            </span>
                        
                        <span style="margin-right: 6px,  background-color: red;">
                            <a class=""  href="{{ route('logout') }}" role="button" aria-expanded="false" style="float:right"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                
                            
                                <button type="submit" name="submit" class="btn btn-danger">Logout </button>
                                
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </span> 

                         
                        <a  href="#" role="button" aria-expanded="false" style="float:right" style="font-size: 10px"><i class="bi bi-person-circle" style="font-size: 1.2rem"></i> {{ Auth::user()->name }} </a>
                        
                    </ul>
                                        
                        <div class="animation start-home"></div>
                    </ul>
                    
                     <!--
                    <a class="active">Summary</a>
                    <a href="/addProduct">Add Products</a>
                    <a href="/allProduct">Products</a>
                    <a href="#">Orders</a>
                    <a href="#">Campaign</a>
                    <a href="#">Revenue</a> -->
            
                </div>
                
            
            </div>
            
            
            
            
            
            
            
            
          <div>  
          @yield('content')
          </div>    
           
           
    
       
       
 

          
    
    




        </div>
</body>
</html>
