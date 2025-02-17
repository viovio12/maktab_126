<?php

// database/seeders/DatabaseSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call the individual seeders
        $this->call([
            TeacherSeeder::class,
            CourseSeeder::class,
            ClubSeeder::class,
            UserSeeder::class,  // Admin user seeder
        ]);
    }
}
