@extends('layouts.sellerLayout')

@section('content')

<div class="container">

   
    <center class="row mt-5">
      <h2>Edit Product</h2>
      
    </center>
    <div class="row mt-5">
      <div class="col-12">
        <form class="row g-3" method="post" action="../updated/{{$allproductsArr->id}}">
              @csrf
            <div class="col-md-6">
              <label for="Title" class="form-label">Product Title</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="My cool new product" value="{{$allproductsArr->title}}">
            </div>

            <div class="col-md-2">
              <label for="Price" class="form-label">Price</label>
              <input type="text" class="form-control" id="price" name="price" >
              
            </div>  

            <div class="col-md-6">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="productImg" name="productimg" accept=".png, .jpg, .jpeg" multiple>
              </div>
              </div>

            <div class="col-md-6">
              <label for="categories" class="form-label">Product categories </label>
              <select id="categories" name="categories" class="form-select">
                <option selected>Choose...</option>
                <option value="Men" >Men</option>
                <option value="Women" >Women</option>
                <option value="Kids" >Kids</option>
              </select>
            </div>
            <div class="col-12">
              <label for="Discription" class="form-label">Product Discription</label>
              <input type="text" class="form-control" id="discription" name="discription" placeholder="Describeyour product" value="{{$allproductsArr->discription}}">
            </div>
            
            <div class="col-2 ms-3">
            </div>    
            <div class="col-md-4 ">
              <label for="size1" class="form-label">Sizes</label>
              <select id="size1" name="size1" class="form-select">
                <option selected>Choose...</option>
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
                <option>X-Large</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="quantity1" class="form-label">Quantity</label>
              <input type="text" class="form-control" id="quantity1" name="quantity1">
            </div>
            <!-- second size group -->
            <div class="col-2 ms-3">
            </div> 
            <div class="col-md-4 ">
               
                <select id="size2" name="size2" class="form-select">
                  <option selected>Choose...</option>
                  <option>Small</option>
                  <option>Medium</option>
                  <option>Large</option>
                  <option>X-Large</option>
                </select>
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" id="quantity2" name="quantity2">
              </div>
              <!-- 3 size group -->
            <div class="col-2 ms-3">
            </div> 
            <div class="col-md-4 ">
               
                <select id="size3"  name="size3"class="form-select">
                  <option selected>Choose...</option>
                  <option>Small</option>
                  <option>Medium</option>
                  <option>Large</option>
                  <option>X-Large</option>
                </select>
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" id="quantity3" name="quantity3">
              </div>
              <!-- 4 size group -->
            <div class="col-2 ms-3">
            </div> 
            <div class="col-md-4 ">
               
                <select id="size4" name="size4" class="form-select">
                  <option selected>Choose...</option>
                  <option>Small</option>
                  <option>Medium</option>
                  <option>Large</option>
                  <option>X-Large</option>
                </select>
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" id="quantity4" name="quantity4">
              </div>

            
            <div class="col-12">
              <button type="submit" name="submit" class="btn btn-primary">Submit </button>
              <a href="/allProduct">
              <button type="button" name="back_to_allproduct" class="btn btn-primary">Cancel</button>
              </a>  
            </div>
          </form>
    

      </div>
    </div>
  </div>









<div class="container"> 
    <div class="row mt-2 ">
        <div class="col " >
           
        </div>   
          
    </div>    
<div class="col border border-info  m">
            
    
    



</div> 
</div>

@endsection
