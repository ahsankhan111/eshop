<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ApiController extends Controller
{
    function showData()
    {

        // return ["name" => "ahsan", "name" => "ahsan"];
    }

    function getData($id = null)
    {
        $error = "No record Found FFS!";
        if (!product::find($id)) {
            return  $error;
        } else if (product::find($id)) {
            return  product::find($id);
        }

        $id ? product::find($id) : product::all();
    }
}
