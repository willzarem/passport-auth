<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 40)->create();
    }
}
