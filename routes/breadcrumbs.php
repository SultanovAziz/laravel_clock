<?php


use App\Models\Categories;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;


Breadcrumbs::register('product',function ($breadcrumbs,$product){
    $breadcrumbs->push('Главная',route('home'));
    foreach (generateBreadCrumbs($product->id) as $alias => $title)
    {
        $breadcrumbs->push($title,route('categories.alias',[$alias]));
    }
    $breadcrumbs->push($product->categories->title,route('categories.alias',[$product->categories->alias]));
    $breadcrumbs->push($product->title);
});



function generateBreadCrumbs($id)
{
    $categories = Categories::all()->toArray();
    if (!$id) return false;
    $breadcrumbs = [];
    foreach ($categories as $k=>$v)
    {
        if(isset($categories[$id]))
        {
            $breadcrumbs[$categories[$id]['alias']] = $categories[$id]['title'];
            $id = $categories[$id]['parent_id'];
        }else break;
    }
    return array_reverse($breadcrumbs, true);
}
