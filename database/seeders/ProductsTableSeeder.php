<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            // Електроніка
            [
                'name' => 'Смартфон Galaxy S22',
                'description' => 'Смартфон с AMOLED-экраном и отличной камерой.',
                'price' => 25000.00,
                'category_id' => 1,
            ],
            [
                'name' => 'Ноутбук HP Pavilion 15',
                'description' => 'Мощный ноутбук для работы и развлечений.',
                'price' => 38000.00,
                'category_id' => 1,
            ],
            [
                'name' => 'Наушники Bluetooth Sony',
                'description' => 'Беспроводные наушники с шумоподавлением.',
                'price' => 5000.00,
                'category_id' => 1,
            ],

            // Одяг
            [
                'name' => 'Куртка зимова чоловіча',
                'description' => 'Теплая зимняя куртка с капюшоном.',
                'price' => 4500.00,
                'category_id' => 2,
            ],
            [
                'name' => 'Кросівки спортивні',
                'description' => 'Лёгкие кроссовки для бега и прогулок.',
                'price' => 3200.00,
                'category_id' => 2,
            ],
            [
                'name' => 'Футболка чоловіча',
                'description' => 'Бавовняна футболка з сучасним дизайном.',
                'price' => 800.00,
                'category_id' => 2,
            ],

            // Книги
            [
                'name' => 'Книга "Шерлок Холмс"',
                'description' => 'Классическая коллекция детективных рассказов.',
                'price' => 300.00,
                'category_id' => 3,
            ],
            [
                'name' => 'Підручник з математики 9 клас',
                'description' => 'Навчальний посібник для школярів.',
                'price' => 150.00,
                'category_id' => 3,
            ],
            [
                'name' => 'Щоденник мотивації',
                'description' => 'Планировщик для достижения целей.',
                'price' => 200.00,
                'category_id' => 3,
            ],
            [
                'name' => 'Кулінарна книга "Смачні рецепти"',
                'description' => 'Коллекция лучших рецептов для всей семьи.',
                'price' => 400.00,
                'category_id' => 3,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
