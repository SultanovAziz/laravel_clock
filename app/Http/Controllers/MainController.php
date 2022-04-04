<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function index()
    {
        $brands = Brands::limit(3)->get();
        $hits =Product::where([
            ['hit','=','1'],
            ['status','=','1'],
        ])->limit(8)->get()->chunk(4);
        return view('index',compact('brands','hits'));
    }
}
