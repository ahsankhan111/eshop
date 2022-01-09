@extends('layouts.app')

@section('content')

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/carousel2.jpg" class="d-block w-100 " alt="..." >
      </div>
      <div class="carousel-item">
        <img src="/img/carousel1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/img/myimage.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>   


<br>
<br>

<div>
    <h2 style="margin-top: 3%; text-align: center; color:#104E8B">
        Latest Products
    </h2>
</div>    

<div style="margin-top: 5%;">
    
    <div class="row">
        <div class="col-sm-2">
           
        </div>
       

           
        <div class="col-sm-9"  style="margin-left: 1%;" >
            
             @foreach ($allproductsArr as $product)  

                  <div class="column" style=" ">
                  
                    <a>
                        <img src="/uploads/productimages/{{$product->productimg}}" width="100%" height="100%"> 
                       
                    </a>
                    <p class="fs-3">{{$product->title}}</p>
                    <p>{{$product->categories}}</p>
                    <p>{{$product->title}}</p>
                    <div class="row">
                      <a class="btn btn-primary  col h-50"  >View more</a>
                      <a class="btn btn-success  col h-50"   >Add to cart</a>
                    </div>
                  </div>

              @endforeach    

                <!--
                <div class="column" style="background-color:#bbb;">
                  
                  <a>
                    <img src="/img/KlimerLogo.jpg" width="100%" height="100%">
                </a>
                  <p>Some text.. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus optio dolores veniam vero a obcaecati corporis, minus debitis architecto nesciunt! Mollitia earum voluptatem repellat cupiditate ipsam, voluptatibus saepe! Autem, excepturi?</p>
                </div>
                 <div class="column" style="background-color:#ccc;">
                  
                  <a>
                    <img src="/img/KlimerLogo.jpg" width="100%" height="100%">
                </a>
                  <p>Some text.. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus optio dolores veniam vero a obcaecati corporis, minus debitis architecto nesciunt! Mollitia earum voluptatem repellat cupiditate ipsam, voluptatibus saepe! Autem, excepturi?</p>
                </div>
                <div class="column" style="background-color:#ddd;">
                  
                  <a>
                    <img src="/img/KlimerLogo.jpg" width="100%" height="100%">
                </a>
                  <p>Some text.. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus optio dolores veniam vero a obcaecati corporis, minus debitis architecto nesciunt! Mollitia earum voluptatem repellat cupiditate ipsam, voluptatibus saepe! Autem, excepturi?</p>
                </div>
                 <div class="column" style="background-color:#ccc;">
                  
                  <a>
                    <img src="/img/KlimerLogo.jpg" width="100%" height="100%">
                </a>
                  <p>Some text.. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus optio dolores veniam vero a obcaecati corporis, minus debitis architecto nesciunt! Mollitia earum voluptatem repellat cupiditate ipsam, voluptatibus saepe! Autem, excepturi?</p>
                </div>
                <div class="column" style="background-color:#ddd;">
                  
                  <a>
                    <img src="/img/KlimerLogo.jpg" width="100%" height="100%">
                </a>
                  <p>Some text.. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus optio dolores veniam vero a obcaecati corporis, minus debitis architecto nesciunt! Mollitia earum voluptatem repellat cupiditate ipsam, voluptatibus saepe! Autem, excepturi?</p>
                </div>
                 <div class="column" style="background-color:#ccc;">
                  
                  <a>
                    <img src="/img/KlimerLogo.jpg" width="100%" height="100%">
                </a>
                  <p>Some text.. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus optio dolores veniam vero a obcaecati corporis, minus debitis architecto nesciunt! Mollitia earum voluptatem repellat cupiditate ipsam, voluptatibus saepe! Autem, excepturi?</p>
                </div>
                <div class="column" style="background-color:#ddd;">
                  
                  <a>
                    <img src="/img/KlimerLogo.jpg" width="100%" height="100%">
                </a>
                  <p>Some text.. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus optio dolores veniam vero a obcaecati corporis, minus debitis architecto nesciunt! Mollitia earum voluptatem repellat cupiditate ipsam, voluptatibus saepe! Autem, excepturi?</p>
                </div>
                 <div class="column" style="background-color:#ccc;">
                  
                  <p>Some text.. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus optio dolores veniam vero a obcaecati corporis, minus debitis architecto nesciunt! Mollitia earum voluptatem repellat cupiditate ipsam, voluptatibus saepe! Autem, excepturi?</p>
                  
                </div>
                <div class="column" style="background-color:#ddd;">
                  <h2>Column 4</h2>
                  <a>
                    <img src="/img/KlimerLogo.jpg" width="100%" height="100%">
                </a>
                  <p>Some text.. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus optio dolores veniam vero a obcaecati corporis, minus debitis architecto nesciunt! Mollitia earum voluptatem repellat cupiditate ipsam, voluptatibus saepe! Autem, excepturi?</p>
                </div>
                 <div class="column" style="background-color:#ccc;">
                  
                  <a>
                    <img src="/img/KlimerLogo.jpg" width="100%" height="100%">
                </a>
                  <p>Some text.. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus optio dolores veniam vero a obcaecati corporis, minus debitis architecto nesciunt! Mollitia earum voluptatem repellat cupiditate ipsam, voluptatibus saepe! Autem, excepturi?</p>
                </div>
                <div class="column" style="background-color:#ddd;">
                 
                  <a>
                    <img src="/img/KlimerLogo.jpg" width="100%" height="100%">
                </a>
                  <p>Some text.. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus optio dolores veniam vero a obcaecati corporis, minus debitis architecto nesciunt! Mollitia earum voluptatem repellat cupiditate ipsam, voluptatibus saepe! Autem, excepturi?</p>
                </div>
            
              -->
                
        </div>
       
        


    </div> 
    
</div>  
    
@endsection