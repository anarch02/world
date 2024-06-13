<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Category $category)
        {
            $category->slug = $category->slug ?? str($category->name)->slug();
        });
    }

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
