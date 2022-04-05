<?php


namespace App\Facades;


use Illuminate\Support\Facades\Facade;
use App\Services\RecentlyViewed\RecentlyViewedService;

class RecentlyViewed extends Facade
{

    protected static function getFacadeAccessor()
    {
        return RecentlyViewedService::class;
    }
}
