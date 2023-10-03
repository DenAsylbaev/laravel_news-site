<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    // public function getData(): array
    // {
    //     $quantityCategories = 10;
    //     $categories = [];
    //     $faker = Faker\Factory::create();

    //     for ($i=0; $i < $quantityCategories; $i++) {
    //         $categories[] = [
    //             'title' => $faker->text(10),
    //             'description' => $faker->text(20),
    //             'created_at' => now(),
    //         ];
    //     }

    //     return $categories;
    // }

    public function getData(): array
    {
        return [
            [
                'title' => 'Спорт',
                'description' => 'Новости спорта',
                'created_at' => now(),
            ],
            [
                'title' => 'Политика',
                'description' => 'Новости политики',
                'created_at' => now(),
            ],            [
                'title' => 'Развлечения',
                'description' => 'Новости развлечения',
                'created_at' => now(),
            ],

        ];
    }
}