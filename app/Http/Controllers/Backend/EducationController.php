<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Education; // Ensure this matches the model's namespace
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::all();
        return view('backend.education', compact('educations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'starting_date' => 'required|date',
            'university_name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Education::create($request->all());

        return redirect()->route('admin.education')->with('success', 'Education entry created successfully.');
    }

    public function edit($id)
    {
        $education = Education::findOrFail($id);
        return view('backend.edit-education', compact('education'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'starting_date' => 'required|date',
            'university_name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $education = Education::findOrFail($id);
        $education->update($request->all());

        return redirect()->route('admin.education')->with('success', 'Education entry updated successfully.');
    }

    public function destroy($id)
    {
        $education = Education::findOrFail($id);
        $education->delete();

        return redirect()->route('admin.education')->with('success', 'Education entry deleted successfully.');
    }
}
