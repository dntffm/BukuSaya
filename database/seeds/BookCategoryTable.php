<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BookCategoryTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookcategory = [
            [
                "category_id" => 1,
                "book_id" => 1,
            ],
            [
                "category_id" => 1,
                "book_id" => 2,
            ],
            [
                "category_id" => 2,
                "book_id" => 3,
            ],
            [
                "category_id" => 2,
                "book_id" => 4,
            ],
            [
                "category_id" => 3,
                "book_id" => 5,
            ],
            [
                "category_id" => 3,
                "book_id" => 6,
            ],
            [
                "category_id" => 4,
                "book_id" => 7,
            ],
            [
                "category_id" => 4,
                "book_id" => 8,
            ],
            [
                "category_id" => 5,
                "book_id" => 9,
            ],
            [
                "category_id" => 5,
                "book_id" => 10,
            ],
        ];
        DB::table('book_category')->insert($bookcategory);
    }
}
