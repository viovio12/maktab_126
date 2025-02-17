<?php

// database/seeders/ClubSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubSeeder extends Seeder
{
    public function run()
    {
        DB::table('clubs')->insert([
            [
                'name' => 'Science Club',
                'date' => now(),
                'description' => 'A club for students interested in science.',
                'image' => 'science_club.jpg',
                'fee' => 50,
                'location' => 'Room 101',
            ],
            [
                'name' => 'Art Club',
                'date' => now(),
                'description' => 'A club for students passionate about art.',
                'image' => 'art_club.jpg',
                'fee' => 30,
                'location' => 'Room 102',
            ],
            [
                'name' => 'Coding Club',
                'date' => now(),
                'description' => 'A club for students interested in programming.',
                'image' => 'coding_club.jpg',
                'fee' => 40,
                'location' => 'Room 103',
            ],
        ]);
    }
}
