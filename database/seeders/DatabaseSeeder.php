<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Messages;
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
         User::factory(10)
            ->has(
                Messages::factory()->count(5), 'messages')
            ->create();
    }
}