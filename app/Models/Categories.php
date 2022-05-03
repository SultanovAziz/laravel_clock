<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Categories extends Model
{
    use HasFactory,AsSource,Attachable,Filterable;

    protected $fillable = [
        'title',
        'alias',
        'parent_id',
        'keywords',
        'description',
    ];

    protected $allowedFilters = [
        'title',
        'alias',
    ];

    protected $allowedSorts = [
        'title',
        'alias',
        'description',
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
