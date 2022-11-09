<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(!User::where('email', 'maple@maple.com')->exists())
            User::create([
                'name' => 'Maple',
               'email' =>  'maple@maple.com',
                'password' => Hash::make('maple'),
                'email_verified_at' => now(),
            ]);

        Category::factory(50)->create();
        User::factory(20)->create();
        Author::factory(20)->create();
        Book::factory(2000)->create();
    }
}
