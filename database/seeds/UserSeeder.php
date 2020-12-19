<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = App\User::create([
            "name" => "jackseparo",
            "email" => "jack@tokobuku.id",
            "password" => Hash::make("jackyjack")
        ]);

        $admin->assignRole('admin');
    }
}
