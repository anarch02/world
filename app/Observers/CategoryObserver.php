<?php

namespace App\Observers;

use App\Models\Category;

class CategoryObserver
{
    public function creating(Category $category)
    {
//        $category->slug = $category->getSlugOptions();
    }

    public function updating(Category $category)
    {
//        $category->slug = $category->getSlugOptions();
    }
}
