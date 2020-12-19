<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                "title" => "Ready Player One",
                "author" => "Ernest Cline",
                "publisher" => "Crown Publishers",
                "price" => 180000,
                "images" => "ReadyPlayerOne",
                "stock" => 10

            ],
            [
                "title" => "Ready Player Two",
                "author" => "Ernest Cline",
                "publisher" => "Ballantine Books",
                "price" => 20000,
                "images" => "ReadyPlayerTwo",
                "stock" => 10
            ],
            [
                "title" => "Love & Olives",
                "author" => "Jenna Evans Welch",
                "publisher" => "Simon Pulse",
                "price" => 170000,
                "images" => "Love&Olives",
                "stock" => 10
            ],
            [
                "title" => "A Cuban Girl's Guide to Tea and Tomorrow",
                "author" => "Laura Taylor Namey",
                "publisher" => "Atheneum Books for Young Readers",
                "price" => 174000,
                "images" => "ACubanGirl",
                "stock" => 10
            ],
            [
                "title" => "Spellbreaker",
                "author" => "Charlie N. Holmberg",
                "publisher" => "47North",
                "price" => 164000,
                "images" => "Spellbreaker",
                "stock" => 10
            ],
            [
                "title" => "The Fires of Vengeance",
                "author" => "Evan Winter",
                "publisher" => "Evan Winter",
                "price" => 184000,
                "images" => "TheFiresofVengeance",
                "stock" => 10
            ],
            [
                "title" => "Blood Like Garnets",
                "author" => "Leigh Harlen",
                "publisher" => "TKO Studios",
                "price" => 90000,
                "images" => "BloodLikeGarnets",
                "stock" => 10
            ],
            [
                "title" => "This Is Not a Ghost Story",
                "author" => "Andrea Portes",
                "publisher" => "HarperTeen",
                "price" => 140000,
                "images" => "ThisIsNotaGhostStory",
                "stock" => 10
            ],
            [
                "title" => "The Little Mermaid",
                "author" => "Jerry Pinkney, Hans Christian Andersen",
                "publisher" => "Little, Brown Books for Young Readers",
                "price" => 102000,
                "images" => "TheLittleMermaid",
                "stock" => 10
            ],
            [
                "title" => "Find Fergus",
                "author" => "Mike Boldt",
                "publisher" => "Doubleday Books for Young Readers",
                "price" => 50000,
                "images" => "FindFergus",
                "stock" => 10
            ],
        ];
        DB::table('books')->insert($books);
    }
}
