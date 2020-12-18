<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BookCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ["category_name" => "Fiksi Ilmiah"],
            ["category_name" => "Romance"],
            ["category_name" => "Fantasi"],
            ["category_name" => "Horror"],
            ["category_name" => "Anak-anak"]
        ];
        DB::table('categories')->insert(
           $categories
        );
    }
}
