<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'categoryName' => 'Mens',
            'protucts' => 3,
            'description' => 'Lorem ipsum dolor sit amet consectetur,',
        ]);
        Category::create([
            'categoryName' => 'womens',
            'protucts' => 3,
            'description' => 'Lorem ipsum dolor sit amet consectetur,',

        ]);
        Category::create([
            'categoryName' => 'Kids',
            'protucts' => 4,
            'description' => 'Lorem ipsum dolor sit amet consectetur,',

        ]);
        Category::create([
            'categoryName' => 'jewellery',
            'protucts' => 10,
            'description' => 'Lorem ipsum dolor sit amet consectetur,',

        ]);
    }
}
