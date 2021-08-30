<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ContactSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CountrySeed;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CountrySeed::class,
            ContactSeeder::class
        ]);
    }
}
