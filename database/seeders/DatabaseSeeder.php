<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Transaction;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        User::class::factory(10)->create()->each(function ($user){

            $user->transactions()->save(Transaction::class::factory()->make());

        });
    }
}
