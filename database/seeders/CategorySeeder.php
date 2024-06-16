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
            [
                'en' => 'Travel',
                'ru' => 'Путешествия',
            ],
            [
                'en' => 'Technology',
                'ru' => 'Технологии',
            ],
            [
                'en' => 'Food',
                'ru' => 'Еда',
            ],
            [
                'en' => 'Health',
                'ru' => 'Здоровье',
            ],
            [
                'en' => 'Science',
                'ru' => 'Наука',
            ],
            [
                'en' => 'Sport',
                'ru' => 'Спорт',
            ]
        ];

        foreach ($categories as $category)
        {
            Category::create([
                'name' => $category
            ]);
        }

    }
}
