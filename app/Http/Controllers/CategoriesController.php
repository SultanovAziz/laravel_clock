<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //

    public function index($alias)
    {
        $categories = Categories::where('alias','=',$alias)->get()->first();
        if (!$categories){
            abort(404);
        }

        $ids = $this->getIds($categories->id);
        $ids = !$ids ? $categories->id : $ids. $categories->id;
        $ids = explode(',',trim($ids,','));
        $products = Product::whereIn('categories_id',$ids)->get()->chunk(3);
        return view('categories',compact('categories','products'));
    }

    public function getIds($id)
    {
        $categories = Categories::all()->toArray();
        $ids = null;
        foreach ($categories as $k=>$v)
        {
            if($v['parent_id'] == $id)
            {
                $ids.= $v['id'] .',';
                $ids.= $this->getIds($v['id']);
            }
        }
        return $ids;
    }
}
