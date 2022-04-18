<?php


namespace App\Services\Filter;

use Illuminate\Support\Facades\DB;

class FilterService
{
    protected $attribute ;
    protected $group;
    protected $tpl;

    public function __construct()
    {
        dump($this->getArribute(),$this->getGroups());
    }

    public function getGroups()
    {
        $this->group = DB::table('attribute_group')->get()->pluck('title','id');
        return $this->group;
    }

    public function getArribute()
    {
        $this->attribute = DB::table('attribute_value')->select('id','title','attribute_group_id')
            ->get()
            ->toArray();
        return $this->attribute;
    }
}
