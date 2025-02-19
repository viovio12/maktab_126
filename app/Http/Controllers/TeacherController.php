<?
// app/Http/Controllers/TeacherController.php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin_dashboard', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
    
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->subject = $request->subject;
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('teachers', 'public');
            $teacher->image = $imagePath;
        }
    
        $teacher->save();
    
        return redirect()->route('teachers.index')->with('success', 'Teacher created successfully!');
    }
    
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teacher'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
    
        $teacher = Teacher::findOrFail($id);
        $teacher->name = $request->name;
        $teacher->subject = $request->subject;
    
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($teacher->image) {
                Storage::disk('public')->delete($teacher->image);
            }
            
            $imagePath = $request->file('image')->store('teachers', 'public');
            $teacher->image = $imagePath;
        }
    
        $teacher->save();
    
        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully!');
    }
    public function destroy($id)
    {
    $teacher = Teacher::findOrFail($id);
    $teacher->delete();

    return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully.');
    }

}