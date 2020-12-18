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
                "book_id" => 11,
            ],
            [
                "category_id" => 1,
                "book_id" => 12,
            ],
            [
                "category_id" => 2,
                "book_id" => 13,
            ],
            [
                "category_id" => 2,
                "book_id" => 14,
            ],
            [
                "category_id" => 3,
                "book_id" => 15,
            ],
            [
                "category_id" => 3,
                "book_id" => 16,
            ],
            [
                "category_id" => 4,
                "book_id" => 17,
            ],
            [
                "category_id" => 4,
                "book_id" => 18,
            ],
            [
                "category_id" => 6,
                "book_id" => 19,
            ],
            [
                "category_id" => 6,
                "book_id" => 20,
            ],
        ];
        DB::table('book_category')->insert($bookcategory);
    }
}
