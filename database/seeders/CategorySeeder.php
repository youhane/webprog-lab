<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Beauty',
                'slug' => 'beauty',
            ],
            [
                'name' => 'Camera',
                'slug' => 'camera',
            ],
            [
                'name' => 'Clothing',
                'slug' => 'clothing',
            ],
            [
                'name' => 'Hobby',
                'slug' => 'hobby',
            ],
            [
                'name' => 'Others',
                'slug' => 'others',
            ]
        ]);
    }
}
