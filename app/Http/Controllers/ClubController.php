<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller {
    public function index() {
        return Club::all();
    }
    public function store(Request $request) {
        $request->validate(['date' => 'required', 'name' => 'required', 'description' => 'required', 'image' => 'required', 'fee' => 'required', 'location' => 'required']);
        return Club::create($request->all());
    }
    public function update(Request $request, Club $club) {
        $club->update($request->all());
        return $club;
    }
    public function destroy(Club $club) {
        $club->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
