<?php

namespace Database\Seeders;

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
<<<<<<< HEAD
=======
        // User::factory(10)->create();
>>>>>>> 828c9f8 (update layout)
        $this->call([
            UserSeeder::class,
        ]);
    }
}
