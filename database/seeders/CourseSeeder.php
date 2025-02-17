<?php

// database/seeders/CourseSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->insert([
            [
                'name' => 'Advanced Math',
                'rating' => 4.5,
                'image' => 'math_course.jpg',
            ],
            [
                'name' => 'English Literature',
                'rating' => 4.0,
                'image' => 'english_course.jpg',
            ],
            [
                'name' => 'Physics 101',
                'rating' => 4.8,
                'image' => 'physics_course.jpg',
            ],
        ]);
    }
}
