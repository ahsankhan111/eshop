@extends('layouts.sellerLayout')

@section('content')


<div class="container" style="background-color: white">

    
    <center class="row mt-5" style="padding: 15px"><h2>Add New Product</h2 sty></center>
    <div class="row mt-1">
      <div class="col-12" style="padding: 35px">
        <form class="row g-3" method="post" action="submitted" enctype="multipart/form-data">
              @csrf
            <div class="col-md-6">
              <label for="Title" class="form-label fw-bold">Product Title</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="My cool new product">
            </div>

            <div class="col-md-2">
              <label for="Price" class="form-label fw-bold">Price</label>
              <input type="text" class="form-control" id="price" name="price" >
              
            </div>  

            
            <div class="col-md-6 mt-4">
              <label for="img" class="form-label fw-bold">Upload Image</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="productImg" name="productimg" accept=".png, .jpg, .jpeg" multiple>
            </div>
            </div>

            <div class="col-md-6 mt-4">
              <label for="categories" class="form-label fw-bold">Product categories</label>
              <select id="categories" name="categories" class="form-select">
                <option selected>Choose...</option>
                <option value="Men" >Men</option>
                <option value="Women" >Women</option>
                <option value="Kids" >Kids</option>
              </select>
            </div>

            <div class="col-12 mt-4">
              <label for="Discription" class="form-label fw-bold">Product Discription</label>
              <input type="text" class="form-control" id="discription" name="discription" placeholder="Describeyour product">
            </div>
            
              
            <div class="col-md-6 mt-4">
              <label for="size1" class="form-label fw-bold">Available sizes</label>
              <p class="mt-2">Small:</p>
            </div>
            <div class="col-md-6 mt-4">
              <label for="quantity1" class="form-label  fw-bold">Quantity</label>
              <input type="text" class="form-control mt-2" id="quantity1" name="quantity1">
            </div>
            <!-- second size group -->
            
            <div class="col-md-6 ">
               
              <p>Medium:</p>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" id="quantity2" name="quantity2">
              </div>
              <!-- 3 size group -->
            
            <div class="col-md-6 ">
               
              <p>Large:</p>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" id="quantity3" name="quantity3">
              </div>
              <!-- 4 size group -->
             
            <div class="col-md-6 ">
               
              <p>X-Large: </p>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" id="quantity4" name="quantity4">
              </div>

            
            <div class="col-12 mt-4 ">
              <center>
              <button type="submit" name="submit" class="btn btn-primary">Submit </button>
              <a href="/seller">
                <button type="button" name="back_to_home" class="btn btn-danger">Cancel</button>
              </a>
            </center> 
            </div>
          </form>
    

      </div>
    </div>
  </div>








<!--
<div class="container"> 
    <div class="row mt-2 ">
        <div class="col " >
           
        </div>   
          
    </div>    
<div class="col border border-info  m">
-->
            
    
    



</div> 
</div>

@endsection
