<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::factory(10)->create();

        $tags = Tag::all();
        $articles = Article::all();

        foreach ($tags as $tag)
        {
            $tag->articles()->attach($articles->pluck('id')->toArray());
        }
    }
}
