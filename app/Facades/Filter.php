<?php


namespace App\Facades;


use Illuminate\Support\Facades\Facade;
use App\Services\Filter\FilterService;

class Filter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return FilterService::class;
    }
}
