<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
use Faker\Factory as Faker;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Очищаем таблицу перед заполнением
        Item::truncate();

        // Используем Faker для генерации случайных данных
        $faker = Faker::create();

        // Заполняем таблицу 10 случайными строками
        for ($i = 1; $i <= 10; $i++) {
            Item::create([
                'name' => $faker->firstName . ' ' . $faker->lastName, // Случайное имя и фамилия
                'url' => $faker->url,  // Случайная ссылка
            ]);
        }
    }
}
