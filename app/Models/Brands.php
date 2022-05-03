<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Brands extends Model
{
    use HasFactory,AsSource,Attachable,Filterable;

    protected $fillable = [
        'title',
        'alias',
        'img',
        'description',
    ];

    protected $allowSorts = [
        'title',
    ];

    protected $allowFilters = [
        'alias',
        'description'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
