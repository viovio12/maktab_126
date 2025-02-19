<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClubController extends Controller
{
    public function index()
    {
        $club = Club::all();
        return view('club.index', compact('club'));
    }

    public function create()
    {
        return view('club.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'fee' => 'nullable|numeric',
            'location' => 'nullable|string|max:255',
        ]);

        $club = new Club();
        $club->name = $request->name;
        $club->date = $request->date;
        $club->description = $request->description;
        $club->fee = $request->fee;
        $club->location = $request->location;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('club', 'public');
            $club->image = $imagePath;
        }

        $club->save();

        return redirect()->route('clubs.index')->with('success', 'Club created successfully!');
    }

    public function edit($id)
    {
        $club = Club::findOrFail($id);
        return view('club.edit', compact('club'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'fee' => 'nullable|numeric',
            'location' => 'nullable|string|max:255',
        ]);

        $club = Club::findOrFail($id);
        $club->name = $request->name;
        $club->date = $request->date;
        $club->description = $request->description;
        $club->fee = $request->fee;
        $club->location = $request->location;

        if ($request->hasFile('image')) {
            if ($club->image) {
                Storage::disk('public')->delete($club->image);
            }
            $imagePath = $request->file('image')->store('club', 'public');
            $club->image = $imagePath;
        }

        $club->save();

        return redirect()->route('clubw.index')->with('success', 'Club updated successfully!');
    }

    public function destroy($id)
    {
        $club = Club::findOrFail($id);
        
        if ($club->image) {
            Storage::disk('public')->delete($club->image);
        }

        $club->delete();

        return redirect()->route('clubs.index')->with('success', 'Club deleted successfully.');
    }
}
