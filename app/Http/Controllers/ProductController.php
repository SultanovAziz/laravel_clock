<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //

    public function index($alias)
    {
        $product = Product::where('alias' ,'=',$alias)->get()->first();
        if(!$product)
        {
            abort(404);
        }
        $gallery = DB::table('gallery')->where('product_id','=',$product->id)->get();
        $mods = DB::table('modification')->where('product_id','=',$product->id)->get();
        $reladet = DB::table('related_product')->join('products','products.id','=','related_product.related_id')
            ->where('related_product.product_id','=',$product->id)
            ->get();
        //$reladet = DB::table('related_product')->where('product_id','=',$product->id)->get();
        dump($reladet);
        return view('product.product',compact('product','gallery','mods','reladet'));
    }


}
