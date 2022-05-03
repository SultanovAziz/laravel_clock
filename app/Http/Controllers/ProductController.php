<?php

namespace App\Http\Controllers;

use App\Facades\Currency;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Facades\RecentlyViewed;

class ProductController extends Controller
{
    //

    public function index($alias)
    {
        $product = Product::where('alias', '=', $alias)->get()->first();
        if (!$product) {
            abort(404);
        }
        $gallery = DB::table('gallery')->where('product_id', '=', $product->id)->get();
        $mods = DB::table('modification')->where('product_id', '=', $product->id)->get();
        $reladet = DB::table('related_product')->join('products', 'products.id', '=', 'related_product.related_id')
            ->where('related_product.product_id', '=', $product->id)
            ->get();
        RecentlyViewed::setRecentlyViewed($product->id);
        $viewed = RecentlyViewed::getRecentlyViewed();
        $recentlyViewed = null;
        if ($viewed) {
            $recentlyViewed = Product::whereIn('id', $viewed)->get();
        }
        $currency = Currency::getCurrency(Currency::getCurrencies());
        return view('product.product', compact('product', 'gallery', 'mods', 'reladet', 'recentlyViewed','currency'));
    }


}
