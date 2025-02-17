<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        DB::table('teachers')->insert([
            [
                'name' => 'John Doe',
                'subject' => 'Mathematics',
                'image' => 'teacher1.jpg',
            ],
            [
                'name' => 'Jane Smith',
                'subject' => 'English',
                'image' => 'teacher2.jpg',
            ],
            [
                'name' => 'David Brown',
                'subject' => 'Physics',
                'image' => 'teacher3.jpg',
            ],
        ]);
    }
}
