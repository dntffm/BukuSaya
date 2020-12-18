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
                "images" => "ReadyPlayerOne"
            ],
            [
                "title" => "Ready Player Two",
                "author" => "Ernest Cline",
                "publisher" => "Ballantine Books",
                "price" => 20000,
                "images" => "ReadyPlayerTwo"
            ],
            [
                "title" => "Love & Olives",
                "author" => "Jenna Evans Welch",
                "publisher" => "Simon Pulse",
                "price" => 170000,
                "images" => "Love&Olives"
            ],
            [
                "title" => "A Cuban Girl's Guide to Tea and Tomorrow",
                "author" => "Laura Taylor Namey",
                "publisher" => "Atheneum Books for Young Readers",
                "price" => 174000,
                "images" => "ACubanGirl"
            ],
            [
                "title" => "Spellbreaker",
                "author" => "Charlie N. Holmberg",
                "publisher" => "47North",
                "price" => 164000,
                "images" => "Spellbreaker"
            ],
            [
                "title" => "The Fires of Vengeance",
                "author" => "Evan Winter",
                "publisher" => "Evan Winter",
                "price" => 184000,
                "images" => "TheFiresofVengeance"
            ],
            [
                "title" => "Blood Like Garnets",
                "author" => "Leigh Harlen",
                "publisher" => "TKO Studios",
                "price" => 90000,
                "images" => "BloodLikeGarnets"
            ],
            [
                "title" => "This Is Not a Ghost Story",
                "author" => "Andrea Portes",
                "publisher" => "HarperTeen",
                "price" => 140000,
                "images" => "ThisIsNotaGhostStory"
            ],
            [
                "title" => "The Little Mermaid",
                "author" => "Jerry Pinkney, Hans Christian Andersen",
                "publisher" => "Little, Brown Books for Young Readers",
                "price" => 102000,
                "images" => "TheLittleMermaid"
            ],
            [
                "title" => "Find Fergus",
                "author" => "Mike Boldt",
                "publisher" => "Doubleday Books for Young Readers",
                "price" => 50000,
                "images" => "FindFergus"
            ],
        ];
        DB::table('books')->insert($books);
    }
}
