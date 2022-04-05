<?php


use App\Models\Categories;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;


Breadcrumbs::register('product',function ($breadcrumbs,$product){
    $breadcrumbs->push('Главная',route('home'));
    foreach (generateBreadCrumbs($product->categories_id-1) as $alias => $title)
    {
        $breadcrumbs->push($title,route('categories.alias',[$alias]));
    }
    $breadcrumbs->push($product->title);
});

Breadcrumbs::register('categories',function ($breadcrumbs,$categories){
    $breadcrumbs->push('Главная',route('home'));
    foreach (generateBreadCrumbs($categories->id-1) as $alias => $title){
        $breadcrumbs->push($title,route('categories.alias',[$alias]));
    }
});


function generateBreadCrumbs($id)
{
    $categories = Categories::all()->toArray();
    if ($id == 0) return ['alias' => $categories[$id]['title']];
    $breadcrumbs = [];
    foreach ($categories as $k=>$v)
    {
        if(isset($categories[$id]))
        {
            $breadcrumbs[$categories[$id]['alias']] = $categories[$id]['title'];
            $id = $categories[$id]['parent_id']-1;
        }else break;
    }
    return array_reverse($breadcrumbs, true);
}
