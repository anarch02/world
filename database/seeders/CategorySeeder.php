<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'travel',
            'sport',
            'fashion',
            'technology',
            'health',
            'business',
            'entertainment',
            'science',
        ];

        foreach ($categories as $category)
        {
            Category::factory()->create([
                'name' => $category
            ]);
        }

    }
}