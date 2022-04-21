<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\User;
use Database\Factories\CommentsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(10)->create();
        //CommentsFactory::factory(5)->create();
        $this->call([CommentsSeed::class]);
        //$this->call([UsersSeeder::class]);
    }
}
