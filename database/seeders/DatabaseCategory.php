<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseCategory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['title'=> 'Електроніка'],
            ['title'=> 'Одяг'],
            ['title'=> 'Книги'],
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
