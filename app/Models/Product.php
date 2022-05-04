<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
use Orchid\Screen\Concerns\Multipliable;

class Product extends Model
{
    use HasFactory,AsSource,Attachable,Filterable,Multipliable;

    protected $fillable = [
        'categories_id',
        'brands_id',
        'title',
        'alias',
        'content',
        'price',
        'old_price',
        'status',
        'keywords',
        'description',
        'img',
        'hit',

    ];

    protected $allowedFilters = [

    ];

    protected  $allowedSorts = [

    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function brands()
    {
        return $this->belongsTo(Brands::class);
    }
}
