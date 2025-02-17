<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Course;
use App\Models\Club;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        $courses = Course::all();
        $clubs = Club::all();

        return view('admin_dashboard', compact('teachers', 'courses', 'clubs'));
    }
}
