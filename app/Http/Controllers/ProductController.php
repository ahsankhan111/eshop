<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\size;
use Illuminate\Http\Request;

class ProductController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('seller.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //product::create($request->all()); 
        //return $request;
        $res = new product;
        $size = new size;
        $category = new category;
        $res->title = $request->input('title');
        $res->price = $request->input('price');
        //$res->categories =  $request->input('categories');
        $res->discription = $request->input('discription');

        if ($request->hasFile('productimg')) {
            $file = $request->file('productimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/productimages/', $filename);
            $res->productimg = $filename;
        }
        $res->save();
        $size->product_id = $res->id;
        $size->small = $request->input('quantity1');
        $size->large = $request->input('quantity2');
        $size->medium = $request->input('quantity3');
        $size->xLarge = $request->input('quantity4');

        $size->save();
        $category->name = $request->input('categories');
        $category->save();
        return view('seller.allProduct')->with('allproductsArr', product::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('seller.allProduct')->with('allproductsArr', product::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('seller.editProduct')->with('allproductsArr', product::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //print_r($request->id);

        $res = product::find($request->id);
        $size = size::find($request->id);
        $res->title = $request->input('title');
        $res->price = $request->input('price');
        $res->categories =  $request->input('categories');
        $res->discription = $request->input('discription');

        if ($request->hasFile('productimg')) {
            $file = $request->file('productimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/productimages/', $filename);
            $res->productimg = $filename;
        }
        $res->save();
        //$size->product_id = $res->id;
        $size->small = $request->input('quantity1');
        $size->large = $request->input('quantity2');
        $size->medium = $request->input('quantity3');
        $size->xLarge = $request->input('quantity4');

        $size->save();

        return redirect('allProduct');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        product::destroy($id);
        return redirect('allProduct');
    }
}
