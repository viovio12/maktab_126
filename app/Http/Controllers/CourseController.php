<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the courses.
     */
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new course.
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created course in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);
    
        $imagePath = null;
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('courses', 'public'); // Store image in 'storage/app/public/courses'
        }
    
        Course::create([
            'name' => $request->name,
            'rating' => $request->rating,
            'image' => $imagePath, // Save image path
        ]);
    
        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }
    

    /**
     * Show the form for editing the specified course.
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('course.edit', compact('course'));
    }

    /**
     * Update the specified course in the database.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'rating' => 'required|integer|min:1|max:5',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $course = Course::findOrFail($id);
    $imagePath = $course->image;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('courses', 'public'); // Store new image
    }

    $course->update([
        'name' => $request->name,
        'rating' => $request->rating,
        'image' => $imagePath,
    ]);

    return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
}

    /**
     * Remove the specified course from the database.
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}
