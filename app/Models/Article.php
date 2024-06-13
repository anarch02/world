<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'category_id',
        'image',
        'content',
        'posting',
        'is_active',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Article $article)
        {
            $article->slug = $article->slug ?? str($article->title)->slug();
        });
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'article_tag', 'article_id', 'id');
    }

    public function comments():HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
