<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Product;
use App\Facades\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function index()
    {
        $brands = Brands::limit(3)->get();
//        $hits =Product::where([
//            ['hit','=','1'],
//            ['status','=','1'],
//        ])->limit(8)->get()->chunk(4);
        $hits = Product::where('hit','1')->where('status','1')->limit(8)->get()->chunk(4);
        $currency = Currency::getCurrency(Currency::getCurrencies());
        return view('index',compact('brands','hits','currency'));
    }


}
