<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller {
    public function index() {
        return Course::all();
    }
    public function store(Request $request) {
        $request->validate(['name' => 'required', 'rating' => 'required|integer', 'image' => 'required']);
        return Course::create($request->all());
    }
    public function update(Request $request, Course $course) {
        $course->update($request->all());
        return $course;
    }
    public function destroy(Course $course) {
        $course->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
