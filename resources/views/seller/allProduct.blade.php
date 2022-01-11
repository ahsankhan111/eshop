@extends('layouts.sellerLayout')

@section('content')


<div class="container" style="background-color: white">      
    <div class="row mt-4">
      <div class="col-12">
        <center>
     

        <table class="table mt-5">
            <thead>
              <tr style="text-align: center">
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Categories</th>
                <th scope="col">Price</th>
                <th scope="col">Published by</th>
                <th scope="col">Discription</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            
                  @foreach ($allproductsArr as $product)
                  <tr style="text-align: center">
                    <th scope="row">{{$product->id}}</th>
                    <th><img src="/uploads/productimages/{{$product->productimg}}" width="80px" height="80px"></th>
                    <td>{{$product->title}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->User->name}}</td>
                    <td>{{$product->discription}}</td>
                    {{-- {{dd($product->category->name)}} --}}
                    <td>
                        <a href="/viewProduct" style="margin-right: 6px" target="blank"><i class="fa fa-eye fa-lg" title="View" > </i></a><br>
                        <a href="/editProduct/{{$product->id}}" style="margin-right: 6px"><i class="fa fa-pencil fa-lg" title="Edit" > </i></a><br>
                        <a href="/allProduct/{{$product->id}}" style="margin-right: 6px"><i class="fa fa-trash fa-lg" title="Delete" > </i></a><br>
                    </td>
                    
                  </tr>
                @endforeach 
                
            
            
            
            

            </tbody>
          </table>
          {{-- <i class="bi bi-emoji-frown" style="font-size: 2rem"></i>
          <p style="margin-top:15px ">No products found</p> --}}
        </center>
        
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
