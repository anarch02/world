<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations, HasSlug;

    protected $fillable = ['slug', 'name'];

    public array $translatable = ['name'];

    protected $casts = [
        'name' => 'array',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->usingLanguage('en')
            ->saveSlugsTo('slug');
    }
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
