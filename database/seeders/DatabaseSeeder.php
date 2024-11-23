<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(rand(1, 1000))->create()->each(function ($user) {
            $user->companies()->saveMany(Company::factory(rand(1, 10))->make(
                ['user_id' => $user->id]
            ));
        });
    }
}
